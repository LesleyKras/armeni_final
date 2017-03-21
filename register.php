<?php
session_start();
// Verbinding met Database
include 'php/connectToDB.php'
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

<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign up! <small>It's free!</small></h3>
                </div>
                <div class="panel-body">
                    <!-- Form -->
                    <form role="form" action="php/insert.php" method="post">
                        <p>* Is Required</p>

                        <!-- is username in use? if yes -> show message -->
                        <?php
                        if (isset($_GET['usernameInUse']))
                        {
                            echo '<p class="loginText">Deze gebruikersnaam is al in gebruik <br> Probeer alstublieft een andere gebruikersnaam <br></p>';
                        }
                        ?>

                        <div class="row">
                            <!-- First name -->
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="first_name">Voornaam*</label>
                                    <input pattern=".{3,}" title="At least 3 characters" type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Voornaam" required>
                                </div>
                            </div>

                            <!-- Last name -->
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Achternaam*</label>
                                    <input pattern=".{3,}" title="At least 3 characters" type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Achternaam" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Username -->
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="username">Gebruikersnaam*</label>
                                    <input pattern=".{3,}" title="At least 3 characters" type="text" name="username" id="username" class="form-control input-sm" placeholder="Gebruikersnaam" required>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="email">E-mail*</label>
                                    <input pattern=".{3,}" title="Use the format: characters@characters.domain" type="email" name="email" id="email" class="form-control input-sm" placeholder="E-mail" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Password -->
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="password">Wachtwoord*</label>
                                    <input pattern=".{5,}" title="At least 5 characters" type="password" name="password" id="password" class="form-control input-sm" placeholder="Wachtwoord" required>
                                </div>
                            </div>

                            <!-- Phone number -->
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="phonenumber">Telefoon nummer</label>
                                    <input type="text" name="phonenumber" id="phonenumber" class="form-control input-sm" placeholder="Telefoon nummer">
                                </div>
                            </div>

                        </div>

                        <!-- Submit Knop -->
                        <input type="submit" name="submit" value="Registreer" class="btn btn-info btn-block">

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