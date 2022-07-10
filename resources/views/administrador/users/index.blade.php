@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<a href="{{route('administrador.users.create')}}" class="btn btn-secondary btn-sm float-rignt">Crear usuario</a>
@stop

@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th colspan='2'></th>
                </tr>
            </thead>
            <body>
                @foreach ( $users as $user )
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('administrador.users.edit',$user)}}"class="btn btn-primary btm-sm">Editar</a></td>
                    <td>
                        <form action="{{route('administrador.users.destroy',$user->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </body>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
