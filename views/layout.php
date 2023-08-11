<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title></title>
</head>

<body>
    <div class="container-fluid bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="" width="270 px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><b>Inicio</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#productos"><b>Productos</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><b>Sobre Nosotros</b></a>
                            </li>
                        </ul>

                        <div class="ms-auto ">
                            <a href="login.php" class="btn btn-primary">Solicitud de Turnos</a>
                            <a href="login.php" class="btn btn-danger">Iniciar Sesion</a>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>


    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/mujer-con-celular.jpg" class="d-block w-100" style="filter: brightness(0.60);" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Explora nuestros productos y unite a la familia <b class="texto2 bg-light">#TODOROJO</b></h4>
                    <p>La tienda del club mas grande del continente</p>

                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/banconacion.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Encontra Indumentaria y productos de excelente calidad</h4>
                    <p>Somos Independiente.<b class="texto2 bg-light">Paladar Negro</b></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/banner3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Los mejores precios. Descuento abonando en efectivo</h4>
                    <p>Independiente es grande por su <b class="texto2 bg-light">Historia y su Gente</b></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div><br>

    <div class="container-fluid">
        <h1 class="text-danger" id="productos">Productos:</h1>
    </div><br>

    <div class="profile-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="img1"><img src="img/bolso.jpeg" alt="Bolso"></div>
                        <div class="main-text">
                            <h2>Bolso CAI</h2>
                            <p>Bolso de Independiente perfecto para guardar tus botines para ir a jugar un fulbito con
                                los pibes</p>
                            <h4 id="precio">$6000</h4>

                            <a href="#">Comprar</a>

                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="img1"><img src="img/camiseta2002.jpg" alt="camiseta2002"></div>
                        <div class="main-text">
                            <h2>Camiseta CAI 2002</h2>
                            <p>Camiseta Independiente Visitante 2002. Si queres tirar facha, esta camiseta es para vos
                            </p>
                            <h4 id="precio">$9000</h4>

                            <a href="#">Comprar</a>

                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="img1"><img src="img/mochila.jpg" alt="mochila"></div>

                        <div class="main-text">
                            <h2>Mochila CAI</h2>
                            <p>Mochila fachera para guardar tus utiles y caretearles a tus compañeros que sos del mas
                                grande</p>
                            <h4 id="precio">$8700</h4>

                            <a href="#">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    























    <br><br><br>
    <div class="container-fluid ">
        <div class="row p-5 pb-2 bg-light">

            <div class="col-xs-12 col-md-6 col-lg-3">
                <img src="../img/logo.png" alt="TODOROJO" width="280 px"><br><br>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="text-black h5">Banco Nacion</p><br>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="text-black h5 mb-3">Secciones</p>
                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom">

                    <div class="mb-2 ">
                        <a class="text-black text-decoration-none" href="#">Inicio</a>
                    </div>
                    <div class="mb-2 ">
                        <a class="text-black text-decoration-none" href="#productos">Productos</a>
                    </div>
                    <div class="mb-2 ">
                        <a class="text-black text-decoration-none" href="#">Sobre Nosotros</a>
                    </div>
                </div><br>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">

                <p class="text-black h5 mb-3">Contacto</p>
                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <div class="mb-2 ">
                        <a class="text-black text-decoration-none" href="https://www.instagram.com/leomessi/" target="_blank"><i class='bx bxl-instagram'></i>Instagram</a>
                    </div>
                    <div class="mb-2 ">
                        <a class="text-black text-decoration-none" href=" https://www.facebook.com/leomessi/?locale=es_LA" target="_blank"><i class='bx bxl-facebook-square'></i>Facebook</a>
                    </div>
                    <div class="mb-2 ">
                        <a class="text-black text-decoration-none" href="https://www.youtube.com/@vegetta777" target="_blank"><i class='bx bxl-youtube'></i> Youtube</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <br>
                <p class="text-black h5 text-center">Copyright - BancoNacion © 2023</p>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>