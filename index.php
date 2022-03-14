<?php include("nav.php"); ?>
        <!-- Masthead-->
        <header class="masthead" id="index">
            <div class="container h-100 ">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="container">
                        <img class="navbar-brand  w-25 h-57 mt-3 justify-content-center" src="assets/img/logo.png" alt="Logo" href="#page-top">
                    </div>
                    <div class="col-lg-10 align-self-end" >
                        <h1 class="text-uppercase font-weight-bold">BIENVENIDOS</h1>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">A la pizzeria con la mejor masa del mundo.</p>
                    </div>

                </div>
            </div>
        </header>
        
        <!-- Historia-->
        <section class="page-section bg-primary p-5" id="historia">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 g-2">

                    <div class="col text-center" >
                        <img class="w-75" src="assets/img/nuestra-historia.jpg" alt="nuestra-historia">
                    </div>
                    <div class="col text-center justify-content-center">
                        <h2 class="text-white mt-5">NUESTRA HISTORIA</h2>
                        <h3 class="text-white mt-4 mb-3">"Donde surge nuestra receta"</h3>
                        <p class="text-white">Tiene sus orígenes en Italia, mas precisamente Caserta, una ciudad cerca a Napoles (donde fue creada por primera vez la pizza). Aquí surge uno de los personajes más importantes de nuestra historia, Doña Stella, una mujer con cierto encanto y habilidad por las artes culinarias italianas y especialmente por la pizza.</p>
                    </div>
                
                </div>
            </div>
        </section>

        <!-- Galeria-->
        
        <h2 id="galeria" class=" bg-dark text-white text-center justify-content-center pt-5 pb-5">GALERÍA DE FOTOS</h2>
        <div class="d-sm-none bg-dark">
            <img src="assets/img/portfolio/carrusel/6.jpg" alt="fondo" class="img-fluid">
        </div>

        <div class="carousel slide carousel-fade d-none d-sm-block" data-ride="carousel" id="carousel">
            
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
                <li data-target="#carousel" data-slide-to="5"></li>
            </ol>
    
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/portfolio/carrusel/1.jpg" alt="slider1">
                </div>
    
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/portfolio/carrusel/2.jpg" alt="slider2">
                </div>
    
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/portfolio/carrusel/3.jpg" alt="slider3">
                </div>
    
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/portfolio/carrusel/4.jpg" alt="slider4">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/portfolio/carrusel/5.jpg" alt="slider4">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/portfolio/carrusel/6.jpg" alt="slider4">
                </div>
            </div>
        </div>

        <!-- Dato histórico -->
        <section class="page-section bg-primary p-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 g-2">

                    
                    <div class="col text-center justify-content-center">
                        <h2 class="text-white mt-5">DATO HISTÓRICO</h2>
                        <h3 class="text-white mt-4 mb-3">"Horno pizzero"</h3>
                        <p class="text-white">Desde el año de apertura del restaurant en 1982, el horno principal, llamado por los compañeros "pizzero", no ha sido totalmente apagado. Por lo que podemos asegurar que conserva su magia desde ese entonces llevandonos hoy a lo más alto en el negocio de las pizzas.</p>
                    </div>
                    <div class="col text-center mt-5 mb-5" >
                        <img class="w-100" src="assets/img/dato-hitorico.jpg" alt="nuestra-historia">
                    </div>
                </div>
            </div>
        </section>

        <!-- Nuestro local -->
        <section class=" bg-dark p-5">
            <div class="container">
                <div class="row">        
                    <div class="col text-center justify-content-center">
                        <h2 class="text-white mt-5 mb-3">NUESTRO LOCAL</h2>
                        <p class="text-white">Nuestro local principal se encuentra situado en la avenida gastronómica más importante de la Capital Federal, la famosa Av. Corrientes.</p>
                    </div>
                    <div class="text-center" >
                        <img class="w-100 mt-5 mb-3" src="assets/img/nuestro-local.jpg" alt="nuestro local">
                    </div>
                </div>

                <div class="row">
                    <h6 class="col text-center justify-content-center text-white-50 mt-3 mb-2 ">CAPITAL FEDERAL - BUENOS AIRES</h6>
                </div>
                <div class="col text-center text-white">
                <p class="fw-lighter m-2 ">Av. Corrientes 2420 - CABA</p>
                <p class="fw-lighter m-2 ">Reserva  (011) 4360-5333</p>
                <p class="fw-lighter m-2">Whatsapp  +54 9 116143-5626 </p>
            </div>
            </div>
        </section>

        <!-- Mapa de sucursal -->
        <div class="container">
            <div class="row">
                <img class="img-fluid" src="assets/img/mapa.jpg" alt="mapa">
            </div>
        </div>

        
        <?php include("footer.php"); ?>

        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="jquery/scripts.js"></script>
    </body>
</html>
