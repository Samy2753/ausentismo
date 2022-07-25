@extends('adminlte::page')

@section('title', 'Empleados')
@section('content_header')
<h3>Gestión de usuarios</h3>
<a href="{{route('empleado.employees.create')}}" class="btn btn-primary">Crear empleado</a>
@stop

@section('content')
@include('sweetalert::alert')
    <div class="card">
        <div class="card-body">
           <table class="table table-striped" id="employees">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tipo Documento</th>
                    <th>Numero de Documento</th>
                    <th>Salario Base</th>
                    <th>Salario día</th>
                    <th>Cargo</th>
                    <th>Area</th>
                    <th>EPS</th>
                    <th>ARL</th>
                    <th>AFD </th>
                    <th> </th>
                    <th> </th>

                </tr>

           </thead>
            <tbody>

                @foreach ($employees as $employee)
                <tr>

                    <td>{{$employee->FirstName}}</td>
                    <td>{{$employee->LastName}}</td>
                    <td>{{$employee->DocumentType}}</td>
                    <td>{{$employee->DocumentNumber}}</td>
                    <td>{{$employee->BaseSalary}}</td>
                    <td>{{$employee->SalaryDay}}</td>
                    <td>{{$employee->Position}}</td>
                    <td>{{$employee->Department}}</td>
                    <td>{{$employee->EPS}}</td>
                    <td>{{$employee->ARL}}</td>
                    <td>{{$employee->AFP}}</td>


                    <td><a href="{{route('empleado.employees.edit', $employee)}}" class="btn btn-primary">Editar</a></td>
                    <td>
                        <form action="{{route('empleado.employees.destroy', $employee)}}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger btn-md" type="submit">Eliminar</button>
                        </form>


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

@section('js')
    <script> console.log('Hi!'); </script>
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
