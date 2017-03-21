<?php
session_start();
// verbinding met database
include 'php/connectToDB.php';

// als je geen admin bent, ga je terug naar de normale gallery
if (!isset($_SESSION['admin'])) {
    header("Location: gallery.php");
}
else{
}



?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Design Studio Armeni</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css"/>
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>
<!-- Navigation -->
<?php include 'items/navBar.php'; ?>

<!-- Laat alle ontwerpen zien + delete knop, alleen als admin-->
<div id="galleryContent">
    <?php
    if(isset($_SESSION['userSession'])) {
        $user_id = $_SESSION['userSession'];
    }
    $gallerySQL = "SELECT * FROM gallery"; // WHERE user_id='".$user_id."'

    $result = $connection->query($gallerySQL);

    // toon alle resultaten + delete knop
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<a href='" . $row['canvas_url'] . "'>" . "<img class='galleryImg' src=" . "'" . $row['canvas_url'] . "'" . "></a>";
            echo "<form role='form' action='php/canvasDelete.php' method='POST'>
                <input type='hidden' value='".$row['canvas_id']."' name='canvas_id'>
                <input type='submit' name='delete' value='Verwijderen'>
                </form>";
        }
    }
    // Sluit database connectie
    $connection->close();

    ?>

    <!--jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/activeItem.js"></script>
</body>
</html>