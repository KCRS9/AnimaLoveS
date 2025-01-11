<!DOCTYPE html>

<html lang="en">

<head>
<?php include('./head/head.php'); ?>
    <title>AnimaLoveS - Iniciar Sesion</title>
</head>

<body>
    <?php include('./header/header.php'); ?>

    <main class="container px-3 ">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="bg-primary-border rounded text-center p-4" style="max-width: 400px; width: 100%;">
                <img src="./img/logo/petlover.png" alt="Logo" class="img-fluid rounded-circle mb-3 bg-primary" style="max-height: 100px;">
                <h1 class="mb-3">Inicio de Sesión</h1>
                <form class="bg-light p-4 rounded">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                    </div>
                    <button type="submit" class="btn bg-secundary w-75 text-white">Iniciar Sesión</button>
                </form>

                <!-- Texto adicional -->
                <p class="mt-3 text-muted">AnimalLoveS</p>
            </div>
        </div>
    </main>
    <?php
    include('./footer/footer.php');
    ?>
    <script src="./js/script.js"></script>
</body>

</html>