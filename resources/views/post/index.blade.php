<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eduer post</title>
</head>
<body>
    <h1>Soy exitoso</h1>
    @foreach ($posts as $post)
       <h3>{{$post->title}}</h3>
    @endforeach
</body>
</html>