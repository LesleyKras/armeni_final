<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
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

<div class="wrapper">
<div class="row">
    <div class="col-sm-6">
        <div class="homeText">
            <!-- Tekst voor de homepage -->
            <h1>Design Studio Armeni</h1>
            <p>Ontwerpstudio Armeni is sinds September 2008 gevestigd in het Culturele hart van Rotterdam, het is zowel showroom als atelier.

                In het atelier ontwerpt eigenaresse en ontwerpster Armeni unieke mantels, jurken, rokken, broeken en combinaties van o.a. zijde, wol, sifon, kant en organza.</p>
            <p>Ze ontwerpt unica die worden gekenmerkt door toevoegingen van verfijnde applicaties en verrassende details. Haar stijl is elegant, theatraal en heel vrouwelijk en ze werkt voornamelijk in zwart en wit met af en toe een uitstapje naar geel, blauw of rood.

                Het interieur is strak, artistiek en vooral stijlvol. De aanwezigheid van het atelier zorgt tevens voor een ambachtelijke uitstraling.</p>
            <p>Voor speciale gelegenheden is het ook mogelijk om kleding op maat te laten maken, zowel voor mannen als voor vrouwen. Het hele proces, het ontwerpen en realiseren van het kledingstuk, wordt in het atelier uitgevoerd.
                In deze winkel vind je uitsluitend kleding van het eigen merk Armeni.</p>
        </div>
    </div>

    <div class="col-sm-6">
        <!-- Afbeelding voor de homepage, verander de src voor een andere afbeelding -->
        <img class="homeImage" src="http://www.meanwhile-in-rotterdam.com/wp-content/uploads/2015/03/MG_6892-1024.jpg">
    </div>


</div>
</div>


<!--jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Javascript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/activeItem.js"></script>
</body>
</html>