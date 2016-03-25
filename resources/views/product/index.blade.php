<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example that shows off a blog page with a list of posts.">

  <title>Blog &ndash; Layout Examples &ndash; Pure</title>


  <script src="{{ asset('css/jquery-1.12.1.min.js')}}" charset="utf-8"></script>



  <link rel="stylesheet" href="{{ asset('css/pure-min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pos.css') }}">
  <!--[if lte IE 8]>

  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">

  <![endif]-->
  <!--[if gt IE 8]><!-->

  <link rel="stylesheet" href="{{ asset('css/grids-responsive-min.css') }}">

  <!--<![endif]-->
  <!--[if lte IE 8]>
  <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
  <![endif]-->
  <!--[if gt IE 8]><!-->
  <link rel="stylesheet" href=" {{asset('css/layouts/blog.css') }}">
  <!--<![endif]-->

</head>
<body>
  <div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
      <div class="header">



        <form method="post"  class="form-search">

          {{ csrf_field() }}

          <input type="text" name="name" value="" id="code" >

          <input type="submit" name="name" value="Search" id="form">

        </form>

        Total : $<div id="price-total">

        </div>
        Articulos: <div id="articulos-total">

        </div>
        <button class="button-success pure-button">Success Button</button>
  <button class="button-error pure-button">Error Button</button>
      </div>

    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
      <div>
        <!-- A wrapper for all the blog posts -->
        <div class="posts">
          <h1 class="content-subhead">Lonja Mercantil</h1>


        </div>
        <div class="container__main">





          <div class="msg-alert-error">
          </div>
          <div class="contain-products">

          </div>
          <script src="{{ asset('css/jquery-1.12.1.min.js')}}" charset="utf-8"></script>
          <script type="text/javascript">
          $(document).ready(function() {
            var total=0.0;
            var noArticulos=0;
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
                  if (! data.description) {
                    $('.msg-alert-error').html('<h2>No exist : '+$('#code').val()+'</h2>');
                  } else {
                    $('.contain-products').append("<div class='product'><section class='product-code'></section><section class='product-desc'>"+data.description+"</section><section class='product-code'> $ "+data.price+"</section></div>");
                    total+=parseFloat(data.price);
                    noArticulos++;
                    $('#price-total').html(total);
                    $('#articulos-total').html(noArticulos);
                  }
                })
                .fail(function(data) {
                  console.log(data);
                });
            });
          });
          </script>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
