@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <div class="container">
            <div class="card mb-4">
                <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
                <a href="{{ route('posts.show', ['post' => $post]) }}" class="btn btn-primary" >Read more</a> {{-- TODO: Ver más info del post --}}
                <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-primary ml-2" >Post Edit</a> 
                @method('DELETE')
                @csrf
                <button class="btn btn-danger ml-2">Delete</button>
                </div>
            </div>
        </div>
    @endforeach

    {{$posts->links()}} {{-- Show pag --}}

@endsection