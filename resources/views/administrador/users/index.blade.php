@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<a href="{{route('administrador.users.create')}}" class="btn btn-secondary btn-sm float-rignt">Crear usuario</a>
@stop

@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="users">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th ></th>
                    <th ></th>
                </tr>
            </thead>
            <body>
                @foreach ( $users as $user )
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td width="10px"><a href="{{route('administrador.users.edit',$user)}}"class="btn btn-primary btm-sm">Editar</a></td>
                    <td width="10px">
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

@push('js')
<script>
    $(document).ready(function () {
        $('#users').DataTable({
            responsive:true,
            autoWidth:false,
            "language":{
                "lengthMenu":"Mostrar "+
            `<select class="custom-select custom-select-sm form-control form-control-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="-1">Todos</option>
                </select>`
                +" registros por página",
                "zeroRecords":"Nada encontrado",
                "info":"Mostrando la página _PAGE_ de _PAGES_",
                "search":"Buscar:",
                "paginate":{
                    'next':'Siguiente',
                    'previous':'Anterior'
                }
            }
        });
    });
</script>
@endpush


