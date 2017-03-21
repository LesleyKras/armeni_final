<?php
session_start();

// als er gebruiker niet ingelogd is, zend hem terug naar login pagina
if (!isset($_SESSION['userSession'])) {
    header("Location: login.php?login=false");
}

?>

<!DOCTYPE html>
<html lang="en">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>

<!-- Navigation -->
<?php include 'items/navBar.php'; ?>
<div class="canvasText">

    <div id="drawText" class="col-sm-4">
        <h1 class="h1">Design your Dress</h1>

        <p>
            In de canvas, het element met de paspop er op, kun je tekenen.
            Hier kun je een eigen ontwerp maken voor een prachtige jurk.
            De ontwerpen kun je opslaan om zo als inspiratiebron te dienen voor Armeni Tovmasjan.
            Wie weet zie je wel jouw ontwerp terug in de winkel!
        </p>

        <p>
            Er zijn rechts kleuren waar je uit kunt kiezen en een lijndikte.
            Vervolgens kun je via het element waar de paspop in staat tekenen.
        </p>
    </div>

    <div id="buttons">


        <div id="sketch" class="col-sm-4">
            <canvas style="position:absolute;" id="paint"></canvas>
        </div>

        <!-- Knoppen voor de kleuren -->
        <div id="kleuren">
            <p class="lijndikte">Kleuren:</p>
            <ul>
                <li><input type="button" class="btn btn-default" id="red" onclick="redColor()"/></li>
                <li><input type="button" class="btn btn-default" id="green" onclick="greenColor()"/></li>
                <li><input type="button" class="btn btn-default" id="blue" onclick="blueColor()"/></li>
                <li><input type="button" class="btn btn-default" id="yellow" onclick="yellowColor()"/></li>
                <li><input type="button" class="btn btn-default" id="purple" onclick="purpleColor()"/></li>
                <li><input type="button" class="btn btn-default" id="black" onclick="blackColor()"/></li>
                <li><input type="button" class="btn btn-default" id="white" onclick="whiteColor()"/></li>
                <br>
                <li><input type="button" class="btn btn-default" id="eraser" onclick="eraser()"/></li>
            </ul>
        </div>

        <!-- Knoppen voor de lijndikte-->
        <div id="lineButtons">
            <p class="lijndikte">Lijndikte:</p>
            <ul>
                <li><input type="button" value="1" id="01" onclick="size01()"/></li>
                <li><input type="button" value="2" id="02" onclick="size02()"/></li>
                <li><input type="button" value="3" id="03" onclick="size03()"/></li>
                <li><input type="button" value="4" id="04" onclick="size04()"/></li>
                <li><input type="button" value="5" id="05" onclick="size05()"/></li>
                <li><input type="button" value="6" id="06" onclick="size06()"/></li>
                <li><input type="button" value="7" id="07" onclick="size07()"/></li>
                <li><input type="button" value="8" id="08" onclick="size08()"/></li>
                <li><input type="button" value="9" id="09" onclick="size09()"/></li>
                <li><input type="button" value="10" id="10" onclick="size10()"/></li>
            </ul>
        </div>

        <!-- Save & clear button -->
        <div id="configButtons">
            <ul>
                <li><input type="button" onclick="clear_canvas_rectangle()" id="clear" name="clear" value="Canvas legen"/></li>
                <li><input type="button" onclick="saveCanvas()" id="saveCanvas" name="saveCanvas" value="Canvas Opslaan"/>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Javascript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/drawScript.js"></script>
<script type="text/javascript" src="js/activeItem.js"></script>
</body>
</html>