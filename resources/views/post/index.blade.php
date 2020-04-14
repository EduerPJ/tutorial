@extends('layouts.app')

@section('title', 'Posts')
@section('content')
    @foreach ($posts as $post)
        <div class="container">
            <div class="card mb-4">
                <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
                <a href="{{ route('posts.show', ['post' => $post]) }}" class="btn btn-primary" >Read more</a> {{-- TODO: Ver más info del post --}}
                </div>
            </div>
        </div>
    @endforeach

    {{$posts->links()}} {{-- Show pag --}}

@endsection