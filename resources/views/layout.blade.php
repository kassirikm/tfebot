<!--
/* Main template file
   All the other view files will extend this layout.blade.php file. */
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel 6 CRUD Example</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        @include('includes.navbar')
        <div class="jumbotron">
            <h1>Jumbotron</h1>
            <p class="lead">Lorem ipsum</p>
            <a class="btn btn-lg btn-primary" href="/docs/4.4/components/navbar/" role="button">View navbar docs &raquo;</a>
        </div>
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    </body>
</html>


