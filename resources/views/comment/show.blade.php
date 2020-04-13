@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
        <h5 class="card-title">{{$comment->content}}</h5>
        </div>
    </div>
</div>
@endsection
