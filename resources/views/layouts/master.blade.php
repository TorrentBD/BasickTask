<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>
        <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
          <!-- main.css-->
          <link href="public/css/main.css" rel="stylesheet" >
        
        @yield('styles')
    </head>

    <body>
        <div class="container">
            @include('partials.header')
        </div>

        <div class="container">
        	@yield('content')
        </div>
        

      <!--bootstrap javascript-->
     <script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- Jquery-->
     <script src="public/jquery/jquery.min.js"></script>
     
  @yield('scripts')

    </body>
</html>