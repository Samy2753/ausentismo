@extends('adminlte::page')

@section('title', 'Usuarios')
@section('content_header')
<h3>Reporte de usuarios</h3>
<a href="{{route('administrador.users.pdf')}}" class="btn btn-primary">PDF</a>
<a href="{{route('administrador.users.create')}}" class="btn btn-primary">Crear usuario</a>

@stop

@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="users">
            {{-- New User Modal --}}
            <div class="modal fade" id="userModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="userModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userModalLabel">Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $roleName)

                        @endforeach
                    @endif
                    <td>{{$roleName}}</td>
                        <td width="10px"><a href="{{route('administrador.users.edit',$user)}}" class="btn btn-primary btn-sm">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('administrador.users.destroy',$user)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
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


