<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=.con, initial-scale=1.0">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Estoy destinado a ser exitoso</h1>
    <hr>
    @include('_nav')

    <div class="container">
        @yield('content')
    </div>

    @section('sidebar')
        <h3>Sidebar</h3>
    @show

</body>
</html>