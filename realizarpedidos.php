<?php include 'containers/header.php'?>

<body>
    <?php include 'containers/menu.php'?>

    <div>
            <div class="row align-items-center" style="height: 100vh;">
                <div class="mx-auto col-10 col-md-8 col-lg-6">
                    <form action="cargarpedidos.php" method="post">
                        <h3>Datos del Nuevo Pedido</h3>
                        <div class="input-group mb-3">
                             <input type="text" class="form-control" name="clientename" placeholder="Ingrese su nombre" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="clientemail" placeholder="Ingrese el email del cliente" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="productname" placeholder="Ingrese el nombre del producto elegido">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="qty" placeholder="Ingrese la cantidad">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="color" placeholder="Ingrese el color">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Ingrese alguna observación</label>
                            <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="imagen" class="form-label"> Cargar tu diseño</label>
                            <input class="form-control" type="file" id="formFile" name="image">
                         </div>
                        
                        <button type="submit" class="btn btn-dark" value="submit">Enviar</button>
                        <?php

                            if (isset($_GET['error_img'])){
                                echo "<div class='alert alert-danger' role='alert'>Imagen incorrecta</div>";
                            }

                            if (isset($_GET['oka'])){
                                echo "<div class='alert alert-success' role='alert'>Nueva orden agregada</div>";
                            }

                            if (isset($_GET['error'])){
                                echo "<div class='alert alert-success' role='alert'>error</div>";
                            }
                        ?>
                    </form>
                </div>
        
            </div>
        </div>
    
</body>

<?php include 'containers/footer.php'?>
