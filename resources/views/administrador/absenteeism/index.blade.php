@extends('adminlte::page')
@section('title', 'Incapacidad')
@section('content_header')
<a href="{{route('administrador.absenteeism.create')}}" class="btn btn-primary">Crear incapacidad</a>
<h1>Gestion de incapacidad</h1>
@stop

@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="users">
            <thead>
                <tr>
                    <th>Empleado</th>
                    <th>Incapacidad</th>
                    <th>fecha inicio incapacidad</th>
                    <th>fecha finalizacion incapacidad</th>
                    <th>Tipo de  incapacidad</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

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


