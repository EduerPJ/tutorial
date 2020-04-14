@extends('layouts.app')

@section('title', 'Create comment')
@section('content')
<h1 class="text-center">Create Comment</h1>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
<form method="POST" action="{{ route('comments.store')}}">
  @csrf
      <div class="row justify-content-center">
        <div class="col-sm-7">         
          <div class="form-group">
            <label for="content">Contenido</label>
          <textarea name="content" cols="30" rows="10" class="form-control" autofocus >{{ old('content') }}</textarea>
          <input type="hidden" name="post_id" id="post_id" value="{{ $post_id }}">
          </div>
        </div>
        <div class="col-sm-7 text-center">
          <button class="btn btn-primary btn-block" type="submit">Enviar</button>
        </div>
      </div>
    <form>
@endsection
