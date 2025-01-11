<!DOCTYPE html>

<?php



?>

<html lang="es">

<head>
    <?php include('./head/head.php'); ?>
    <title>AnimaLoveS - Dar en Adopcion</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map {
            height: 400px;
            border-radius: 8px;
        }

    </style>
</head>

<body>
    <?php
    include('./header/header.php');
    ?>

    <main class="container px-3">
        <?php
        include('./carrusel/carrusel.php');
        ?>

        <main class="container px-3">

            <div class="text-center  text-white p-2 rounded my-2 bg-third">
                <h1>Veterinarias Asociadas</h1>
                <p>Encuentra veterinarias asociadas para el cuidado de tu mascota</p>
            </div>

            <!-- Adoption Center Cards -->
            <div class="row g-4">
                <!--Barcelona Adoption Center-->
                <div class="col-12 col-md-6">
                    <div class="card bg-third-border p-1">
                        <div class="bg-third-border">
                            <img src="./img/centros/barcelona.jpg" alt="Barcelona Adoption Center" class="img-fluid">
                        </div>
                        <div class="card-body bg-third-border bg-light mt-1">
                            <h5 class="card-title">Protectora Animal Flacuchos</h5>
                            <p class="card-text">
                                <strong>Dirección:</strong> Calle 1234 barcelona, barcelona<br>
                                <strong>Teléfono:</strong>999 96 96 96
                            </p>
                        </div>
                    </div>
                </div>
                <!--Madrid Adoption Center-->
                <div class="col-12 col-md-6">
                    <div class="card bg-third-border p-1">
                        <div class="bg-third-border">
                            <img src="./img/centros/madrid.jpg" alt="Madrid Adoption Center" class="img-fluid">
                        </div>
                        <div class="card-body bg-third-border bg-light mt-1">
                            <h5 class="card-title">Protectora Animal Adopta</h5>
                            <p class="card-text">
                                <strong>Dirección:</strong> Calle 1234 Madrid, Madrid<br>
                                <strong>Teléfono:</strong> 999 96 96 96
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Alicante Adoption Center -->
                <div class="col-12 col-md-6">
                    <div class="card bg-third-border p-1">
                        <div class="bg-third-border">
                            <img src="./img/centros/alicante.jpg" alt="Alicante Adoption Center" class="img-fluid">
                        </div>
                        <div class="card-body bg-third-border bg-light mt-1">
                            <h5 class="card-title">Protectora Animal Palevlas</h5>
                            <p class="card-text">
                                <strong>Dirección:</strong> Calle 123 Alicante, Alicante<br>
                                <strong>Teléfono:</strong> 999 96 96 96
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Bilbao Adoption Center -->
                <div class="col-12 col-md-6">
                    <div class="card bg-third-border p-1">
                        <div class="bg-third-border">
                            <img src="./img/centros/bilbao.jpg" alt="Bilbao Adoption Center" class="img-fluid">
                        </div>
                        <div class="card-body bg-third-border bg-light mt-1">
                            <h5 class="card-title">Protectora Animal Apasos</h5>
                            <p class="card-text">
                                <strong>Dirección:</strong> Calle 1234 Bilbao, Bilbao<br>
                                <strong>Teléfono:</strong> 999 96 96 96
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="mt-5">
                <h3 class="text-center mb-4">Ubicación de las Veterinarias</h3>
                <div id="map" class="bg-third-border"></div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script src="./js/map.js"></script>
        <script src="./js/script.js"></script>

    </main>

    <?php
    include('./footer/footer.php');
    ?>
</body>

</html>