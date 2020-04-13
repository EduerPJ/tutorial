@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <div class="container">
            <div class="card mb-4">
                <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
                </div>
            </div>
        </div>
    @endforeach

    {{$posts->links()}} {{-- Show pag --}}

@endsection