<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Incluye los links de Bootstrap de js, css e iconos -->
    <?php include('./head/head.php'); ?>
    <title>AnimaLoveS - Donaciones</title>
    <style>
        /*Estilos para las tarjetas de la seccion de donaciones*/

        .card:hover {
            background-color: #f5b5b5 !important;
            transform: scale(1.02);
            transition: all 0.3s ease-in-out;
        }

        .card-body:hover {
            background-color: white !important;
        }
    </style>
</head>

<body>
    <?php include('./header/header.php'); ?>

    <main class="container px-3">
        <?php include('./carrusel/carrusel.php'); ?>

        <section>

            <!-- Sección de Donaciones -->
            <div class="row text-center my-5">
                <div class="col-md-4">
                    <div class="card p-1 bg-third-border">
                        <div class="card-body bg-third-border">
                            <div class="m-1 bg-primary-border rounded">
                                <img src="./img/dona/voluntariado.jpg" alt="Realiza Voluntariado" class="img-fluid">
                            </div>
                            <h5 class="card-title">Realiza Voluntariado</h5>
                            <p class="card-text">Ayuda a los animales de manera directa.<br>Haz voluntariado en uno de nuestros centros de adopción.</p>
                            <button class="btn text-white p-2 bg-primary rounded mt-1" data-bs-toggle="modal" data-bs-target="#voluntariadoModal">Más Información</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-1 bg-third-border">
                        <div class="card-body bg-third-border">
                            <div class="m-1 bg-primary-border rounded">
                                <img src="./img/dona/comida.jpg" alt="Donar Comida" class="img-fluid">
                            </div>
                            <h5 class="card-title">Donar Comida</h5>
                            <p class="card-text">Ayúdanos a alimentarlos.<br>Puedes donar alimentos o articulos utiles para los animales en nuestros centros.</p>
                            <button class="btn text-white p-2 bg-primary rounded mt-1" data-bs-toggle="modal" data-bs-target="#donarComidaModal">Más Información</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-1 bg-third-border">
                        <div class="card-body bg-third-border">
                            <div class="m-1 bg-primary-border rounded">
                                <img src="./img/dona/dinero.jpg" alt="Donar Dinero" class="img-fluid">
                            </div>
                            <h5 class="card-title">Donar Dinero</h5>
                            <p class="card-text">Realiza una donación económica <br> Puedes apoyar nuestras actividades y el bienestar de los animales.</p>
                            <button class="btn text-white p-2 bg-primary rounded mt-1" data-bs-toggle="modal" data-bs-target="#donarDineroModal">Más Información</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal del voluntariado -->
            <div class="modal fade " id="voluntariadoModal">
                <div class="modal-dialog">
                    <div class="modal-content bg-primary-border rounded">
                        <div class="modal-header">
                            <h5 class="modal-title" id="voluntariadoModalLabel">Voluntariado en Centros de Adopción</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <p>Conviértete en un voluntario en uno de nuestros centros de adopción. Tu apoyo será fundamental para mejorar la vida de los animales.</p>
                            <p><strong>¿Cómo puedes ayudar?</strong></p>
                            <ul>
                                <li>Ayuda en la limpieza y cuidado de los animales.</li>
                                <li>Asiste en eventos de adopción.</li>
                                <li>Apoya en la socialización de los animales.</li>
                            </ul>

                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <div class="card bg-light mb-3 bg-primary-border">
                                        <img src="./img/centros/barcelona.jpg" alt="Barcelona Adoption Center" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Protectora Animal Flacuchos</h5>
                                            <p class="card-text"><strong>Dirección:</strong> Calle 1234 Barcelona, Barcelona</p>
                                            <strong>Teléfono: </strong>999 96 96 96
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="card bg-light mb-3 bg-primary-border">
                                        <img src="./img/centros/madrid.jpg" alt="Madrid Adoption Center" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Protectora Animal Adopta</h5>
                                            <p class="card-text"><strong>Dirección:</strong> Calle 1234 Madrid, Madrid</p>
                                            <strong>Teléfono: </strong>999 96 96 96
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="card bg-light mb-3 bg-primary-border">
                                        <img src="./img/centros/alicante.jpg" alt="Alicante Adoption Center" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Protectora Animal Palevlas</h5>
                                            <p class="card-text"><strong>Dirección:</strong> Calle 123 Alicante, Alicante</p>
                                            <strong>Teléfono: </strong>999 96 96 96
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="card bg-light mb-3 bg-primary-border">
                                        <img src="./img/centros/bilbao.jpg" alt="Bilbao Adoption Center" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Protectora Animal Apasos</h5>
                                            <p class="card-text"><strong>Dirección:</strong> Calle 1234 Bilbao, Bilbao</p>
                                            <strong>Teléfono: </strong>999 96 96 96
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-secundary text-white" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Donar Comida -->
            <div class="modal fade" id="donarComidaModal">
                <div class="modal-dialog">
                    <div class="modal-content bg-primary-border rounded">
                        <div class="modal-header">
                            <h5 class="modal-title" id="donarComidaModalLabel">Donar Comida para Animales</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <p>Realiza una donación de comida para los animales en nuestros centros de adopción. Aquí puedes ver las direcciones de nuestras veterinarias asociadas:</p>

                            <!-- Fichas de Protectores (Simplificadas) -->
                            <div class="row">
                                <!-- Ficha de la protectora 1 (Barcelona) -->
                                <div class="col-12 col-md-6">
                                    <div class="card bg-light mb-3 bg-primary-border">
                                        <img src="./img/centros/barcelona.jpg" alt="Barcelona Adoption Center" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Protectora Animal Flacuchos</h5>
                                            <p class="card-text"><strong>Dirección:</strong> Calle 1234 Barcelona, Barcelona</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ficha de la protectora 2 (Madrid) -->
                                <div class="col-12 col-md-6">
                                    <div class="card bg-light mb-3 bg-primary-border">
                                        <img src="./img/centros/madrid.jpg" alt="Madrid Adoption Center" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Protectora Animal Adopta</h5>
                                            <p class="card-text"><strong>Dirección:</strong> Calle 1234 Madrid, Madrid</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ficha de la protectora 3 (Alicante) -->
                                <div class="col-12 col-md-6">
                                    <div class="card bg-light mb-3 bg-primary-border">
                                        <img src="./img/centros/alicante.jpg" alt="Alicante Adoption Center" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Protectora Animal Palevlas</h5>
                                            <p class="card-text"><strong>Dirección:</strong> Calle 123 Alicante, Alicante</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ficha de la protectora 4 (Bilbao) -->
                                <div class="col-12 col-md-6">
                                    <div class="card bg-light mb-3 bg-primary-border">
                                        <img src="./img/centros/bilbao.jpg" alt="Bilbao Adoption Center" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">Protectora Animal Apasos</h5>
                                            <p class="card-text"><strong>Dirección:</strong> Calle 1234 Bilbao, Bilbao</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-secundary text-white" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal  de donacion de dinero -->
            <div class="modal fade" id="donarDineroModal" tabindex="-1" aria-labelledby="donarDineroModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-primary-border rounded">
                        <div class="modal-header">
                            <h5 class="modal-title" id="donarDineroModalLabel">Formulario de Donación Económica</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Formulario para donar dinero -->
                            <form action="./index.php" method="POST">
                                <div class="mb-3">
                                    <label for="donarNombre" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" id="donarNombre" placeholder="Tu nombre completo" required>
                                </div>
                                <div class="mb-3">
                                    <label for="donarCorreo" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="donarCorreo" placeholder="Tu correo electrónico" required>
                                </div>
                                <div class="mb-3">
                                    <label for="cantidadDonacion" class="form-label">Cantidad a Donar (€)</label>
                                    <input type="number" class="form-control" id="cantidadDonacion" placeholder="Cantidad a donar" required>
                                </div>
                                <button type="submit" class="text-decoration-none text-white p-2 bg-primary rounded w-100">Donar Ahora</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-secundary text-white" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="bg-third-border rounded p-1">
                <div class="bg-third-border p-5 bg-light">
                    <h2 class="text-center m-4">Sobre Nosotros</h2>
                    <p>
                        En <strong>AnimaLoveS</strong>, nuestra misión es ofrecer un refugio seguro y un futuro lleno de esperanza a los animales abandonados, rescatados y necesitados. Sabemos que cada vida cuenta, y trabajamos incansablemente para brindarles una segunda oportunidad a aquellos que más lo necesitan. Nuestra labor está centrada en la <strong>adopción responsable</strong>, asegurando que nuestros animales encuentren un hogar lleno de amor y cuidados.
                    </p>
                    <p>
                        Trabajamos en colaboración con protectoras y asociaciones de todo el mundo para poder rescatar y rehabilitar animales de todas las especies. Desde perros y gatos hasta pequeños roedores, aves y reptiles, estamos comprometidos con el bienestar de todos los animales, brindándoles un refugio hasta que puedan ser adoptados.
                    </p>

                    <h3 class="text-center m-5">La Importancia de Donar y Realizar Voluntariado</h3>
                    <p>
                        Tu apoyo es crucial para continuar con nuestra misión. <strong>Donar</strong> alimentos, dinero o incluso tiempo a través del <strong>voluntariado</strong> son formas esenciales de ayudar.
                    </p>
                    <ul>
                        <li><strong>Donar:</strong> Las contribuciones económicas nos permiten cubrir los gastos de alimentación, atención veterinaria y los cuidados generales de nuestros animales. Sin tu generosidad, no podríamos mantener nuestros centros operativos ni seguir rescatando animales.</li>
                        <li><strong>Voluntariado:</strong> Si tienes tiempo y ganas de ayudar, ¡te invitamos a ser parte de nuestro equipo de voluntarios! Ayudarás en el cuidado diario de los animales, participarás en eventos de adopción y contribuirás a darles a nuestros peludos amigos una vida más feliz y digna.</li>
                    </ul>
                    <p>
                        Tanto las <strong>donaciones</strong> como el <strong>voluntariado</strong> son pilares fundamentales que nos permiten seguir salvando vidas y ofreciendo una segunda oportunidad a los animales que más lo necesitan. Sin tu apoyo, nuestra misión no sería posible.
                    </p>

                    <p class="text-center m-4">Nos encantaría saber tu opinión y escuchar cualquier sugerencia que tengas. Si tienes comentarios sobre nuestras actividades, sugerencias para mejorar o simplemente quieres compartir tu experiencia, por favor rellena el siguiente formulario. ¡Gracias por tu apoyo!</p>

                    <div class="bg-primary text-white p-5 m-5 rounded">
                        <form action="/enviar-comentarios" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Tu Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Tu Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico">
                            </div>
                            <div class="mb-3">
                                <label for="comentarios" class="form-label">Tu Comentario</label>
                                <textarea class="form-control" id="comentarios" rows="3" placeholder="Escribe aquí tus comentarios" required></textarea>
                            </div>
                            <button type="submit" class="btn bg-white" style="color: #d39b9b"><strong>Enviar Comentarios</strong></button>
                        </form>
                    </div>
                </div>

            </div>
        </section>


    </main>

    <?php include('./footer/footer.php'); ?>
    <script src="./js/script.js"></script>

</body>

</html>