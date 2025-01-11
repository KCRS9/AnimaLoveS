<!DOCTYPE html>

<html lang="en">

<head>
    <?php include('./head/head.php'); ?>
    <title>AnimaLoveS - Registro</title>
</head>

<body>
    <?php include('./header/header.php'); ?>
    <main class="container px-3">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="rounded text-center p-4 bg-primary-border" style="max-width: 800px; width: 100%;">
                <img src="./img/logo/petlover.png" alt="Logo" class="img-fluid rounded-circle mb-3 bg-primary" style="max-height: 100px;">
                <h1 class="mb-3">Registro</h1>
                <div class="d-flex gap-3">
                    <button class="btn btn-gmail w-100 mb-3"><i class="bi bi-google me-2"></i> Iniciar con Gmail</button>
                    <button class="btn btn-dark w-100 mb-3"><i class="bi bi-envelope me-2"></i> Iniciar con Otra Cuenta</button>
                </div>

                <form class="bg-light p-4 rounded d-flex flex-wrap col-12 justify-content-between">
                    <div class="mb-3 col-12 col-md-5">
                        <label for="name" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre completo">
                    </div>
                    <div class="mb-3 col-12 col-md-5">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo">
                    </div>
                    <div class="mb-3 col-12 col-md-5">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="Crea una contraseña">
                    </div>
                    <div class="mb-3 col-12 col-md-5">
                        <label for="confirm-password" class="form-label">Confirma Contraseña</label>
                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirma tu contraseña">
                    </div>
                    <button type="submit" class="btn mt-3 bg-primary w-100 text-white">Registrarse</button>
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