@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
        <p class="card-text">{{$comment->content}}</p>
        </div>
    </div>
</div>
@endsection