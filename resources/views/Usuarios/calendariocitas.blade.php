<?php 
// session_start();
// if(!isset($_SESSION['rol'])){
//   header("location:usuarioNoRegistrado.php");
// }
?>
@include('layouts/links')
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
                     <li><a class="nav-link active" href="{{route('Inicio')}}">Inicio</a></li>
                     
                  </ul>
               </div>
            </div>
         </nav>
      </header>

        {{-- menú información de usuario --}}
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php 
                  // echo $_SESSION["nombreUsuario"]; 
                  ?></span>
                <img width="30" height="30" class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <button onclick="cerrarSesion()">
                <a class="">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar sesión
                </a>
              </button>
              </div>
            </li>

          </ul>

        </nav>

      <div>


        <div class="card">
            <h6 class="card-header text-center font-weight-bold text-uppercase py-4">Hola <?php
              //  echo $_SESSION["nombreUsuario"]; 
               ?></h6>
            <div class="card-body">
              <div id="table" class="table-editable">
                <table class="table table-bordered table-responsive-md table-striped text-center">
                  <tbody>
                    <div class="calint">
                    <div class="calint1" id="fech"> 
                    </div>
                    <div class="calint2"><div class="calendar">
    <div class="calendar__info">
        <div class="calendar__prev" id="prev-month">&#9664;</div>
        <div class="calendar__month" id="month"></div>
        <div class="calendar__year" id="year"></div>
        <div class="calendar__next" id="next-month">&#9654;</div>
    </div>

    <div class="calendar__week">
        <div class="calendar__day calendar__item">Lunes</div>
        <div class="calendar__day calendar__item">Martes</div>
        <div class="calendar__day calendar__item">Miercoles</div>
        <div class="calendar__day calendar__item">Jueves</div>
        <div class="calendar__day calendar__item">Viernes</div>
        <div class="calendar__day calendar__item">Sabado</div>
        <div class="calendar__day calendar__item">Domingo</div>
    </div>

    <div class="calendar__dates" id="dates"></div>
</div>
</div>
                  </div>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>

   </body>
   <div id="#fecha"></div>
  
</html>