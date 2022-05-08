<!DOCTYPE html>
<html>
<head>
      <!-- Site Icons -->
      <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
      <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}} ">
      <!-- Pogo Slider CSS -->
      <link rel="stylesheet" href="{{asset('css/pogo-slider.min.css')}} ">
      <!-- Site CSS -->
      <link rel="stylesheet" href="{{asset('css/style.css')}} ">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}} ">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/custom.css')}} ">
      <link rel="stylesheet" href="{{asset('css/sb-admin-2.min')}} ">
      <link rel="stylesheet"  href="https://use.fontawesome.com/release/v5.0.8/css/solid.css">
      <script src="https://use.fontawesome.com/release/v5.0.7/js/all.js"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      @yield('head')
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    @yield('body')
    <script src="{{asset('js/jquery.min.js')}} "></script>
    <script src="{{asset('js/bootstrap.min.js')}} "></script>
    <script src="{{asset('js/popper.min.js')}} "></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}} "></script>
    <script src="{{asset('js/jquery.pogo-slider.min.js')}} "></script> 
    <script src="{{asset('js/slider-index.js')}} "></script>
    <script src="{{asset('js/smoothscroll.js')}} "></script>
    <script src="{{asset('js/TweenMax.min.js')}} "></script>
    <script src="{{asset('js/main.js')}} "></script>
    <script src="{{asset('js/owl.carousel.min.js')}} "></script>
    <script src="{{asset('js/form-validator.min.js')}} "></script>
    <script src="{{asset('js/contact-form-script.js')}} "></script>
    <script src="{{asset('js/isotope.min.js')}} "></script> 
    <script src="{{asset('js/images-loded.min.js')}} "></script>  
    <script src="{{asset('js/custom.js')}} "></script>
    <script src="https://kit.fontawesome.com/1f45d73677.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/scriptablas.js')}} "></script>
</body>
</html>