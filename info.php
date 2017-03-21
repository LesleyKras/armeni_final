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
    <!-- Google maps -->
    <script type="text/javascript" src="js/googleMaps.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>

<!-- Navigation -->
<?php include 'items/navBar.php'; ?>

<div class="wrapper">
    <div class="row homeText">
        <div class="col-sm-4">
            <h4>Contactinformatie:</h4><br>
            <p>
                Hier zijn de gegevens te vinden van Ontwerp Studio Armeni.<br>
                Hier rechts kunt u de openingstijden, adres en contactgegevens vinden. Daarnaast zijn wij ook altijd bereikbaar per telefoon op de volgende nummers:<br>
                <br>
                Armeni: +31612345678<br>
                Tigran: +31612345678<br>
                Maroet: +31614220922
            </p>
        </div>

        <div class="col-sm-4">
            <h4>Openingstijden:</h4><br>
            <p>
                Ma: 09:00 - 17:00<br>
                Di: 09:00 - 17:00<br>
                Wo: 09:00 - 17:00<br>
                Do: 09:00 - 17:00<br>
                Vr: 09:00 - 17:00<br>
                Za: 09:00 - 17:00<br>
                Zo: 09:00 - 17:00<br>
            </p>
        </div>
        <div class="col-sm-4">
            <h4>Adresgegevens:</h4><br>
            <p>
                Ontwerpstudio Armeni<br><br>

                Schilderstraat 61a<br>
                3011 ER   Rotterdam<br><br>

                Tel.: +31 10 41 15 980<br>
                E-mail: armeni@live.nl

            </p>

        </div>


    </div>
</div>
<div id="mapCanvas"></div>





<!--jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Javascript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/activeItem.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAJi13HcweuLrffglWzVvG6KKP0tIzFLQ&callback=initMap">
</script>
</body>
</html>