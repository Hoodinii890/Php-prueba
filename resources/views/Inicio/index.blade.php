<?php 
// session_start();
// if(!isset($_SESSION['rol'])){
//   header("location:usuarioNoRegistrado.php");
// }
?>
@extends('layouts/links')
<!DOCTYPE html>
<html lang="en">
   @section('head')
       
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
   
   @endsection
   @section('body')
       
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
               @if (auth()->check())
               <label class="checkedd" for="check"><i class="fa fa-bars"></i></label>
               @endif
               <h1><span class="resaltado" style="color: #19DE84; font-weight: bold;">Firulays</span><span class="resaltado" style="color: #0F5780; font-weight: bold; font-size: 12px;"> S.A</span></h1><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
               <span></span>
               <span></span>
               <span></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                  <ul class="navbar-nav">
                     <li><a class="nav-link active" href="#home">Home</a></li>
                     <li><a class="nav-link" href="#about">Quiénes somos</a></li>
                     <li><a class="nav-link" href="#services">Servicios</a></li>
                     <li><a class="nav-link" href="#appointment">Citas</a></li>
                     <li><a class="nav-link" href="#gallery">Productos</a></li>
                     <li><a class="nav-link" href="#team">Veterinarios</a></li>
                     <li><a class="nav-link" href="#blog">Contacto</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      @if (auth()->check())
          
      <input type="checkbox" class="checkbox" id="check">
      <div class="menul">
                 <hr class="divider">
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <div class="sidebar-brand-icon rotate-n-15">
            <div class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Usuario: {{auth()->user()->name}}<span style="font-size: 16px; font-family:perpetua; text-decoration: initial;">
            </span><sup style="color: #0F5780;">{{auth()->user()->id}}</sup></div>
            </div>
         </div>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Pages Collapse Menu -->

         <li class="nav-item">
         <hr class="sidebar-divider my-0">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Menu</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
               <h6 class="collapse-header">Opciones:</h6>
               @if (auth()->user()->administrador)
                   
               <button>
                  <a class="collapse-item" href="{{route('admin')}}"><i class="fas fa-user-cog"></i> Administrar</a>
               </button>
               @else
               <button>
                  <a class="collapse-item" href="{{route('calendario')}}"><i class="fas fa-user-cog"></i> Calendario</a>
               </button>
               @endif
               <br>
               <button><a href="{{route('Logout')}}">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar sesión
               </a></button>
                  
            </div>
         </div>
         </li>

         </ul>
      </div>
      
      @endif
      <!-- End header -->
      <!-- Start Banner -->
      <div class="ulockd-home-slider">
         <div class="container-fluid">
            <div class="row">
               <div class="pogoSlider" id="js-main-slider">
                  <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url({{asset('images/slider-01.jpg')}});">
                     <div class="lbox-caption pogoSlider-slide-element">
                        <div class="lbox-details">
                           <h1>Bienvenidos a <span class="resaltado" style="color: #19DE84; font-weight: bold;">Firulays</span><span class="resaltado" style="color: #0F5780; font-weight: bold; font-size: 12px;"> S.A</span></h1>
                           <a href="#blog" class="btn">Contáctenos</a>
                        </div>
                     </div>
                  </div>
                  <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url({{asset('images/slider-02.jpg')}});">
                     <div class="lbox-caption pogoSlider-slide-element">
                        <div class="lbox-details">
                           <h1>Somos expertos en el cuidado de tus mascotas</h1>
                           <a href="#appointment" class="btn">Reservar citas</a>
                        </div>
                     </div>
                  </div>
                  <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url({{asset('images/slider-03.jpg')}});">
                     <div class="lbox-caption pogoSlider-slide-element">
                        <div class="lbox-details">
                           <h1>Hasta que uno no ha amado un animal, una parte del alma sigue sin despertar.</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- .pogoSlider -->
            </div>
         </div>
      </div>
      <!-- End Banner -->
      <!-- Start About us -->
      <div id="about" class="about-box">
         <div class="about-a1">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="title-box">
                        <h2>Sobre nosotros</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="row align-items-center about-main-info">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <h2> Bienvenidos a <span class="resaltado" style="color: #19DE84; font-weight: bold;">Firulays</span><span class="resaltado" style="color: #0F5780; font-weight: bold; font-size: 12px;"> S.A</span></h2>
                           <p>Centro animal, es un Hospital Veterinario ubicado en la ciudad de Medellín. Somos un equipo comprometido con nuestros pacientes <br>mediante la prestación de un servicio médico veterinario y complementarios con óptima calidad de manera oportuna y eficaz.</p>
                           <p>⇢ Hospitalización.</p>
                           <p>⇢ Vacunación y desparasitación.</p>
                           <p>⇢ Sala de Belleza.</p>
                           <p>⇢ Consulta general.</p>
                           <p>⇢ Asesoría  de producción pecuaria.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="about-m">
                              <ul id="banner">
                                 <li>
                                    <img src="{{asset('images/about-img-01.jpg')}} "alt="">
                                 </li>
                                 <li>
                                    <img src="{{asset('images/about-img-02.jpg')}} "  alt="">
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End About us -->
      <!-- Start Services -->
      <div id="services" class="services-box">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="title-box">
                     <h2>Servicios</h2>
                     <p>En Clínica Veterinaria <span class="resaltado" style="color: #19DE84; font-weight: bold;">Firulays</span><span class="resaltado" style="color: #0F5780; font-weight: bold; font-size: 12px;"> S.A</span> ofrecemos una asistencia completa y de calidad a tu mascota. Nuestro principal objetivo es mantener la salud y el bienestar de nuestros animales y ayudarlos a restablecerse cuando están enfermos. Para ello, contamos con un personal altamente cualificado e instalaciones modernas y bien equipadas. </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="serviceBox">
                           <div class="service-icon"><i class="fa fa-h-square" aria-hidden="true"></i></div>
                           <h3 class="title">Medicina preventiva</h3>
                           <p class="description">
                              Como prevenir es mejor que curar, te daremos los mejores consejos para el cuidado de tu mascota. Ven a informarte acerca de los planes vacunales y cómo desparasitar a tus animales.
                           </p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="serviceBox">
                           <div class="service-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                           <h3 class="title">Guardería Canina y Felina</h3>
                           <p class="description"> 
                              En nuestras instalaciones contamos con guarderías. Para acoger a tus mascotas, es imprescindible que estén vacunados al día y que sean desparasitados antes de su estancia, salvo que necesiten dieta específica.
                           </p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="serviceBox">
                           <div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
                           <h3 class="title">Radiología Digital</h3>
                           <p class="description">
                              Ofrece información sobre el estado tanto de tejidos blandos como de huesos y articulaciones, por lo que es una herramienta de inestimable utilidad para el ciudado de nuestras mascotas.
                           </p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="serviceBox">
                           <div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
                           <h3 class="title">Ecografía</h3>
                           <p class="description">
                              La ecografía es una técnica de diagnóstico muy útil, dado que ofrece mucha información sobre el estado de los órganos internos de manera no invasiva, inmediata y precisa.
                           </p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="serviceBox">
                           <div class="service-icon"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
                           <h3 class="title">Análisis en laboratorio</h3>
                           <p class="description">
                              Contamos con equipamiento profesional. De esta manera se aceleran los procedimientos y emitir un diagnóstico e implementar el tratamiento adecuado de manera rápida y efectiva.
                           </p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="serviceBox">
                           <div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
                           <h3 class="title">Peluquería</h3>
                           <p class="description">
                              Una amplia variedad de cortes de pelo y baños, tanto estéticos como terapéuticos.
                              Son bañados con los champús más adecuados para su tipo de piel y pelo. Además, se cortan las uñas y limpian los oídos
                           </p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="serviceBox">
                           <div class="service-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                           <h3 class="title">Análisis de Triquina</h3>
                           <p class="description">
                              La triquinosis es una enfermedad causada por las larvas enquistadas de un gusano del género Trichinella del que existen varias especies. En Aragón se encuentran la Trichinella spiralis y la Trichinella britovi.
                           </p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="serviceBox">
                           <div class="service-icon"><i class="fa fa-user-md" aria-hidden="true"></i></div>
                           <h3 class="title">Obstetricia y Reproducción</h3>
                           <p class="description">
                              El servicio de obstetricia y reproducción pone a disposición del cliente medidas de prevención y tratamiento, tanto médico como quirúrgico, de estas enfermedades.
                           </p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="serviceBox">
                           <div class="service-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
                           <h3 class="title">Dermatología</h3>
                           <p class="description">
                              Entendemos que un buen diagnóstico es primordial y para ello realizamos citologías, tricogramas, pruebas de alergia y cualquier otro tipo de pruebas para detectar el problema.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Services -->
      <!-- Start Appointment -->
      <div id="appointment" class="appointment-main">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="title-box">
                     <h2>Citas</h2>
                     <p>Resérvala </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6 col-md-6">
                  <div class="well-block">
                     <div class="well-title">
                        <h2>Agendar una cita</h2>
                     </div>
                     <form action="{{route('crearCita')}}" method="post" autocomplete="off">
                        <!-- Form start -->
                        {{-- Mostrar alertas y errores por metodo de php --}}
                        @if (session('success'))
                           <h2 class="alert alert-success">{{session('success')}}</h2>
                        @endif
                        @if (session('info'))
                           <h2 class="alert alert-info">{{session('info')}}</h2>
                        @endif
                        @foreach ($errors->all() as $message)
                           <h2 class="alert alert-warning">{{$message}}</h2>
                        @endforeach
                        @csrf
                        <div class="row">
                           
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label" for="NM">Nombre Mascota</label>
                                 <input id="NM" name="NM" type="text" placeholder="Digite" class="form-control input-md">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label" for="fecha">Fecha</label>
                                 <input id="fecha" name="fecha" type="date" placeholder="Digite" class="form-control input-md">
                              </div>
                           </div>
                           <!-- Select Basic -->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label" for="hora">Hora</label>
                                 <select id="hora" name="hora" class="form-control">
                                    <option value="6:00am">6:00am</option>
                                    <option value="10:00am">10:00am</option>
                                    <option value="1:00pm">1:00pm</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" style="margin-top: 37px;">
                                 <button type="submit" id="singlebutton" name="singlebutton" class="new-btn-d br-2">Enviar</button>
                              </div>
                           </div>
                        </div>
                     </form>
                     <!-- form end -->
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="well-block">
                     <div class="well-title">
                        <h2>¿Por qué una cita con nosotros?</h2>
                     </div>
                     <div class="feature-block">
                        <div class="feature feature-blurb-text">
                           <h4 class="feature-title">
                              24/7 horas disponibles
                           </h4>
                           <div class="feature-content">
                              <p>No dudes en contactarnos si tienes alguna consulta o emergencia. <br>Queremos que tu mascota esté sana y feliz.</p>
                           </div>
                        </div>
                        <div class="feature feature-blurb-text">
                           <h4 class="feature-title">
                              Personal experimentado disponible
                           </h4>
                           <div class="feature-content">
                              <p>Con el tiempo hemos ido creciendo y mejorando nuestras instalaciones. <br>Hoy en día nos sentimos orgullosos de ser uno de los centros <br>mejor dotados en Medellín. Esto nos hace capaces de proporcionar <br>una asistencia de gran calidad a los habitantes de la zona. </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- End Appointment -->
      <!-- Start Gallery -->
      <div id="gallery" class="gallery-box">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="title-box">
                     <h2>Productos</h2>
                     <p>Puedes comprar estos productos en veterinaria <span class="resaltado" style="color: #19DE84; font-weight: bold;">Firulays</span><span class="resaltado" style="color: #0F5780; font-weight: bold; font-size: 12px;"> S.A</span></p>
                  </div>
               </div>
            </div>
            <div class="popup-gallery row clearfix">
               <div class="col-md-3 col-sm-6">
                  <div class="box-gallery">
                     <img src="{{asset('images/gallery-02.jpg')}} " alt="">
                     <div class="box-content">
                        <button  class="title" data-toggle="modal" data-target="#exampleModal3">
                           <h3>ANAPLAST</h3>
                        </button>
                        <ul class="icon">
                           <li><a href="{{asset('images/gallery-02.jpg')}} "><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="box-gallery">
                     <img src="{{asset('images/gallery-03.jpg')}} " alt="">
                     <div class="box-content">
                        <button  class="title" data-toggle="modal" data-target="#exampleModal4">
                           <h3>ENROJEC 10%</h3>
                        </button>
                        <ul class="icon">
                           <li><a href="{{asset('images/gallery-03.jpg')}} "><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="box-gallery">
                     <img src="{{asset('images/gallery-04.jpg')}} " alt="">
                     <div class="box-content">
                        <button  class="title" data-toggle="modal" data-target="#exampleModal5">
                           <h3>RECICORT E P I 1,77 MG ML</h3>
                        </button>
                        <ul class="icon">
                           <li><a href="{{asset('images/gallery-04.jpg')}} "><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="box-gallery">
                     <img src="{{asset('images/gallery-05.jpg')}} " alt="">
                     <div class="box-content">
                        <button  class="title" data-toggle="modal" data-target="#exampleModal6">
                           <h3>OCULVET</h3>
                        </button>
                        <ul class="icon">
                           <li><a href="{{asset('images/gallery-05.jpg')}} "><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="box-gallery">
                     <img src="{{asset('images/gallery-06.jpg')}} " alt="">
                     <div class="box-content">
                        <button  class="title" data-toggle="modal" data-target="#exampleModal7">
                           <h3>ALIMENTO PARA GATOS (MIRRINGO)</h3>
                        </button>
                        <ul class="icon">
                           <li><a href=".{{asset('images/gallery-06.jpg')}} "><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="box-gallery">
                     <img src="{{asset('images/gallery-07.jpg')}} " alt="">
                     <div class="box-content">
                        <button  class="title" data-toggle="modal" data-target="#exampleModal8">
                           <h3>WHISKAS</h3>
                        </button>
                        <ul class="icon">
                           <li><a href="{{asset('images/gallery-07.jpg')}} "><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="box-gallery">
                     <img src="{{asset('images/gallery-08.jpg')}} " alt="">
                     <div class="box-content">
                        <button  class="title" data-toggle="modal" data-target="#exampleModal9">
                           <h3>ASESORIOS PARA TUS MASCOTAS</h3>
                        </button>
                        <ul class="icon">
                           <li><a href="{{asset('images/gallery-08.jpg')}} "><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Gallery -->
      <!-- Start Team -->
      <div id="team" class="team-box">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="title-box">
                     <h2>Veterinarios</h2>
                     <p>Ser veterinario no es sólo cuidar a los animales, es ante todo respetar la vida de todos los que habitamos en este mundo y dignificar su existencia.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="our-team">
                     <div class="pic">
                        <img src="{{asset('images/img-1.jpg')}} " alt="">
                     </div>
                     <div class="team-content">
                        <h3 class="title">Lina Cuartas</h3>
                        <span class="post">5 años en el campo</span>
                        <ul class="social">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="our-team">
                     <div class="pic">
                        <img src="{{asset('images/img-2.jpg')}} " alt="">
                     </div>
                     <div class="team-content">
                        <h3 class="title">Kristina Muñoz</h3>
                        <span class="post">8 años en el campo</span>
                        <ul class="social">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="our-team">
                     <div class="pic">
                        <img src="{{asset('images/img-3.jpg')}} " alt="">
                     </div>
                     <div class="team-content">
                        <h3 class="title">Steven Gómez</h3>
                        <span class="post">3 años en el campo</span>
                        <ul class="social">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Team -->
      <!-- Start Blog -->
      <div id="blog" class="blog-box">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="title-box">
                     <h2>Contacto</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-xs-12">
                  <div class="left-contact">
                     <div class="media cont-line">
                        <div class="media-left icon-b">
                           <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                           <h4>Habla a</h4>
                           <p></p>
                           Centro veterinario <span class="resaltado" style="color: #19DE84; font-weight: bold;">Firulays</span><span class="resaltado" style="color: #0F5780; font-weight: bold; font-size: 12px;"> S.A</span>
                        </div>
                     </div>
                     <div class="media cont-line">
                        <div class="media-left icon-b">
                           <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                           <h4>Email</h4>
                           <a href="#">firulays@gmail.com</a><br>
                           <a href="#">vetefiru12@gmail.com</a>
                        </div>
                     </div>
                     <div class="media cont-line">
                        <div class="media-left icon-b">
                           <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                           <h4>Números telefónicos</h4>
                           <a href="#">5298743</a><br>
                           <a href="#">3015345690</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Blog -->
      <!-- Start Contact -->
      
