@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<div class="card text-center">
    <div class="card-header d-flex justify-content-end">
        <p>Views {{ $counter }}</p>
    </div>
    
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->content}}</p>
        <a href="{{ route('comments.create', ['post' => $post]) }}" class="btn btn-primary">Comment</a>
    </div>
    <div class="card-footer text-muted">
        @foreach ($post->comments as $comment)
        <div class="card-body">
            <p class="card-text">{{ $comment->content }}</p>
            <hr>
        </div>
        @endforeach
    </div>
</div>
@endsection