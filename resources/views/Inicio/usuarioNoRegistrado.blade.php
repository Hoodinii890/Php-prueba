@include('layouts/links')
<!DOCTYPE html>
<html>
<head>
	<title>Usuario no registrado</title>
</head>
<body>
<div style='font-size: 35px; text-align: center; color: #000;'>¡TIENES QUE INICIAR SESIÓN PARA PODER CONTINUAR!</div><br><h1 style='text-align: center; margin-top: 35%;' ><span class='resaltado' style='color: #19DE84; font-weight: bold; font-size: 50px;'>Firulays</span><span class='resaltado' style='color: #0F5780; font-weight: bold; font-size: 12px;'> S.A</span></h1><button style=' border-radius: 10px;background-color:#19DE84;margin:0 46.5%;'><a  href='{{route('login')}}' style='color:#fff; font-size: 20px; text-decoration: none;'>Ingresar</a></button>
</body>
</html>