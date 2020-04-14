@extends('layouts.app')

@section('title', 'Create Post')
@section('content')
<h1 class="text-center">Create Post</h1>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
<form method="POST" action="{{ route('posts.store')}}">
  @csrf
      <div class="row justify-content-center">
        <div class="col-sm-7">
          <div class="form-group">
            <label for="title">Título</label>
          <input  type="text" name="title" id="title" class="form-control" placeholder="Título" value="{{old('title')}}" autofocus>
          </div>
          <div class="form-group">
            <label for="content">Contenido</label>
          <textarea name="content" cols="30" rows="10" class="form-control" >{{ old('content') }}</textarea>
          </div>
        </div>
        <div class="col-sm-7 text-center">
          <button class="btn btn-primary btn-block" type="submit">Enviar</button>
        </div>
      </div>
    <form>
@endsection
