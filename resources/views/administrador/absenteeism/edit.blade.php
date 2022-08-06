@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<h3>Editar Usuario</h3>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($absenteeism,['route' => ['administrador.absenteeism.update',$absenteeism], 'method'=>'put']) !!}
            @include('administrador.absenteeism.index')

            {!! Form::submit('Editar usuario',['class' =>'btn btn-primary btn-md']) !!}
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
