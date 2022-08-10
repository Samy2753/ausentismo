@extends('adminlte::page')
@section('title', 'Incapacidad')
@section('content_header')
<a href="{{route('administrador.absenteeism.pdf')}}" class="btn btn-primary">PDF</a>
<a href="{{route('administrador.absenteeism.create')}}" class="btn btn-primary">Crear incapacidad</a>
<h1>Gestion de incapacidad</h1>
@stop

@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="absenteeisms">
            <thead>
                <tr>
                    <th>Empleado</th>
                    <th>Tipo de incapacidad</th>
                    <th>Enfermedad</th>
                    <th>fecha inicio incapacidad</th>
                    <th>fecha finalizacion incapacidad</th>
                    <th>Clasificacion</th>
                </tr>
            </thead>
            <tbody>

                @php
                $cie_10s_idx->prepend('N/A');
                $arr_idx = $cie_10s_idx->toArray();
                $cie_10s->prepend('N/A');
                $arr= $cie_10s->toArray();
                @endphp
                @foreach ($absenteeisms as $absenteeism)
                @if (!empty($absenteeism->Illness) or $absenteeism->Illness !='N/A')
                @php
                $idx = array_search($absenteeism->Illness,$arr_idx);
                $nombre_enfermedad= $arr[$idx];
                @endphp
                @else
                @php
                $nombre_enfermedad='N/A';

                @endphp
                @endif

                        <tr>
                        <td>{{$absenteeism->NameEmployee}}</td>
                        <td>{{$listaIncapacidades[$absenteeism->Incapacity_type_id]}}</td>
                        <td>{{$nombre_enfermedad}}</td>
                        <td>{{$absenteeism->Start_date}}</td>
                        <td>{{$absenteeism->End_date}}</td>
                        <td>{{$absenteeism->Clasification}}</td>

                        <td width="10px"><a href="{{route('administrador.absenteeism.edit',$absenteeism)}}" class="btn btn-primary btn-sm">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('administrador.absenteeism.destroy',$absenteeism)}}" method="POST">
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
        $('#absenteeisms').DataTable({
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


