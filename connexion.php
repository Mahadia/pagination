<?php
// Connexion au server MySQL
$con = mysqli_connect("localhost", "root", "");
// Sélection de la base coursphp
$m = mysqli_select_db($con,"bdm");
?>