@extends('layouts.app')

@section('title', 'Post')

@section('content')
<div class="card mb-4">
    <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->content}}</p>
    </div>
</div>
@endsection