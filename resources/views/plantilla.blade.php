
<!DOCTYPE html>
<html>
    <head>

        <title>@yield('titulo','Inicio - curso laravel')</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        
       <style type="text/css">
            .activo {
                color: red !important;
                text-decoration: none;
            };
        </style>
    </head>
    <body>

        @include('general/nav')
        <div class="container">
        @yield('contenido')
        </div>
     


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
       
    </body>
</html>