<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comments</title>
</head>
<body>
    <h1>Tengo propósitos poderosos que cambiaran mi vida</h1>
    @foreach ($comments as $comment)
    <p>{{$comment->content}}</p>
    @endforeach
</body>
</html> 