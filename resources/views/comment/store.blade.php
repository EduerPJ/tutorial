@extends('layouts.app')

@section('content')
<div class="container">
    <div class="alert alert-success">
        Comentario creado satisfactoriamente
    </div>
    <div class="card mb-2">
        <div class="card-body">
        <p class="card-text">{{$comment->content}}</p>
        </div>
        <div class="card-body">
            <div class="card md-3">
                <a href="{{ route('my-posts') }}" class="btn btn-primary " >Mis post</a>
            </div>
        </div>
    </div>
</div>
@endsection