<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./head/head.php'); ?>
    <title>AnimaLoveS - Dar en Adopción</title>
    <style>
        .upload-box {
            height: 200px;
            border: 2px dashed #ced4da;
            border-radius: 8px;
            background: url('./img/logo/silueta.png') center/contain no-repeat #f8f9fa;
            position: relative;
        }

        .upload-box input[type="file"] {
            opacity: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <?php include('./header/header.php'); ?>

    <main class="container px-3">
        <?php include('./carrusel/carrusel.php'); ?>

        <section class="mt-5">
            <div class="bg-primary-border p-3 rounded">
                <div class="bg-primary-border p-3 rounded">
                    <h1 class="text-center">Dar en Adopción</h1>
                    <h4 class="text-center mt-4">
                        Para dar un animal en adopción, se requiere una donación mínima de <strong>5€</strong> a la protectora de tu preferencia.
                        Esta contribución es fundamental para cubrir los gastos de alimentación, vacunación y mantenimiento de las instalaciones que
                        permitirán cuidar al animal hasta que encuentre un nuevo hogar.
                    </h4>
                </div>
            </div>

            <div class="bg-primary-border p-3 rounded mt-3">
                <div class="bg-primary-border p-3 rounded">
                    <form action="./index.php" method="POST" enctype="multipart/form-data">

                        <div>

                            <h3>Datos de tu Mascota</h3>

                            <label for="foto" class="form-label">Sube una Foto del Animal</label>
                            <div class="d-flex flex-wrap col-12 justify-content-between">
                                <!-- Subir Foto -->
                                <div class="mb-3 col-12 col-md-3">
                                    <div class="upload-box">
                                        <input type="file" id="foto" name="foto" accept="image/*" required>
                                    </div>
                                </div>

                                <div class="row col-12 col-md-9 d-flex flex-wrap justify-content-between">

                                    <div class="col-12 col-md-4">
                                        <label for="nombre" class="form-label">Nombre: </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <label for="nombre" class="form-label">Edad: </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Edad" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <label for="nombre" class="form-label">Especie: </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Especie" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                        <label for="nombre" class="form-label">Raza: </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre completo" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                        <label for="nombre" class="form-label">Esterilizado: </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre completo" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                        <label for="nombre" class="form-label">Sexo: </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre completo" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                        <label for="nombre" class="form-label">Tamaño: </label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre completo" required>
                                    </div>
                                    <!-- Información del Animal -->
                                </div>
                                <div class="mt-2 col-12">
                                    <label for="animal" class="form-label">Información del Animal</label>
                                    <textarea class="form-control" id="animal" name="animal" rows="4" placeholder="Da una pequeña descripcion de tu amigo animal, el motivo por el cual está buscando un hogar, su temperamento y su personalidad." required></textarea>
                                </div>
                            </div>
                        </div>

                        <hr>
                
                        <div class="d-flex flex-wrap col-12 justify-content-between mt-3">
                            <h3 class="col-12 my-3">Tus Datos</h3>
                            <!-- Nombre -->
                            <div class="col-12 col-md-4 px-2">
                                <label for="nombre" class="form-label">Tu Nombre Completo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre Completo" required>
                            </div>

                            <!-- Correo -->
                            <div class="col-12 col-md-4 px-2">
                                <label for="email" class="form-label">Tu Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Tu Correo Electrónico" required>
                            </div>

                            <!-- Teléfono -->
                            <div class="col-12 col-md-4 px-2">
                                <label for="telefono" class="form-label">Tu Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Tu Teléfono" required>
                            </div>
                        </div>

                        <hr>

                        <div class=" mt-3">
                            <h3 class="col-12 my-3">Protectora</h3>
                            <!-- Selección de Protectora -->
                            <div class="mb-3">
                                <label for="protectora" class="form-label">Seleccione la Protectora</label>
                                <select class="form-select" id="protectora" name="protectora" required>
                                    <option value="" disabled selected>Elige una protectora</option>
                                    <option value="barcelona">Protectora Animal Flacuchos (Barcelona)</option>
                                    <option value="madrid">Protectora Animal Adopta (Madrid)</option>
                                    <option value="alicante">Protectora Animal Palevlas (Alicante)</option>
                                    <option value="bilbao">Protectora Animal Apasos (Bilbao)</option>
                                </select>
                            </div>
                            <!-- Nota sobre donación -->
                            <div class="mb-3">
                                <p class="text-muted text-center">Recuerda que la donación de 5€ se realiza directamente a la protectora seleccionada.</p>
                            </div>
                        </div>

                        <!-- Botón de envío -->
                        <div class="text-center">
                            <button type="submit" class="btn text-white p-2 bg-primary rounded">Enviar Solicitud</button>
                        </div>
                    </form>
                </div>
            </div>


        </section>
    </main>

    <?php
    include('./footer/footer.php');
    ?>


    <script src="./js/script.js"></script>
</body>

</html>