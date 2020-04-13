@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($comments as $comment)
    <div class="card mb-4">
        <div class="card-body">
        <h5 class="card-title">{{$comment->content}}</h5>
        </div>
    </div>
    @endforeach
    {{$comments->links()}}
</div>
    
@endsection