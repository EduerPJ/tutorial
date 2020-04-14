@extends('layouts.app')

@section('title', 'Post')


@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->content}}</p>
        <div class="nav-item"><a href="{{ route('comments.create', ['post' => $post]) }}">Comment</a></div>
        </div>
    </div>
</div>
@endsection    
