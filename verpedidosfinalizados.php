<?php include 'containers/header.php'?>

<body>
    <?php include 'containers/menu.php'?>
    

    <div class="container">
        <div class="row">

            <?php include ('conexion.php');
        
                  $consulta_db_finalizado = mysqli_query($conexion_db, "SELECT * FROM orders WHERE state='finalizado'");
                  while($mostrardatos = mysqli_fetch_assoc($consulta_db_finalizado)){

                  ?>

            <!-- html structure-->
            <div class="card" style="width: 16rem;">
                    <img src="imagenes/<?php echo $mostrardatos['image']?>" class="card-img-top img-thumbnail rounded" alt="<?php echo $mostrardatos['clientename']?>">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo 'Nombre: ' . $mostrardatos['clientename'] ?></h6>
                        <p class="card-text"><?php echo 'Email: ' . $mostrardatos['clientemail'];?></p>

                        <p class="card-text"><?php echo 'Nombre de Producto: ' . $mostrardatos['productname']?></p>
                        <p class="card-text"><?php echo 'Cantidad: ' . $mostrardatos['qty']?></p>
                        <p class="card-text"><?php echo 'Color: ' . $mostrardatos['color']?></p>
                        <p class="card-text"><?php echo 'Descripción: ' . $mostrardatos['description']?></p>
                    </div>
                    <div class="card-footer">
                            <span class="state badge text-bg-info" role="alert"><?php echo $mostrardatos['state']?></span>
                    </div>
                    <a href="eliminarorden.php?id=<?php echo $mostrardatos['id']?>" class="btn  btn-dark">Eliminar Orden</a>
                </div>

            <?php }?>

                
        </div>
    </div>
    
</body>

<?php include 'containers/footer.php'?>
