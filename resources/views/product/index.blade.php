@extends('layout.default')


@section('container__main')



<div class="msg-alert">

</div>

<form method="post"  class="form-horizontal">

  {{ csrf_field() }}

  <label for="name">Nombre :</label>
  <input type="text" name="name" value="" id="code" >

  <input type="submit" name="name" value="Search" id="form">

</form>
<script src="{{ asset('css/jquery-1.12.1.min.js')}}" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#form').click(function(event) {
    event.preventDefault();

    var formData = {
      'code'        : $('#code').val()
    };

    $.ajax({
      type    : 'POST', // define the type of HTTP verb we want to use (POST for our form)
      url     : '/product/search', // the url where we want to POST
      data    : formData, // our data object
      dataType  : 'json', // what type of data do we expect back from the server
      encode    : true
    })
      .done(function(data) {
        console.log(data);
        if ( ! data.product) {
          $('.msg-alert').append(data.description1);
          $('.msg-alert').append('<h1>Hola</h1>');
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
