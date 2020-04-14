@extends('layouts.app')

@section('title', 'Comments')
@section('content')
<div class="container">
    @foreach ($comments as $comment)
    <div class="card mb-4">
        <div class="card-body">
        <h5 class="card-text">{{$comment->content}}</h5>
        <a href="{{ route('comments.show', ['comment' => $comment]) }}" class="btn btn-primary">Read more</a>
        </div>
    </div>
    @endforeach
    {{$comments->links()}}
</div>
    
@endsection
