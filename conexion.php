<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "login";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if (!$con) {
    die("Error al conectarse a la DB: " . mysqli_connect_error());
}
?>