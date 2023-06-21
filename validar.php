<?php

session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];

include ('conexion.php');

$consulta = mysqli_query($conexion_db, "SELECT * FROM administradores WHERE usuario = '$usuario' AND password= '$password'");

//recorro las filas de la tabla y sino no hay nada me das error sino paso
if(mysqli_num_rows($consulta)== 0){
    header('Location:index.php?error');
} else {
    $_SESSION['admin'] = $_POST['usuario'];
    header('Location:realizarpedidos.php');
}