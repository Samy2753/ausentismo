@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<h3>Editar Empleado</h3>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($employee,['route' => ['empleado.employees.update',$employee], 'method'=>'put']) !!}
            @include('empleado.employees.partials.form')

            {!! Form::submit('Editar empleado',['class' =>'btn btn-primary btn-md']) !!}
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
