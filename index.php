<!DOCTYPE html>
<html lang="es">

<?php

include('./db_animales/db_conn.php');

$mysqli = dataBaseConection();

$mostrar = $mysqli->query("SELECT id, nombre, imagen, edad, tamano, ubicacion FROM protectora");

?>

<head>
    <?php include('./head/head.php'); ?>
    <title>AnimaLoveS</title>
</head>

<body>
    <?php include('./header/header.php'); ?>

    <main class="container px-3">

        <?php
        include('./carrusel/carrusel.php');

        echo '<section id="tarjetas" class="d-flex flex-wrap justify-content-around mt-5 gap-3">';

        while (($resultado = $mostrar->fetch_assoc()) !== null) { ?>

            <div class="bg-third-border p-1 rounded shadow-lg">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $resultado['imagen'] ?>" class="card-img-top" alt="...">
                    <div class="card-body bg-secundary bg-third">
                        <h5 class="card-title text-center text-white"><strong><?= $resultado['nombre'] ?></strong></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <!-- <li class="list-group-item text-center"><strong>Edad: </strong><?= $resultado['edad'] ?></li> -->
                        <!-- <li class="list-group-item text-center"><strong>Tamaño: </strong><?= $resultado['tamano'] ?></li> -->
                        <!-- <li class="list-group-item text-center"><strong><?= $resultado['ubicacion'] ?></strong></li> -->
                        <li class="list-group-item text-center d-flex justify-content-around">
                            <div>
                                <span class="fw-bold text-secondary h6 fst-italic">Edad</span><br><?= $resultado['edad'] ?>
                            </div>
                            <div>
                                <span class="fw-bold text-secondary h6 fst-italic">Tamaño</span><br><?= $resultado['tamano'] ?>
                            </div>
                            <div>
                                <span class="fw-bold text-secondary h6 fst-italic">Ubicación</span><br><?= $resultado['ubicacion'] ?>
                            </div>
                        </li>
                    </ul>
                    <div class="card-body d-flex justify-content-center ">
                        <a href="info.php?id=<?= $resultado['id'] ?>&nombre=<?= $resultado['nombre'] ?>" class="text-decoration-none text-white p-2 bg-primary rounded"><strong>Mas información</strong></a>
                    </div>
                </div>
            </div>


        <?php }
        echo '</section>';
        ?>
    </main>

    <?php
    include('./footer/footer.php');
    ?>

            
    <script src="./js/script.js"></script>

</body>

</html>

<!-- http://localhost/04_Dise%c3%b1o_web_ric/05_BOOTSTRAP/Practicas/P4/ -->