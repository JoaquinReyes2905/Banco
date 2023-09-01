<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ARCYT -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <title>BANCO</title>
</head>

<body>
   <?php require_once "views/navbar.php"?>

   <?php
    $section = (isset($section)) ? $section : 'home';
    require_once $section.".php";
    ?>



    <br><br><br>
    <div class="container-fluid " id="navbar">
        <div class="row p-5 pb-2 " id="navbar">

            <div class="col-xs-12 col-md-6 col-lg-3" id="navbar">
                <img src="img/insano.png" alt="TODOROJO" width="280 px"><br><br>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-3" id="navbar">
                <p class="text-light h5">Banco Nacion</p><br>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-3" id="navbar">
                <p class="text-light h5 mb-3">Secciones</p>
                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom">

                    <div class="mb-2 ">
                        <a class="text-light text-decoration-none" href="#">Inicio</a>
                    </div>
                    <div class="mb-2 ">
                        <a class="text-light text-decoration-none" href="#productos">Productos</a>
                    </div>
                    <div class="mb-2 ">
                        <a class="text-light text-decoration-none" href="#">Sobre Nosotros</a>
                    </div>
                </div><br>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">

                <p class="text-light h5 mb-3">Contacto</p>
                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <div class="mb-2 ">
                        <a class="text-light text-decoration-none" href="https://www.instagram.com/leomessi/" target="_blank"><i class='bx bxl-instagram'></i>Instagram</a>
                    </div>
                    <div class="mb-2 ">
                        <a class="text-light text-decoration-none" href=" https://www.facebook.com/leomessi/?locale=es_LA" target="_blank"><i class='bx bxl-facebook-square'></i>Facebook</a>
                    </div>
                    <div class="mb-2 ">
                        <a class="text-light text-decoration-none" href="https://www.youtube.com/@vegetta777" target="_blank"><i class='bx bxl-youtube'></i> Youtube</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <br>
                <p class="text-light h5 text-center">Copyright - BancoNacion © 2023</p>
            </div>
        </div>
    </div>


   
</body>

</html>