@extends('layouts.app')


@section('content')
<form method="POST" action="{{ route('comments.store')}}">
  @csrf
  <div class="row justify-content-center">
    <div class="col-sm-7">
      <div class="form-group">
        <h3>Haz tu comentario para ayudarnos a mejorar</h3>
                <label for="content">Comentario:</label>
            <textarea name="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror" >{{ old('content') }}</textarea>
                @error('content')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
           
        </div>
        <div class="col-sm-7 text-center">
          <button class="btn btn-primary btn-block" type="submit">Enviar</button>
        </div>
      </div>
    <form>
@endsection
