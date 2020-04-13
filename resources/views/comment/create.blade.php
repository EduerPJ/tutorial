@extends('layouts.app')


@section('content')
<form method="POST" action="{{ route('comments.store')}}">
    <h3>Haz tu comentario para ayudarnos a mejorar</h3>
  @csrf
      <div class="row justify-content-center">
        <div class="col-sm-7">
            <div class="form-group">
                <label for="content">Comentario:</label>
            <textarea name="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror" aria-valuetext="{{old('content')}}"></textarea>
                @error('content')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="user_id">User Id</label>
                <input type="number" name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror " placeholder="User_id">
                @error('user_id')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
            <div class="form-group">
                <label for="post_id">Post Id</label>
                <input type="number" name="post_id" id="post_id" class="form-control @error('post_id') is-invalid @enderror " placeholder="Post_id">
                @error('post_id')
            <div class="aler alert-danger">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-7 text-center">
          <button {{-- disabled="disabled" --}} class="btn btn-primary btn-block" type="submit">Enviar</button>
        </div>
      </div>
    <form>
@endsection
