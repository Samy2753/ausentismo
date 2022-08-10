<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .titulo{
            text-align:center;
            font: 2rem;
            color: blue
        }

    </style>
</head>
<body>
        <div class=""><h2>Lista de incapacidades</h2></div>
            <table class="table table-striped" id="absenteeisms">
                <th>
                        <td>Empleado</td>
                        <td>Tipo de incapacidad</td>
                        <td>Enfermedad</td>
                        <td>fecha inicio incapacidad</td>
                        <td>fecha finalizacion incapacidad</td>
                        <td>Clasificacion</td>
                </th>
                <tbody>

                @foreach ($absenteeisms as $absenteeism)
                    {{$nombre_enfermedad = $absenteeisms}}
                    {{$absenteeisms = $absenteeism}}

                        <tr>
                        <td>{{$absenteeism->NameEmployee}}</td>
                        <td>{{$listaIncapacidades}}</td>
                        <td>{{$nombre_enfermedad}}</td>
                        <td>{{$absenteeism->Start_date}}</td>
                        <td>{{$absenteeism->End_date}}</td>
                        <td>{{$absenteeism->Clasification}}</td>

                        </tr>
                    @endforeach
            </tbody>
        </table>
</body>
</html>

