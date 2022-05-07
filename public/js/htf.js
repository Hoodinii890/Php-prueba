$(document).ready(function(){
  usuarioj();
});

function usuarioj(){
  $.ajax({
    type: 'GET',
    url: '../control/controliniciosession.php',
    dataType: 'html',
    success: function (data) {
      $('h6').text("");
      $('h6').append(data);
    }
  });  
}