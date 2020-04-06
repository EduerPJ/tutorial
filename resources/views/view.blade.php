@extends('welcome')

@section('title', 'Vista Blade')
    
@section('content')
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, dolorum. Illo mollitia molestias, blanditiis iure omnis consequatur vero beatae, nihil, exercitationem atque placeat distinctio facilis hic officia. Corrupti, debitis temporibus.</p>
@endsection


{{-- Reemplaza todo el contenido --}}
@section('sidebar')
{{-- Para heredar el contenido de la plantilla blade padre --}}
    @parent
    <h3>Show sidebar</h3>
@endsection