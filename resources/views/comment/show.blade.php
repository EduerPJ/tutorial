<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Comment</title>
</head>
<body>
    <h1>No renuncies, sufre ahora y vive el resto de tu vida como un campeón.</h1>
    <h2>
        <p>
            {{$comment->content}}
        </p>
        <p>
            {{$comment->post->title}}
        </p>
    </h2>
</body>
</html>