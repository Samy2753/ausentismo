@extends('adminlte::page')

@section('title', 'Incapacidad')

@section('content_header')
<h3>Crear incapacidad </h3>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'administrador.absenteeism.store']) !!}
                @include('administrador.absenteeism.form')

                {!! Form::submit('Registro de incapacidad',['class' =>'btn btn-primary btn-md']) !!}
                {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
