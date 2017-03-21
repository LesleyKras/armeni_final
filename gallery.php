<?php
session_start();
// verbinding met database
include 'php/connectToDB.php';
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

<!-- filter voor eigen ontwerpen. Alleen beschikbaar als gebruiker ingelogd is -->
<?php
if(isset($_SESSION['userSession'])){
    $ownDressLink = "<a class='galleryUrl' href='gallery.php?ownGallery=true'>Eigen ontwerpen</a>";
    echo $ownDressLink;
}
else{
    $ownDressLink = "";
}

if (isset($_GET['ownGallery'])) {
    $allDDressLink = "<a class='galleryUrl' href='gallery.php'>Alle ontwerpen</a>";
    echo $allDDressLink;
}
else{
    $allDDressLink = "";
}


// test hallo hoi test bkaw


?>
<div id="galleryContent">

    <!--  functie Welke Gallery items hij moet tonen -->
    <?php
    // Als gebruiker ingelogd is gaat hij kijken of de gebruiker zijn eigen ontwerpen of alle ontwerpen wil zien
    if (isset($_SESSION['userSession'])) {
        $user_id = $_SESSION['userSession'];

        // Als gebruiker eigen gallery wil zien
        if (isset($_GET['ownGallery'])) {
            $gallerySQL = "SELECT * FROM gallery WHERE user_id='" . $user_id . "'";


            $result = $connection->query($gallerySQL);
            // Als er resultaten in database zijn, maakt hij de afbeeldingen aan
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<a href='" . $row['canvas_url'] . "'>" . "<img class='galleryImg' src=" . "'" . $row['canvas_url'] . "'" . "></a>";

                }
            }
            // sluit database verbinding
            $connection->close();

            // Als gebruiker alle ontwerpen wil zien
        } else {
            $gallerySQL = "SELECT * FROM gallery";

            $result = $connection->query($gallerySQL);

            // Als er resultaten in de database zijn, maakt hij de afbeeldingen aan
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<a href='" . $row['canvas_url'] . "'>" . "<img class='galleryImg' src=" . "'" . $row['canvas_url'] . "'" . "></a>";

                }
            }
            // sluit database verbinding
            $connection->close();
        }


    }
    // Als niemand ingelogd is, laat hij alle ontwerpen zien
    else {

        $gallerySQL = "SELECT * FROM gallery";

        $result = $connection->query($gallerySQL);

        // Als er resultaten in de database zijn, maakt hij de afbeeldingen aan
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<a href='" . $row['canvas_url'] . "'>" . "<img class='galleryImg' src=" . "'" . $row['canvas_url'] . "'" . "></a>";

            }


        }
    }


    ?>

    <!--jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/activeItem.js"></script>
</body>
</html>