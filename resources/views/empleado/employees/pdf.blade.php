<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="{!! asset('js/api.js') !!}" async></script>
<link rel="stylesheet" href={{ asset('css/estilospdfhorizontal.css') }}">
</head>
<body class="font-sans antialiased">
        <i class="fa fa-align-center" aria-hidden="true"><h2>Empleados</h2> </i>
        <table  class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Tipo Documento</th>
                        <th>Numero de Documento</th>
                        <th>Numero telefonico</th>
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
                        <td>{{$employee->Name}}</td>
                        <td>{{$employee->LastName}}</td>
                        <td>{{$employee->DocumentType}}</td>
                        <td>{{$employee->DocumentNumber}}</td>
                        <td>{{$employee->PhoneNumber }}</td>
                        <td>{{$employee->BaseSalary}}</td>
                        <td>{{$employee->SalaryDay}}</td>
                        <td>{{$employee->Position}}</td>
                        <td>{{$employee->Department}}</td>
                        <td>{{$employee->EPS}}</td>
                        <td>{{$employee->ARL}}</td>
                        <td>{{$employee->AFP}}</td>
                    </tr>

                    @endforeach

                </tbody>

                </table>
        <style>
            *{
                text-align: center;
                border-top-style: solid;
            }

        </style>
</body>

</html>
