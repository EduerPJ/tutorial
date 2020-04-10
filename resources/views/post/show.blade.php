<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Post</title>
</head>
<body>
    <h1>Estoy destinado a ser exitoso</h1>
    <hr>
<h2>
    @foreach ($p as $post)
        <h2>
            {{$post->title}}
        </h2>
        <p>
            {{$post->content}}
            <br>
            {{$post->id}} | 
            {{$post->user_id}}
        </p>
    @endforeach
</h2>
</body>
</html>