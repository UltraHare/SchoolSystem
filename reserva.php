<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "reservar";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (!$con) {
    die("Error al conectarse a la DB: " . mysqli_connect_error());
}

$numero_lab = (int)$_POST['numero_laboratorio'];
$fecha_lab = $_POST['fecha_laboratorio'];
$startime_lab = $_POST['startime_laboratorio'];
$endtime_lab = $_POST['endtime_laboratorio'];
$profesor_lab = $_POST['profesor_laboratorio'];

$dt = date("Y-m-d H:i:s");

if (isset($_REQUEST['ingresar_datos'])) {
    $sql_ingresar = "INSERT INTO laboratorio (N_lab, fecha_lab, startime_lab, endtime_lab, profesor_lab) VALUES ('$numero_lab', '$fecha_lab', '$startime_lab', '$endtime_lab', '$profesor_lab')";
    $ejecutar = mysqli_query($con, $sql_ingresar);
    if ($ejecutar) {
        echo "<script> alert('Laboratorio: $numero_lab reservado por $profesor_lab'); window.location='principal.php' </script>";
    } else {
        echo "Error" . $sql . "<br>" . mysqli_error($con);
    }
}
mysqli_close($con);
?>