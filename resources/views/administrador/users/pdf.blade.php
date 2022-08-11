<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="{!! asset('js/api.js') !!}" async></script>
</head>
<body class="font-sans antialiased">
        <i class="fa fa-align-center" aria-hidden="true"><h2>Reporte de usuarios</h2> </i>
        <table style="margin-left:auto;margin-right:auto;" class="table table-striped" id="users">

            </div>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>


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
