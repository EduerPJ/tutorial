<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    {{-- Importar bootstrap --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{-- Etiqueta de esta vista --}}
    <div id="app">
        {{-- indicar el nombre del componente --}}
        <example-component>
            
        </example-component>
    </div>
    {{-- Incluir vue en esta vista --}}
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>