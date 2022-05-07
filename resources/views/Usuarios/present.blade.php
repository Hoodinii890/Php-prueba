<?php session_start();
if(!isset($_SESSION['adm'])){
  if ($_SESSION['u']) {
     header("location:index.php");
  }else
  header("location:usuarioNoRegistrado.php");
}
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Site Metas -->
      <title>Firulays S.A</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Site Icons -->
      <link rel="shortcut icon" href="../modelo/images/favicon.ico" type="image/x-icon">
      <link rel="apple-touch-icon" href="../modelo/images/apple-touch-icon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../modelo/css/bootstrap.min.css">
      <!-- Pogo Slider CSS -->
      <link rel="stylesheet" href="../modelo/css/pogo-slider.min.css">
      <!-- Site CSS -->
      <link rel="stylesheet" href="../modelo/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="../modelo/css/responsive.css">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="../modelo/css/custom.css">
      <link rel="stylesheet" href="../modelo/css/sb-admin-2.min">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->

   </head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98" >
      <!-- LOADER -->
      <!-- <div id="preloader">
         <div class="loader">
          <img src="images/preloader.gif" alt="" />
         </div>
           </div>end loader -->
      <!-- END LOADER -->
      <!-- Start top bar -->
     <div class="main-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="left-top">
                     <a class="new-btn-d br-2" href="#appointment"><span>Reservar cita</span></a>
                     <div class="mail-b"><a style="color: #fff;"><i class="fa fa-envelope-o" aria-hidden="true"></i> firulays@gmail.com</a></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="wel-nots">
                     <p>Bienvenidos a Filurays S.A!</p>
                  </div>
                  <div class="right-top">
                     <ul>
                        <li><button type="button" style="margin-left:3px;width: 55px; height:55px;" onclick="alerta()"><i class="fa fa-facebook" aria-hidden="true"></i></button></li>
                        <li><button type="button"  style="margin-left:3px;width: 55px; height:55px;" onclick="alerta()"><i class="fa fa-twitter" aria-hidden="true"></i></button></li>
                        <li><button type="button"  style="margin-left:3px;width: 55px; height:55px;" onclick="alerta()"><i class="fa fa-instagram" aria-hidden="true"></i></button></li>
                        <li><button type="button" style="margin-left:3px; width:55px; height:55px;" onclick="alerta()"><i class="fa fa-youtube-play" aria-hidden="true"></i></button></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End top bar -->
      <!-- Start header -->
      <header class="top-header" style="border:2px solid #19DE84;">
         <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
               <h1><span class="resaltado" style="color: #19DE84; font-weight: bold;">Firulays</span><span class="resaltado" style="color: #0F5780; font-weight: bold; font-size: 12px;"> S.A</span></h1>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
               <span></span>
               <span></span>
               <span></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                  <ul class="navbar-nav">
                     <li><a class="nav-link active" href="index.php">Inicio</a></li>
                     
                  </ul>
               </div>
            </div>
         </nav>
      </header>
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle"  href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombreUsuario"];  ?></span>
                <img width="30" height="30" class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <button onclick="cerrarSesion()">
                <a class="dropdown-item" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar session
                </a>
                </button>
              </div>
            </li>

          </ul>

        </nav>
      <div class="menul1">
        <hr class="divider">
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin: <?php echo $_SESSION["nombreUsuario"];  ?><sup><?php echo $_SESSION["adm"];  ?></sup></div>
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Pages Collapse Menu -->

      <li class="nav-item">
        <hr class="sidebar-divider my-0">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Administrar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            <a class="collapse-item" href="v-admin-user.php">Administrar usuarios</a>
            <br>
            <a class="collapse-item" href="terminarcita.php">Concluir citas</a>
          </div>
        </div>
      </li>

    </ul>
     <hr class="sidebar-divider my-0">
      </div>
      <div class="formn">
         <div class="card">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4"><?php
$pass="2576989j";
            $password = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]); echo $password;?></h3>
            <div class="card-body">
              <div id="table" class="table-editable">
                <span class="table-add float-right mb-3 mr-2"><a href="#!" data-toggle="modal" data-target="#exampleModal" class="text-success"><i
                      class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
              </div>
            </div>
                   <div style="border: 1px groove black; "><img  width="500" height="400" src="../modelo/images/p2.png"><img style="margin-left: 10px;" width="500" height="400" src="../modelo/images/p1.png"></div>
          </div>
      </div>
  <div class="modal fade" id="modificarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmar cita</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="datosModificar" class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button onclick="activo()" type="button" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </div>
    </div>
  </div>
            <script src="../modelo/js/jquery.min.js"></script>
      <script src="../modelo/js/bootstrap.min.js"></script>
      <script src="../modelo/js/popper.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="../modelo/js/jquery.magnific-popup.min.js"></script>
      <script src="../modelo/js/jquery.pogo-slider.min.js"></script> 
      <script src="../modelo/js/slider-index.js"></script>
      <script src="../modelo/js/smoothscroll.js"></script>
      <script src="../modelo/js/TweenMax.min.js"></script>
      <script src="../modelo/js/main.js"></script>
      <script src="../modelo/js/owl.carousel.min.js"></script>
      <script src="../modelo/js/form-validator.min.js"></script>
      <script src="../modelo/js/contact-form-script.js"></script>
      <script src="../modelo/js/isotope.min.js"></script> 
      <script src="../modelo/js/images-loded.min.js"></script>  
      <script src="../modelo/js/custom.js"></script>
      <script src="https://kit.fontawesome.com/1f45d73677.js" crossorigin="anonymous"></script>
      <script src="../modelo/js/scriptablas1.js"></script>
      <section><option></option></section>
   </body>
   
</html>