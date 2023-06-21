<?php

session_start();
include('conexion.php');

$code_captcha = $_POST['captcha'];
if ($code_captcha == $_SESSION['codigo_captcha']){


$clientename= $_POST['clientename'];
$clientemail= $_POST['clientemail'];
$productname= $_POST['productname'];
$qty=$_POST['qty'];
$color=$_POST['color'];
$description= $_POST['description'];

$name_img = $_FILES['image']['name'];
$size_img = $_FILES['image']['size'];
$type_img= $_FILES['image']['type'];
$tmp_img= $_FILES['image']['tmp_name'];
$path = 'imagenes/' . $name_img;

if(($type_img != 'image/jpg' && $type_img != 'image/png' && $type_img != 'image/jpeg' && $type_img != 'image/gif') or $size_img > 200000){
    header('Location: realizarpedidos.php?error_img');
} else {
   move_uploaded_file($tmp_img, $path);
   mysqli_query($conexion_db, "INSERT INTO orders VALUE (DEFAULT, '$clientename', '$clientemail' , '$productname','$qty', '$color', '$description' , '$name_img')");
   header('Location: realizarpedidos.php?ok');
} 

mysqli_close($conexion_db);

}else {
    header("Location:realizarpedidos.php?error_codigo");
}
