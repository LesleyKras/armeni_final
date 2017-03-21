<?php
session_start();
// Vernietig de Sessie en ga naar index.php
session_destroy();
header("location: index.php")

?>