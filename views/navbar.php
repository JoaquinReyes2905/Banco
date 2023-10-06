 <div class="container-fluid" id="navbar">
     <nav class="navbar navbar-expand-lg " id="navbar">
         <div class="container">
             <a class="navbar-brand" href="#"><img src="img/insano.png" alt="" width="270 px"></a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>


             <div class="collapse navbar-collapse" id="navbarSupportedContent" id="text_navbar">
                 <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="text_navbar">
                     <li class="nav-item active">
                         <a class="nav-link" href="#" id="text_navbar"><b>Inicio</b></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#productos" id="text_navbar"><b>Productos</b></a>
                     </li>
                     <?php if (isset($_SESSION['usuario'])) { ?>
                         <li class="nav-item">
                             <a class="nav-link" href="#" id="text_navbar"><b>Depositar</b></a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#" id="text_navbar"><b>Prestamos</b></a>
                         </li>
                     <?php } ?>
                     <li class="nav-item">
                         <a class="nav-link" href="#" id="text_navbar"><b>Sobre Nosotros</b></a>
                     </li>
                 </ul>

                 <div class="ms-auto ">

                     <a href="register.php" class="btn btn-primary">Solicitud de Turnos</a>
                     <?php if (isset($_SESSION['usuario'])) { ?>
                         <div class="btn-group">
                             <button type="button" class="btn btn-danger"><?php echo $_SESSION['usuario']['nombre_completo']?></button>
                             <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                 <span class="visually-hidden">Toggle Dropdown</span>
                             </button>
                             <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="#">Depositos</a></li>
                                 <li><a class="dropdown-item" href="#">Prestamos</a></li>
                                 <li><a class="dropdown-item" href="#">Tus tarjetas</a></li>
                                 <li>
                                     <hr class="dropdown-divider">
                                 </li>
                                 <li><a class="dropdown-item" href="logout.php">Cerrar Sesion</a></li>
                             </ul>
                         </div>
                     <?php } else { ?>
                         <a href="login.php" class="btn btn-danger">Iniciar Sesion</a>
                     <?php } ?>
                 </div>

             </div>
         </div>
     </nav>
 </div>