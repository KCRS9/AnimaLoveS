<header class="pb-3 d-flex justify-content-between text-white flex-wrap sticky-top">

    <div class="col-12 d-flex bg-primary flex-wrap">
        <div
            class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start align-items-center gap-2 px-3">
            <img src="./img/logo/petlover.png" alt="" class="img-fluid" style="max-width: 50px;">
            <h1>AnimaLoveS</h1>
        </div>

        <div class="col-12 col-md-6 d-flex align-items-center justify-content-md-end  justify-content-between p-1">
            <nav class="d-flex ps-3">
                <ul class="d-flex nav align-items-center m-auto gap-2">
                    <li><a class="text-white text-decoration-none" href="./iniciar.php">Inciar Sesión</a></li>
                    <li><a class="text-white text-decoration-none" href="./registro.php">Registrarse</a></li>
                </ul>
            </nav>

            <nav class="d-flex justify-content-end px-3">
                <select name="language" id="language-select" class="form-select custom-select">
                    <option value="es" data-image="./img/banderas/es.png">Español</option>
                    <option value="en" data-image="./img/banderas/en.png">English</option>
                    <option value="fr" data-image="./img/banderas/fr.png">Français</option>
                    <option value="de" data-image="./img/banderas/de.png">Deutsch</option>
                </select>
            </nav>
        </div>

    </div>

    <div class="col-12 bg-secundary p-2 px-3 d-flex flex-wrap ">

        <nav class="navbar navbar-expand-md col-2 col-md-12 col-lg-5">
            <div class="container-fluid ">
                <!-- Botón de menú hamburguesa -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Contenido colapsable -->
                <div class="collapse navbar-collapse d-md-flex justify-content-center" id="navbarNav">
                    <ul class="navbar-nav me-auto me-md-0 mb-2 mb-lg-0 ">
                        <li class="nav-item"><a class="text-white nav-link active"
                                href="./index.php"><strong>Inicio</strong></a></li>
                        <li class="nav-item"><a class="text-white nav-link" href="./protectoras.php"><strong>Protectoras</strong></a></li>
                        <li class="nav-item"><a class="text-white nav-link" href="./daradopcion.php"><strong>Dar en Adopción</strong></a></li>
                        <li class="nav-item"><a class="text-white nav-link" href="./donaciones.php"><strong>Donaciones</strong></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class=" d-flex align-items-center justify-content-center col-10 col-md-12 col-lg-7">
            <form action="" method="get" class="w-75">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Buscar...">
                </div>
            </form>
        </div>
    </div>

</header>