<!--  fin del formulario  -->
<!-- formulario ingreso -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ingreso</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form class="form-horizontal" action="../control/controliniciosession.php" method="post" autocomplete="off">
                     <fieldset>
                        <!-- Form Name -->
                        <!-- Text input-->
                        <div class="form-group" >
                           <label class="col-md-4 control-label" for="textinput"></label>  
                           <div class="col-md-8">
                              <input id="email" name="email" type="text" placeholder="Correo electrónico" class="form-control input-md" required="">
                           </div>
                        </div>
                        <!-- Password input-->
                        <div class="form-group">
                           <label class="col-md-4 control-label" for="passwordinput"></label>
                           <div class="col-md-8">
                              <input id="passwordinput" name="passwordinput" type="password" placeholder="Contraseña" class="form-control input-md" required="">
                           </div>
                        </div>
                     </fieldset>
                     
                     <div class="boton">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="submit" class="btn btn-primary">Ingresar</button>
                     </div>
                  </form>
                  
               </div>
            </div>
         </div>
      </div>
      <!--fin del formulario -->
      <!-- Start Footer -->
      <footer class="footer-box">
         <div class="subscribe-box">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="subscribe-inner  clearfix">
                        <h2>Subscribirse</h2>
                        <p>Anímate a seguir nuestro canal de Youtube.
                           <br><br>
                           Vet. <span class="resaltado" style="color: #19DE84; font-weight: bold;">Firulays</span><span class="resaltado" style="color: #0F5780; font-weight: bold; font-size: 12px;"> S.A</span>
                           <br>
                           17.900 suscriptores
                        </p>
                        <form action="#" method="post">
                           <div class="form-group">
                              <button type="submit" class="new-btn-d br-2">
                              Subscribirse
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container1">
            <div class="row">
               <div class="col-lg-12">
                  <br><br><br><br><br><br>
                  <p class="footer-company-name">Todos los derechos reservados. &copy; 2020 <a href="#"><span class="resaltado" style="color: #19DE84; font-weight: bold;">Firulays</span><span class="resaltado" style="color: #0F5780; font-weight: bold; font-size: 12px;"> S.A</span></a> Diseñado por : <a href="https://html.design/">Profesionales</a></p>
               </div>
            </div>
         </div>
      </footer>
  <div class="modal fade" id="modificarTexto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modificar Texto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="datosModificarT" class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button onclick="modificarProducto()" type="button" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </div>
    </div>
  </div>
      <!-- ...............CAJAS DE DESCRIPCONES DE LOS PRODUCTOS.................... -->  
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div id="producto1"></div>
            </div>
            </div>
            </div>
      <!-- ......................................................................................................... -->
      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ANAPLAST</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="nueve">
                     <img src="{{asset('images/gallery-02.jpg')}} " alt="">
                  </div>
                  <div class="ocho">
                     <h1>Descripción</h1>
                     <p>Cada mL de la solución inyectable contiene:
                        Diaceturato de 4,4, diazoaminodibenzamidina, oxitetraciclina base, antipirina, vitamina B12, e6xcipientes c.s.p.
                        Esta indicado en el control, prevención y tratamiento de la Anaplasmosis, Babesiosis y Tripanosomiasis en rumiantes, equinos y caninos. Para el control y tratamiento de enfermedades ocasionadas por: Anaplasma, Babesia bovis, Babesia canis, Tripanosoma evansi, tripanosoma vivax.
                     </p>
                     <br>
                     <p>Precio: 26.000</p>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               </div>
            </div>
         </div>
      </div>
      <!-- .................................................................................-->
      <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ENROJEC 10%</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="nueve">
                     <img src="{{asset('images/gallery-03.jpg')}} " alt="">
                  </div>
                  <div class="ocho">
                     <h1>Descripción</h1>
                     <p>Cada 100 mL contiene:
                        Enrofloxacina, excipientes c.s.p.
                        <br>
                        Está indicado en pollos, pollitas, pollonas y pavos, tanto de engorde como de reproducción, para el control y tratamiento de infecciones bacterianas mixtas o sencillas de los aparatos respiratorios, digestivos, urogenital e infecciones en general. Para el control de las enfermedades infecciosas producidas por los siguientes gérmenes: (Mycroplasmosis aviar), Escherichia (colibacilosis), Pasteurella (pasterelosis o cólera aviar), Streptococcus, Staphylococcus, Haemophilusparagallinarum.
                     </p>
                     <br>
                     Precio: 19.400
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               </div>
            </div>
         </div>
      </div>
      <!------------------------------------------------------------------------------------>
      <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">RECICORT</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="nueve">
                     <img src="{{asset('images/gallery-04.jpg')}} " alt="">
                  </div>
                  <div class="ocho">
                     <h1>Descripción</h1>
                     <p>   Otitis externa. 
                        <br>
                        Tratamiento sintomático de la dermatitis seborreica del pabellón auricular
                        Principio activo: antiinflamatorio, queratoplastico, acidificante, acetonido de triamcinolona dermatitis seborreica.
                     </p>
                     <br>
                     Precio: 14.500
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>               </div>
            </div>
         </div>
      </div>
      <!---------------------------------------------------------------------------------------------->
      <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">OCULVET</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="nueve">
                     <img src="{{asset('images/gallery-05.jpg')}}" alt="">
                  </div>
                  <div class="ocho">
                     <h1>Descripción</h1>
                     <p>Cada mL contiene: 
                        Gentamicina sulfato, dexametasona y lidocaina clorhidrato.
                        Solución otico - oftálmica, antibiótico y desinflamatorio, indicado para el tratamiento de afecciones de ojos y oídos en perros y gatos como, blefaritis (inflamación de los parpados), conjuntivitis, queratitis (inflamación de la córnea) y otitis externa y media en donde estén involucrados gérmenes sensibles a la Gentamicina.
                     </p>
                     <br>
                     Precio: 23.000
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               </div>
            </div>
         </div>
      </div>
      <!--------------------------------------------------------------------------------------------------------->
      <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ALIMENTO PARA GATOS(MIRRINGO)</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="nueve">
                     <img src="{{asset('images/gallery-06.jpg')}} " alt="">
                  </div>
                  <div class="ocho">
                     <h1>Descripción</h1>
                     <p>Es un alimento completo que satisface todos los requerimientos nutricionales de crecimiento, desarrollo, mantenimiento y lactancia para gatos de todas las razas. Sus ingredientes incluyen 30% de proteína de pollo, carne o pescado, que son una gran fuente de alimento para tu mirringo.</p>
                     <br>
                     Precio: 5600
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               </div>
            </div>
         </div>
      </div>
      <!------------------------------------------------------------------------------------------------------------->
      <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">WHISKAS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="nueve">
                     <img src="{{asset('images/gallery-07.jpg')}} " alt="">
                  </div>
                  <div class="ocho">
                     <h1>Descripción</h1>
                     <p>El alimento en sobrecitos WHISKAS es 100% completo y balanceado. Además de ser sabroso y darle variedad a la dieta, aporta 1/3 del agua que tu gato necesita por día.</p>
                     <br>
                     Precio: 1000
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               </div>
            </div>
         </div>
      </div>
      <!----------------------------------------------------------------->
      <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">JUGUETES PARA TU MASCOTA</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="nueve">
                     <img src="{{asset('images/gallery-08.jpg')}} " alt="">
                  </div>
                  <div class="ocho">
                     <h1>Descripción</h1>
                     <p>Si hay algo que les encanta a los animales es jugar. Estos son animales muy sociables que necesitan estar en contacto con los demás y realizar actividades físicas como los juegos para gastar su energía y entrelazar vínculos con sus dueños. Esto es necesario ya que cada vez más nuestras mascotas pasan más tiempo solas en casa y esto puede causar grandes daños en su salud, propiciando la aparición de enfermedades como la obesidad y problemas de ansiedad.</p>
                     Precios:
                     <br>
                     Huesos: 19.000
                     <br>
                     Pelota: 13.500
                     <br>
                     Kong: 8900
                     <br>
                     Juguete de tira y afloja: 20.000
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               </div>
            </div>
         </div>
      </div>
      <!------------------------------------------------------------------------------------------>

   
   @endsection
</html>