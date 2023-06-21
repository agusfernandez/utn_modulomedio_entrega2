<?php include 'containers/header.php'?>

<body>
    <?php include 'containers/menu.php'?>
    

    <div class="container">
        <div class="row align-items-center">

            <?php include ('conexion.php');
        
                  $consulta_db = mysqli_query($conexion_db, "SELECT * FROM orders");
                  while($mostrardatos = mysqli_fetch_assoc($consulta_db)){

                  ?>

            <!-- html structure-->
            <div class="card" style="width: 18rem;">
                    <img src="imagenes/<?php echo $mostrardatos['']?>" class="card-img-top img-thumbnail rounded" alt="<?php echo $mostrardatos['clientname']?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $mostrardatos['clientname'] . " " . $mostrardatos['clientemail'];?></h5>
                        <p class="card-text"><?php echo $mostrardatos['description']?></p>
                    </div>
                    <a href="eliminarorden.php?id=<?php echo $mostrardatos['id'];?>" class="btn  btn-dark">Eliminar Orden</a>
                </div>

            <?php }?>

                
        </div>
    </div>
    
</body>

<?php include 'containers/footer.php'?>
