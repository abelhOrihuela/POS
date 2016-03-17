@extends('layout.default')


@section('container__main')



<div class="msg-alert">

</div>

<form method="post"  class="form-horizontal">

  {{ csrf_field() }}

  <label for="name">Nombre :</label>
  <input type="text" name="name" value="" id="name" >

  <label for="name">Descripcion :</label>
  <input type="text" name="description1" value="" id="description1" >

  <label for="name"> Descripcion 2:</label>
  <input type="text" name="description2" value="" id="description2">

  <label for="name">Otro :</label>
  <input type="text" name="other" value="" id="other" >

  <label for="name">Codigo :</label>
  <input type="text" name="code" value="" id="code" required>

  <input type="submit" name="name" value="Guardar" id="form">

</form>
<script src="{{ asset('css/jquery-1.12.1.min.js')}}" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#form').click(function(event) {
    event.preventDefault();

    var formData = {
      'name'        : $('#name').val(),
      'description1'        : $('#description1').val(),
      'description2'        : $('#description2').val(),
      'other'        : $('#other').val(),
      'code'        : $('#code').val()
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
          $('.msg-alert').append(" "+ data.ok +" ");
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

@stop
