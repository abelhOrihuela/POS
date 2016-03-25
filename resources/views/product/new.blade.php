@extends('layout.default')


@section('container__main')



<div class="msg-alert">

</div>



<form class="pure-form pure-form-stacked">
  {{ csrf_field() }}
    <fieldset>
        <legend>Crear registro</legend>

        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="first-name">Nombre</label>
                <input id="name" class="pure-u-23-24" type="text" >
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name">Descripción</label>
                <input id="description" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name">Costo</label>
                <input id="cost" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name">Precio</label>
                <input id="price" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name">Otro</label>
                <input id="other" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name">Codigo</label>
                <input id="code" class="pure-u-23-24" type="text">
            </div>

        </div>
        <input type="submit" class="pure-button pure-button-primary" value="Save" id="form">
    </fieldset>
</form>


<script src="{{ asset('css/jquery-1.12.1.min.js')}}" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#form').click(function(event) {
    event.preventDefault();

    var formData = {
      'name'        : $('#name').val(),
      'description'        : $('#description').val(),
      'cost'        : $('#cost').val(),
      'price'        : $('#price').val(),
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
