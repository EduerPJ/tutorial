@extends('layouts._main')

@section('content')
    <h3>Este es su comentario, creado correctamente</h3>
    <p>
        {{$comment->content}}
    </p>
@endsection