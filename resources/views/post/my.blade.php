@extends('layouts.app')

@section('title', 'My Posts')
@section('content')

@if (Session::has('message')) {{-- TODO: Policy --}}
<div class="container alert alert-success">
    {{Session::get('message')}}
</div>

    
@endif


@foreach ($posts as $post)
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Post</h3>
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->content}}</p>
            <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-primary ml2">Edit</a>
            <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        
    </div>
</div>
@if ($post->comments)
<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <a href="{{ route('comments.create', ['post' => $post]) }}" class="btn btn-primary" >Comment</a>
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
@endif
</div>
<hr>
@endforeach
@endsection