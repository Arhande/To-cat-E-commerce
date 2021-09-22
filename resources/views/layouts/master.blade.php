<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Home | To-Cat Store</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="./style/main.css" rel="stylesheet" />
    <link rel="shortcut icon" href="./images/logokucingbulet.ico" />
    @stack('styles')
  </head>

  <body>
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
    

    @stack('scripts')
    

    <!-- Bootstrap core JavaScript -->
    <script src="./vendor/jquery/jquery.slim.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./script/navbar.scroll.js"></script>
  </body>
</html>
