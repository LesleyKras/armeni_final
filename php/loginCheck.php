<?php
// verbinding met database
include 'connectToDB.php';

// als login knop is ingedrukt -> sla gegevens uit form op
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
}
// Haal gegevens op met die speciefieke username
$usernameSQL = "SELECT * FROM users WHERE username = "."'".$username."'";

$result = $connection->query($usernameSQL);

// als er resultaten zijn -> vergelijk dan gegevens uit form met database
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        //Als username en wachtwoord overheen komen, start dan een sessie
        if(($username === $row['username'] && $password === $row['password'])){
            session_start();
            $_SESSION['userSession'] = $row['user_id'];
            $_SESSION['firstname'] = $row['firstname'];
            // als gebruiker admin is, krijgt hij een admin session.
            if($row['admin'] == 1){
                    $_SESSION['admin'] = 1;
                }
                else{

                }

            header('Location: ../createDress.php');
            exit();
        }
        // Als gegevens niet overheen komen, ga terug met error
        else{
            header('Location: ../login.php?wrongUsername=true');
        }
    }
} else {
    header('Location: ../login.php?wrongUsername=true');
}
$connection->close();