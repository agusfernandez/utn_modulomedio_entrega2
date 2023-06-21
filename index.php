<?php include 'containers/header.php'?>
<body>
        <div>
            <div class="row align-items-center" style="height: 100vh;">
                <div class="mx-auto col-10 col-md-8 col-lg-6">
                    <form action="validar.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Ingrese su usuario</label>
                            <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" aria-labelledby="passwordHelpBlock" required>
                        </div>
                        <button type="submit" class="btn btn-dark" value="submit">Enviar</button>
                    </form>
                </div>
                <?php
                    if (isset($_GET['error'])){
                        echo "<div class='alert alert-danger' role='alert'> No tiene permisos para ingresar</div>";
                    }
                ?>
            </div>
        </div>
</body>
<?php include 'containers/footer.php'?>
