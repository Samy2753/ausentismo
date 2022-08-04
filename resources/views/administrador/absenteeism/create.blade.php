@extends('adminlte::page')

@section('title', 'absenteeism')

@section('content_header')
<h3>Crear incapacidad</h3>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'administrador.absenteeism.create']) !!}
                @include('administrador.absenteeism.create')


    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
