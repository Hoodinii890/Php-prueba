$(document).ready(function(){
  buscar();
});

function buscar(){
  var texto = document.getElementById("caja_busqueda").value;
  var par = {
    "texto" : texto
  };
  $.ajax({
    data: par,
    url: '../control/controlistauser.php',
    type: "POST",
     success: function (response) {
      $('tbody').html(response);
    }
  })
}
function eliminarUsuario(codUsuario){
var parametros = {
                "codU" : codUsuario
        };
  $.ajax({
          data:  parametros, //datos que se envian a traves de ajax
          url:   '../control/controleliminarusuarios.php', //archivo que recibe la peticion
          type:  'post', //método de envio
          success:  function (data) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  if (data==1) {
                    alert("Eliminado Correctamente");
                    location.reload();
                  }else{
                    alert("No fué posible eliminar");
                  }
          }
  });
}
function ingresar(){
  $.ajax({
          url:   '../control/controliniciosession.php', //archivo que recibe la peticion
          type:  'post', //método de envio
          success:  function (data) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  if (data==0) {
                    alert("No fué posible ingresar");
                  }
          }
  });
}
function cargarUsuario(codUsuario){
    $.ajax({
      data:  { "codUsuario" : codUsuario},
      url: '../control/controlcargarusuario.php',
      type: 'post',
      success: function (data) {
        $('#datosModificar').text("");
              $('#datosModificar').append(data);
      }
    });
$("#modificarUsuarios").modal("show");

}
function cargarTexto(){

    $.ajax({
      data:  { "codImagen" : "1"},
      url: '../control/controlCargarProducto.php',
      type: 'post',
      success: function (data) {
        $('#datosModificarT').text("");
              $('#datosModificarT').append(data);
      }
    });
$("#modificarTexto").modal("show");

}
function modificarProducto(){
  $.ajax({
          data: {"codImagen": $("#codP").val(),
      "NProducto" : $("#proP").val(),
      "texto" : $("#textoP").val(),
      "precio" : $("#precioP").val()},
          url:   '../Control/controlModificarPro.php',
          type:  'post',
          success:  function (data) {
              alert(data);
              $('#modificarTexto').modal("hide");
              location.reload();
          }
  });
}
function modificarUsuario(){
  $.ajax({
          data: {"codUsuario": $("#codM").val(),
      "nombre" : $("#nombreM").val(),
      "contrasena" : $("#passwordM").val(),
      "email" : $("#emailM").val(),
      "tel" : $("#telM").val()
                   }, //datos que se envian a traves de ajax
          url:   '../Control/controlmodificarusuario.php', //archivo que recibe la peticion
          type:  'post', //método de envio
          success:  function (data) {
                  
              alert(data);
              $('#modificarUsuario').modal("hide");
              location.reload();

          }
  });
}

function cerrarSesion(){
  $.ajax({
      data:  {},
      url: '../control/ctrolCerrarSesion.php',
      type: 'post',
      success: function (data) {
        location.reload();
      }
    });
}
/*----------------------------------------------------------------------------------------*/
function select1(){
  document.getElementById('file1').click();
}
function NombreImg1(){
var nombreImg1 = document.getElementById('file1');
var srcImg = nombreImg1.value;
var ext = /(.jpg|.png)$/i;
if (!ext.exec(srcImg)) {
  alert('Asegurate de haber seleccionado un archivo JPG o PNG');
  nombreImg1.value='';
  return false;
}else{
   $.ajax({
      data:  {"codImagen" : "1", "nombreImg" : nombreImg1.value.substr(12)},
      url: '../control/controlCargarImagen1.php',
      type: 'post',
      success: function (data) {
        location.reload();
      }
    });
}
}
$(document).ready(function(){
  Cargar1();
});

function Cargar1(){
 $.ajax({
    type: 'GET',
    url: '../control/controlistaImagen1.php',
    dataType: 'html',
    success: function (data) {
      $('#cargar1').append(data);
    }
  });
}
$(document).ready(function(){
  cargarProductos1();
});

function cargarProductos1(){
   $.ajax({
    type: 'GET',
    url: '../control/controlistaproductos1.php',
    dataType: 'html',
    success: function (data) {
      $('#producto1').text("");
      $('#producto1').append(data);
    }
  });
}

/*----------------------------------------------------------------------------------------*/
function alerta(){
    alert('Mira que estás guap@ hoy XD');
}