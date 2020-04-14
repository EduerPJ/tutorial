@extends('layouts.app')

@section('title', 'Post')


@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Post</h3>
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->content}}</p>
            <a href="{{ route('comments.create', ['post' => $post]) }}" class="btn btn-primary" >Comment</a>
        </div>

    </div>
</div>
<div class="container">
    <div class="card mb-3">
            <div class="card-body">
                <h6 class="card-title">Comentarios</h6>
                <hr>
            </div>
        @foreach ($post->comments as $comment)
        <div class="card-body">
            <p class="card-text">{{ $comment->content }}</p>
            <hr>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection
