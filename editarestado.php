<?php

include('conexion.php');

$id_orden= $_GET['id'];
mysqli_query($conexion_db, "UPDATE orders SET state='finalizado' WHERE id=$id_orden");

header('Location: verpedidos.php');