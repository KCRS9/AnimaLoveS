<!DOCTYPE html>
<html lang="en">

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: index.php');
}

include('./db_animales/db_conn.php');

$mysqli = dataBaseConection();

$mostrar = $mysqli->query("SELECT * FROM protectora WHERE id = $id");


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

        // while (($resultado = $mostrar->fetch_assoc()) !== null) { 
        ?>

        <!-- <div class="bg-secundary p-1 rounded shadow-lg">                
                <div class="card" style="width: 18rem;">
                    <img src="<?= $resultado['imagen'] ?>" class="card-img-top" alt="...">
                    <div class="card-body bg-secundary">
                        <h5 class="card-title text-center text-white"><strong><?= $resultado['nombre'] ?></strong></h5>
                        <p class="card-text text-white">Especie: <strong><?= $resultado['especie'] ?></strong></p>
                        <p class="card-text text-white">Edad: <strong><?= $resultado['edad'] ?></strong></p>
                        <p class="card-text text-white">Raza: <strong><?= $resultado['raza'] ?></strong></p>
                        <p class="card-text text-white">Sexo: <strong><?= $resultado['sexo'] ?></strong></p>
                        <p class="card-text text-white">Tamaño: <strong><?= $resultado['tamano'] ?></strong></p>
                        <p class="card-text text-white">Esterilizado: <strong><?= $resultado['esterilizado'] ?></strong></p>
                        <p class="card-text text-white">Ubicación: <strong><?= $resultado['ubicacion'] ?></strong></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center"><strong>Descripción: </strong><?= $resultado['descripcion'] ?></li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <a href="info.php?id=<?= $resultado['id'] ?>&nombre=<?= $resultado['nombre'] ?>" class="text-decoration-none text-white p-2 bg-primary rounded">Mas información</a>
                    </div>            
                </div>
            </div> -->

        <?php
        // }
        ?>

        <div id="mascota" class="d-flex flex-wrap gap-3">
            <figure class="p-2 bg-danger rounded col-12 col-md-4 text-center">
                <img src="./img/animales/an1.webp" alt="" class="img-fluid rounded">
                <h1 class="text-center">Astilla</h1>
            </figure>
            <div>
                <div class="col-12 col-md-8 d-flex justify-content-between">
                    <div>Protectora Caricias <br>Protectora / Particular</div>
                    <div>Sevilla <br>Ubicación</div>
                    <div>6123456789<br>Contacto</div>

                </div>

                <div>
                    <p>Especie: Perro</p>
                    <p>Raza: Mestizo</p>
                    <p>Edad: 5</p>
                    <p>Sexo: Macho</p>
                    <p>Esterilizado: Si</p>
                    <p>Tamaño: Mediano</p>

                </div>
            </div>
            <div>
                <p>Descripción: Mi nombre es ASTILLA, y soy una cruce de sharpei. Al principio no era nada sociable y tenía un carácter muy fuerte, ya que era muy desconfiada. Pero, poco a poco, y sobre todo en estos últimos años he pegado un gran cambio: dejo que me quiten la pelota de la boca, y hasta permito a mis humanas que me limpien los oídos, algo impensable para mí hace unos años. Me adoptas? escribe a adopciones@uprodea.org'</p>
            </div>
        </div>

    </main>
    <script>
        const select = document.getElementById('language-select');

        select.addEventListener('change', (event) => {
            const selectedOption = event.target.options[event.target.selectedIndex];
            const image = selectedOption.getAttribute('data-image');
            select.style.backgroundImage = `url(${image})`;
        });


        // Recargar la página cada 10 segundos (10,000 milisegundos)
        // setInterval(() => {
        //     window.location.reload();
        // }, 5000);
    </script>
</body>

</html>