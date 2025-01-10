<!DOCTYPE html>
<html lang="en">

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
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
    <title>AnimaLoveS - Adopta a <?= $nombre ?></title>
</head>

<body>
    <?php
        include('./header/header.php');
    ?>

    <main class="container px-3">

        <?php

        while (($resultado = $mostrar->fetch_assoc()) !== null) {
        ?>

            <div id="mascota" class="d-flex flex-wrap pt-3 bg-third-border p-3 rounded xmargintop">
                <figure class="p-2 rounded col-12 col-md-4 text-center bg-light bg-primary-border rounded">
                    <img src="<?= $resultado['imagen'] ?>" alt="" class="img-fluid rounded shadow-lg">
                    <h1 class="text-center"><?= $resultado['nombre'] ?></h1>
                </figure>


                <div class="col-12 col-md-8 ps-3 justify-content-center">
                    <div class="rounded p-4 bg-light bg-primary-border rounded">
                        <h1 class="text-center py-3 m-4">Información</h1>
                        
                        
                        <table class="w-100">
                            <!-- Primera fila -->
                            <tr>
                                <td><?= $resultado['protectora'] ?><br><span class="fw-bold text-secondary fs-6 fst-italic">Protectora / Particular</span></td>
                                <td><?= $resultado['ubicacion'] ?><br><span class="fw-bold text-secondary fs-6 fst-italic">Ubicación</span></td>
                                <td><?= $resultado['contacto'] ?><br><span class="fw-bold text-secondary fs-6 fst-italic">Contacto</span></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>

                            <!-- Segunda fila -->
                            <tr>
                                <td><?= $resultado['especie'] ?><br><span class="fw-bold text-secondary fs-6 fst-italic">Especie</span></td>
                                <td><?= $resultado['raza'] ?><br><span class="fw-bold text-secondary fs-6 fst-italic">Raza</span></td>
                                <td><?= $resultado['edad'] ?><br><span class="fw-bold text-secondary fs-6 fst-italic">Edad</span></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>

                            <!-- Tercera fila -->
                            <tr>
                                <td><?= $resultado['sexo'] ?><br><span class="fw-bold text-secondary fs-6 fst-italic">Sexo</span></td>
                                <td><?= $resultado['esterilizado'] === '1' ? 'Si' : 'No' ?><br><span class="fw-bold text-secondary fs-6 fst-italic">Esterilizado</span></td>
                                <td><?= $resultado['tamano'] ?><br><span class="fw-bold text-secondary fs-6 fst-italic">Tamaño</span></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="col-12 rounded bg-light bg-primary-border rounded p-3">
                    <h3 class="text-center">Mi historia</h3>
                    <p> <?= $resultado['descripcion'] ?></p>
                </div>
            </div>
        <?php
        }
        ?>



    </main>

    <?php
    include('./footer/footer.php');
    ?>


    <script>
        const select = document.getElementById('language-select');

        select.addEventListener('change', (event) => {
            const selectedOption = event.target.options[event.target.selectedIndex];
            const image = selectedOption.getAttribute('data-image');
            select.style.backgroundImage = `url(${image})`;
        });

        setInterval(() => {
            window.location.reload();
        }, 5000);
    </script>
</body>

</html>