<?php

// si esta la habilitada la sesion captcha entoces puede cargar le pedido
session_start();
header("Content-Type: image/png");
$im = imagecreate(70, 30)
    or die("Cannot Initialize new GD image stream");
$color_fondo = imagecolorallocate($im, 0, 0, 0);
$color_texto = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  $_SESSION['codigo_captcha'], $color_texto);
imagepng($im);
imagedestroy($im);