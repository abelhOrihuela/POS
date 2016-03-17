@extends('layout.default')

<form method="post"  class="form-horizontal">

  {{ csrf_field() }}
  <label for="name">Nombre :</label>
  <input type="text" name="name" value="" id="name" required>

  <label for="name">Descripcion :</label>
  <input type="text" name="description1" value="" required>

  <label for="name"> Descripcion 2:</label>
  <input type="text" name="description2" value="">

  <label for="name">Otro :</label>
  <input type="text" name="other" value="" >

  <label for="name">Codigo :</label>
  <input type="text" name="code" value="" id="codigo"required>

  <input type="submit" name="name" value="Guardar" id="form">

</form>
<script src="{{ asset('css/jquery-1.12.1.min.js')}}" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#form').click(function(event) {
    event.preventDefault();

    var formData = {
      'username'        : $('#codigo').val(),
      'url'        : $('#name').val(),
    };

    $.ajax({
      type    : 'POST', // define the type of HTTP verb we want to use (POST for our form)
      url     : '/product/new', // the url where we want to POST
      data    : formData, // our data object
      dataType  : 'json', // what type of data do we expect back from the server
      encode    : true
    })
      .done(function(data) {
        console.log(data);
        if ( ! data.success) {
          alert("Hola1");
        } else {
          alert("Hola1");
        }
      })
      .fail(function(data) {
        console.log(data);
      });

  });

});
</script>
