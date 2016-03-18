@extends('layout.default')


@section('container__main')
<form method="post"  class="form-horizontal">

  {{ csrf_field() }}

  <label for="name">Nombre :</label>
  <input type="text" name="name" value="" id="code" >

  <input type="submit" name="name" value="Search" id="form">

</form>

<div id="price-total">
<label for="total"></label>
  <input type="tetx" name="total" id="input-total">
</div>

<div class="msg-alert-error">

</div>
<div class="contain-products">

</div>


<script src="{{ asset('css/jquery-1.12.1.min.js')}}" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {

  var total=0;
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
        if (! data.description1) {
          $('.msg-alert-error').html('<h2>No exist : '+$('#code').val()+'</h2>');



        } else {
          $('.contain-products').append("<div class='product'><section class='product-code'>"+data.code+"</section><section class='product-code'>"+data.description1+"</section><section class='product-code'>"+data.price+"</section></div>");
          total+=parseInt(data.code);
          $('#price-total').html('Subtotal : '+total);
        }
      })
      .fail(function(data) {
        console.log(data);
      });

  });

});
</script>

@stop
