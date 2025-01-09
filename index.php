<!DOCTYPE html>
<html lang="es">

<?php

include('./db_animales/db_conn.php');

$mysqli = dataBaseConection();

$mostrar = $mysqli->query("SELECT id, nombre, imagen, edad, tamano, ubicacion FROM protectora");


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/principal.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>AnimaLoveS</title>
</head>

<body>
    <?php
    include('./header/header.php');
    ?>

    <main class="container px-3">

        <?php
        include('./carrusel/carrusel.php');

        echo '<section id="tarjetas" class="d-flex flex-wrap justify-content-around mt-5 gap-3">';

        while (($resultado = $mostrar->fetch_assoc()) !== null) { ?>

            <div class="bg-secundary bg-third p-1 rounded shadow-lg">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $resultado['imagen'] ?>" class="card-img-top" alt="...">
                    <div class="card-body bg-secundary bg-third">
                        <h5 class="card-title text-center text-white"><strong><?= $resultado['nombre'] ?></strong></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center"><strong>Edad: </strong><?= $resultado['edad'] ?></li>
                        <li class="list-group-item text-center"><strong>Tamaño: </strong><?= $resultado['tamano'] ?></li>
                        <li class="list-group-item text-center"><strong><?= $resultado['ubicacion']?></strong></li>
                    </ul>
                    <div class="card-body d-flex justify-content-center ">
                        <a href="info.php?id=<?= $resultado['id'] ?>&nombre=<?= $resultado['nombre'] ?>" class="text-decoration-none text-white p-2 bg-primary bg-fourth rounded">Mas información</a>
                    </div>
                </div>
            </div>


        <?php }
        echo '</section>';
        ?>



    </main>


    <script>
        const select = document.getElementById('language-select');

        select.addEventListener('change', (event) => {
            const selectedOption = event.target.options[event.target.selectedIndex];
            const image = selectedOption.getAttribute('data-image');
            select.style.backgroundImage = `url(${image})`;
        });


        // Recargar la página cada 10 segundos (10,000 milisegundos)
        setInterval(() => {
            window.location.reload();
        }, 10000);
    </script>

</body>

</html>