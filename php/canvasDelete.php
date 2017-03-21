<?php
// verbinding met database
 include 'connectToDB.php';

// als delete knop is ingedrukt -> delete dan specifiek ontwerp
if (isset($_POST['delete'])) {

    $gallery_id = $_POST['canvas_id'];
    $canvasDeleteSQL = "DELETE FROM gallery WHERE canvas_id = " . "'" . $gallery_id . "'";

    mysqli_query($connection, $canvasDeleteSQL);
    header('Location: ../galleryAdmin.php');
}
else{
    echo "OK DOEI";
}
