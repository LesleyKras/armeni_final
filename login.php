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

<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Login!</h3>
                </div>

    <!--
    - Is Registration a Succes?
    - Are you logged in?
    - Verkeerde credentials
     -->
    <?php
    if (isset($_GET['registered']))
    {
        echo '<p class="loginText">U heeft u succesvol geregistreerd! <br>U kunt nu inloggen met uw gegevens.</p>';
    }

    if (isset($_GET['login'])){
        if($_GET['login'] == "false"){
            echo '<p class="loginText">Je moet inloggen om een jurk te maken!</p>';
        }
    }

    if (isset($_GET['wrongUsername'])){
        if($_GET['wrongUsername']){
            echo '<p class="loginText">Gebruikersnaam of wachtwoord is verkeerd.</p>';
        }
    }
    ?>

                <!-- Formulier naar loginCheck.php -->
                <div class="panel-body">
                    <form role="form" action="php/loginCheck.php" method="post">

                        <div class="row">
                        <!-- Username -->
                        <div class="form-group">
                            <label class="loginLabel" for="username">Gebruikersnaam</label>
                            <input pattern=".{3,}" title="At least 3 characters" type="text" name="username" id="username" class="form-control input-sm usernameLogin" placeholder="Gebruikersnaam" required>
                        </div>
                        <!-- Password -->
                        <div class="form-group">
                            <label class="loginLabel" for="password">Wachtwoord</label>
                            <input type="password" name="password" id="password" class="form-control input-sm passwordLogin" placeholder="Wachtwoord" required>
                        </div>
                        <!-- Login knop-->
                        <input id="loginKnop" type="submit" name="login" value="Log-in" class="btn btn-info btn-block loginKnop">
                            <!-- Registreer knop -->
                            <p class="registerTxt">Nog geen account? Registreer <span class="txtColor"><a href="register.php">HIER</a></span></p>
                    </form>
                </div>
            </div>
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