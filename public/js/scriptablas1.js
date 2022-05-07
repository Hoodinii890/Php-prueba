$(document).ready(function(){
  actualizarTablausuario();
});

function actualizarTablausuario(){
  $.ajax({
    type: 'GET',
    url: '../control/controlistacitas.php',
    dataType: 'html',
    success: function (data) {
      $('tbody').text("");
      $('tbody').append(data);
    }
  });  
}
function nombreuser(){
  $.ajax({
    type: 'GET',
    url: '../control/controlistacitas.php',
    dataType: 'html',
    success: function (data) {
      $('#nombreuser').text("hola");
    }
  });  
}

function eliminarUsuario(cod){
 var resultado = confirm("¿Seguro desea eliminar este usuario?");
 if (resultado = true){
  var parametros = {
                "codU" : cod
        };
  $.ajax({
          data:  parametros, //datos que se envian a traves de ajax
          url:   '../control/controleliminarusuarios.php', //archivo que recibe la peticion
          type:  'post', //método de envio
          success:  function (data) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  if (data==1) {
                    alert("Eliminado Corrrectamente");
                    location.reload();
                  }else{
                    alert("No fué posible eliminar");
                  }
          }
  });return true
} else {
  return false
}
}
function eliminarCita(cod){
 var resultado = confirm("¿Seguro desea eliminar la cita?");
 if (resultado = true){
  var parametros = {
                "codCitaU" : cod
        };
  $.ajax({
          data:  parametros, //datos que se envian a traves de ajax
          url:   '../control/controleliminarcitas.php', //archivo que recibe la peticion
          type:  'post', //método de envio
          success:  function (data) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  if (data==1) {
                    alert("Eliminada Corrrectamente");
                    location.reload();
                  }else{
                    alert("No fué posible eliminar");
                  }
          }
  });return true
} else {
  return false
}
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
function confirmar(cod){

    $.ajax({
      data: {"codUsuario": cod },
      url: '../control/controlcargaractivo.php',
      type: 'post',
      success: function (data) {
        $('#datosModificar').text("");
              $('#datosModificar').append(data);
      }
    });
$("#modificarUsuarios").modal("show");

}
function activo(){

  $.ajax({
          data: {"codUsuario": $("#codM").val(),
          "fecha": $("#fechaM").val(),
          "hora": $("#horaM").val(),
      "activo" : $("#activoM").val(),
      "NV" : $("#NVM").val()
                   }, //datos que se envian a traves de ajax
          url:   '../Control/controlmodificaractivo.php', //archivo que recibe la peticion
          type:  'post', //método de envio
          success:  function (data) {
                  
              alert(data);
              $('#modificarUsuario').modal("hide");
              actualizarTablaUsuarios();

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