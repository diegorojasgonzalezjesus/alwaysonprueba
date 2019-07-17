$(document).ready(function(){
  $('#username').focus()

  $('#username').on('keyup', function(){
    var search = $('#username').val()
    $.ajax({
      type: 'POST',
      url: 'php/versaldo.php',
      data: {'username': username},
    })
    .done(function(resultado){
      $('#result').html(resultado)
    })
    .fail(function(){
      alert('Hubo un error :(')
    })
  })
})