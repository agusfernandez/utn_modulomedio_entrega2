<?php 
session_start();
if(isset($_SESSION['admin'])){
    include 'containers/header.php';

    $n1= rand (0,9);
    $n2= rand (0,9);
    $n3= rand (0,9);
    $text = array('a', 's', 't', 'f' , 'l', 'g');
    $symbol =array ('-', '%', '!', '#', '@');
    $mezcla_text= rand (0,6);
    $mezcla_symbol= rand (0,4);

    $_SESSION['codigo_captcha'] = $n1  . $text[$mezcla_text] . $n2 . $symbol[$mezcla_symbol] . $n3;

?>


<body>
    <?php include 'containers/menu.php'?>

    <div>
            <div class="row align-items-center" style="height: 100vh;">
                <div class="mx-auto col-10 col-md-8 col-lg-6">
                    <form action="cargarpedidos.php" method="post" enctype="multipart/form-data">
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

                         <div class="mb-3">
                           <img src="captcha.php" alt="captcha">
                            <input type="text"  class="form-control" name="captcha" placeholder="Ingrese el captcha"> 
                        </div>
                        
                        <button type="submit" class="btn btn-dark" value="submit">Enviar</button>

                        <?php

                            if (isset($_GET['error_img'])){
                                echo "<div class='alert alert-danger' role='alert'>Imagen Incorrecta</div>";
                            }

                            if (isset($_GET['oka'])){
                                echo "<div class='alert alert-success' role='alert'>Nueva orden agregada</div>";
                                //cierro sesion
                            } } else {
                                header('Location:index.php');
                                
                            }

                            if (isset($_GET['error_codigo'])){
                                echo "<div class='alert alert-danger' role='alert'>Codigo de verificación incorrecto</div>";
                            }
                        ?>
                    </form>
                </div>
        
            </div>
        </div>
    
</body>

<?php include 'containers/footer.php'?>
