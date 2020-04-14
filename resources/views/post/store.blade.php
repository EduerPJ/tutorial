@extends('layouts.app')

@section('Post Created')
@section('content')

<div class="container">
    <div class="card mb-4">
        <div class="card-body">
        <p class="card-text">{{$post->title}}</p>
        <p class="card-text">{{$post->content}}</p>
        </div>
    </div>
</div>
@endsection