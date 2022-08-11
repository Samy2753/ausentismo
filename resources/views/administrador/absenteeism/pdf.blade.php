<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="{!! asset('js/api.js') !!}" async></script>
</head>
<body class="font-sans antialiased">
        <i class="fa fa-align-center" aria-hidden="true"><h2>Reporte de incapacidades</h2> </i>
    <table class="table table-striped" table-hover">
        <thead>
            <tr>

                <th>Empleado</th>
                <th>Tipo de incapacidad</th>
                <th>Enfermedad</th>
                <th>fecha inicio incapacidad</th>
                <th>fecha finalizacion incapacidad</th>
                <th>Clasificacion</th>
            </tr>
                @foreach ($absenteeisms as $absenteeism)

                <tr>
                    <td>{{$absenteeism->NameEmployee}}</td>
                    <td>{{$listaIncapacidades[$absenteeism->Incapacity_type_id]}}</td>
                    <td>{{$absenteeism->Illness}}</td>
                    <td>{{$absenteeism->Start_date}}</td>
                    <td>{{$absenteeism->End_date}}</td>
                    <td>{{$absenteeism->Clasification}}</td>
                </tr>
            @endforeach
        </thead>
    </table>
</body>
<style>
    *{
        text-align: center;
        border-top-style: solid;
    }

</style>
</html>
