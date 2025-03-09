<?php
include("conexion.php");

$nombre = $_POST['usuario'];
$pass = $_POST['pass'];

//Login
if(isset($_POST['btmlogin'])){
    $query = mysqli_query($con, "SELECT * FROM usuario WHERE usuario = '$nombre' AND password = '$pass'");
    $nr = mysqli_num_rows($query);
    
    if($nr > 0){
        echo "<script> alert('Bienvenido $nombre'); window.location='principal.php' </script>";
    }else{
        echo "<script> alert('Usuario no existe'); window.location='index.html' </script>";
    }
}

//Registro
if(isset($_POST['btmregistrar'])){
    $sql_registrar = "INSERT INTO usuario (usuario, password) VALUES ('$nombre', '$pass')";
    if(mysqli_query($con, $sql_registrar)){
        echo "<script> alert('Usuario registrado: $nombre'); window.location='index.html' </script>";
    }else{
        echo "Error".$sql."<br>".mysqli_error($con);
    }
}

mysqli_close($con);
?>