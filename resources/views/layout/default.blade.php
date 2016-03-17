

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example that shows off a blog page with a list of posts.">

  <title>Blog &ndash; Layout Examples &ndash; Pure</title>


  <script src="{{ asset('css/jquery-1.12.1.min.js')}}" charset="utf-8"></script>



  <link rel="stylesheet" href="{{ asset('css/pure-min.css') }}">
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
        <h1 class="brand-title">Charly</h1>
        <h2 class="brand-tagline">Vinos, abarrotes y todo lo que buscas</h2>

        <nav class="nav">
          <ul class="nav-list">
            <li class="nav-item">
              <a class="pure-button" href="#">Hidalgo #29</a>
            </li>

          </ul>
        </nav>
      </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
      <div>
        <!-- A wrapper for all the blog posts -->
        <div class="posts">
          <h1 class="content-subhead">Lonja Mercantil</h1>


        </div>
        <div class="container__main">
          @yield('container__main')
        </div>
        <div class="footer">
          <div class="pure-menu pure-menu-horizontal">
            <ul>
              <li class="pure-menu-item"><a href="http://purecss.io/" class="pure-menu-link">Admin</a></li>
              <li class="pure-menu-item"><a href="http://twitter.com/yuilibrary/" class="pure-menu-link">Twitter</a></li>
              <li class="pure-menu-item"><a href="http://github.com/yahoo/pure/" class="pure-menu-link">GitHub</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
