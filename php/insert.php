<?php
//verbinding naar Database
include 'connectToDB.php';

//Als submit knop is ingedrukt -> Sla gegevens op uit formulier
if (isset($_POST['submit'])) {
    $firstName = mysqli_real_escape_string($connection, $_POST['first_name']);
    $lastName = mysqli_real_escape_string($connection, $_POST['last_name']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5(mysqli_real_escape_string($connection, $_POST['password']));
    $phonenumber = mysqli_real_escape_string($connection, $_POST['phonenumber']);
}


// Als username, email en password niet leeg zijn, gaat hij gegevens naar database sturen.
if ($firstName != '' || $email != '' || $password !='') {

    $usernameSQL = "SELECT * FROM users WHERE username = " . "'" . $username . "'";
    $result = $connection->query($usernameSQL);

    // Als er al gegevens in database zijn met username -> Geef error
    if ($result->num_rows > 0) {
        // output data of each row
        echo "Username already in use";
        header('Location: ../register.php?usernameInUse=true');
    // Bij geen gegevens met username -> Sla gebruiker op in database
    } else {
        mysqli_query($connection, "insert into users(username, password, first_name, last_name, email, phonenumber) values ('$username' , '$password', '$firstName', '$lastName', '$email', '$phonenumber')");
        header('Location: ../login.php?registered=true');
    }

} else {
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
// sluit verbinding met database
mysqli_close($connection);