@include('layouts/links')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Site Metas -->
      <title>Firulays S.A Ingreso</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
</head>
<body style="background-color: #fff">
    <script>        
        $(document).ready(function(){
            hola();
        });
        function hola(){
            alert('BIENVENIDO A NUESTRA PAGINA FIRULAYS S.A');
        }
    </script>
	<br><br>
	<h1 class="text-center"><span class="resaltado" style="color: #19DE84; font-weight: bold; font-size:80px;">Firulays</span><span class="resaltado" style="color: #0F5780; font-weight: bold;"> S.A</span></h1>
	<br><br>
   <div class="modal-dialog text-center">
   	<div class="modal-content">
     <div class="com-sm-8">
  	    <div class="log6">
  	    	<div class="col-12">
  	    		<img style="margin-top: -50px; margin-bottom: 35px;" src="{{asset('images/log.png')}} " width="100" height="100">
  	    	</div>

  	    	<form class="col-12" action="../control/controliniciosession.php" method="post" autocomplete="off">

  	    		<div class="form-group" id="mail-group">
  	    			<input style="border-radius: 5px;" type="email" id="email" name="email" placeholder="E-mail" >
  	    		</div>
  	    		<div class="form-group">
  	    			<input style="border-radius: 5px;" type="password" id="passwordinput" name="passwordinput" placeholder="Contraseña">
  	    		</div>
  	    		<div class="hk">
                  <h5 class="text-right">¿No tienes una cuenta?</h5>
  	    		<button type="submit" class="butt1 btn btn-info"><i class="fas fa-sign-in-alt"></i>  ingresar</button>

  	    		<button  class="butt2 btn btn-danger"><i class="fas fa-user-check"></i><a data-toggle="modal" data-target="#exampleModal">Registrarse</a></button>
  	    		</div>
                   <br>
  	    		<select id="rol" name="rol" class="btn btn-warning">
  	    			<option value="1">Cliente</option>
  	    			<option value="2">Admin</option>
  	    		</select>
                 <br><br>
  	    		<ul><li><a href="" style="color: #000;">!Olvide mi contraseña¡</a></li></ul>
  	    		<br>
  	    	</form>
  	    </div>
     </div>
    </div> 
   </div>

           
</body>
</html>
<!--<li><a  class="nav-link" data-toggle="modal" data-target="#exampleModal">ingreso/Registro</a></li>-->



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
<!-- formulario registro -->
 
               <form class="form-horizontal" action="../control/controlregistro1.php" method="post" autocomplete="off">
                  <!-- Text input-->
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="textinput">Nombres y Apellidos</label>  
                     <div class="col-md-8">
                        <input id="nombre" name="nombre" type="text" placeholder="Juan Cardona" class="form-control input-md" required="">
                     </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="cambio">E-Mail</label>  
                     <div class="col-md-8">
                        <input id="email" name="email" type="email" placeholder="Ejemplo@gmail.com" class="form-control input-md" required="">
                     </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="textinput">Edad</label>  
                     <div class="col-md-8">
                        <input id="edad" name="edad" type="number" placeholder="28" class="form-control input-md" required="">
                     </div>
                  </div>
                  <!-- Select Basic -->
                  <div class="form-group">
                     <label class="col-md-4 control-label" name="sex" for="">Sexo</label>
                     <div class="col-md-8">
                        <select id="sex" name="sex" class="form-control">
                           <option value="1">Hombre</option>
                           <option value="2">Mujer</option>
                        </select>
                     </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="textinput">Telefono/Celular</label>  
                     <div class="col-md-8">
                        <input id="tel" name="tel" type="tel" placeholder="+573002903032" class="form-control input-md" required="">
                     </div>
                  </div>
                  <!-- Password input-->
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="pass">Contraseña</label>
                     <div class="col-md-8">
                        <input id="password" name="password" type="password" placeholder="************" class="form-control input-md" required="">
                     </div>
                  </div>
                  </fieldset>
               <div class="boton">
                        <button type="submit" name="submit" class="btn btn-info">Registrarse</button>
                     </div>
               
                  <br><br>

                  </form>
               </div>
     </div>
  </div>
</div>
