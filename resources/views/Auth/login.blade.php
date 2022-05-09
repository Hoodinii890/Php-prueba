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
         @if (session('error'))
            <h2 class="alert alert-danger">{{session('error')}}</h2>
         @endif
         @error('message')
            <h2 class="alert alert-info"></h2>
         @enderror
         @if (session('success'))
            <h2 class="alert alert-success">{{session('success')}}</h2>
         @endif
         @foreach ($errors->all() as $message)
            <h2 class="alert alert-warning">{{$message}}</h2>
         @endforeach
  	    	<form class="col-12" action="{{route('Authentication')}}" method="post" autocomplete="off">
            @csrf
  	    		<div class="form-group" id="mail-group">
  	    			<input style="border-radius: 5px;" type="email" id="email" name="email" placeholder="E-mail" required>
  	    		</div>
  	    		<div class="form-group">
  	    			<input style="border-radius: 5px;" type="password" id="passwordinput" name="passwordinput" placeholder="Contraseña" required>
  	    		</div>
  	    		<div class="hk">
                  <h5 class="text-right">¿No tienes una cuenta?</h5>
  	    		<button type="submit" class="butt1 btn btn-info"><i class="fas fa-sign-in-alt"></i>  ingresar</button>

  	    		<button  class="butt2 btn btn-danger"><i class="fas fa-user-check"></i><a data-toggle="modal" data-target="#exampleModal">Registrarse</a></button>
  	    		</div>
                 <br>
  	    		<ul><li><a href="" style="color: #000;font-weight: 600;text-shadow:yellow;">¿Olvidaste la contraseña?</a></li></ul>
  	    		<br>
  	    	</form>
  	    </div>
     </div>
    </div> 
   </div>

           
</body>
</html>

<style>
   .form-group input{
      border: none;
      border-radius: 4px;
      box-shadow: 0 7px 15px rgba(0, 0, 0, 0.18);
      font-size: 16px;
      line-height: 24px;
      outline: transparent;
      padding: 11px 16px;
      transition: border .3s, box-shadow .3s;
      width: 70%;
   }
   .form-group input::placeholder{
      color: #000;
      font-weight: 400;
      font-family: 'Arial';
   }
   .modal-content,
   .modal-content button{
      box-shadow: 0 7px 15px rgba(0, 0, 0, 0.18);
   }
</style>
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
 
               <form class="form-horizontal" action="{{route('Registro')}}" method="post" autocomplete="off">
                  @csrf
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
                           <option value="0">Mujer</option>
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
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="pass">Confirmar Contraseña</label>
                     <div class="col-md-8">
                        <input id="password" name="password1" type="password" placeholder="************" class="form-control input-md" required="">
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
