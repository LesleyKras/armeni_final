<?php
session_start();

// als er iets in de 'img' zit, sla dan gegevens op
if (isset( $_POST['img'])) {
    $canvasSaved = $_POST['img'];
    $user_id = $_SESSION['userSession'];

    //verbinding met database
    include 'connectToDB.php';

    //voer query uit -> Stopt canvas in database
    mysqli_query($connection,"insert into gallery(canvas_url, user_id) values ('$canvasSaved', '$user_id')");

    // Toon message of het succesvol is gegeaan of niet
    echo "Succesfully Saved!";
} else
{
    echo "awwww";
}


?>
