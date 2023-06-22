<?php

// si esta la habilitada la sesion captcha entoces puede cargar le pedido
session_start();
header("Content-Type: image/png");
$im = imagecreate(70, 30)
    or die("Cannot Initialize new GD image stream");
$color_fondo = imagecolorallocate($im, 239, 192, 240);
$color_texto = imagecolorallocate($im, 82, 4, 34);
imagestring($im, 5, 15, 5,  $_SESSION['codigo_captcha'], $color_texto);
imagepng($im);
imagedestroy($im);