<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Report</title>
    <style>
        body{margin: 20px; padding: 5px;}
        table, th, td {border: 1px solid #B5B2B2;
            border-collapse: collapse;}
        th{background: #e9e9e9; text-align: center;}
        hr{height:100vh; width:.5vw; border-width:0;
            color:#000; background-color:#000;}
        
    </style>
</head>
<body>
    <h1 class="text-center">Gobierno de El Salvador</h1>
    <h2 class="text-center">{{$institutions->name}}</h2>
    <hr>
    <table>
        <thead>
            <th><strong>Nombre Proyecto</strong></th>
            <th> <strong>Fuente Fondos</strong></th>
            <th><strong>Monto Planificado</strong></th>
            <th><strong>Monto Patrocinado</strong></th>
            <th><strong>Monto Fondos Propios</strong></th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $project->NombreProyecto }}</td>
                <td>{{ $project->fuenteFondos }}</td>
                <td>{{ $project->MontoPlanificado }}</td>
                <td>{{ $project->MontoPatrocinado }}</td>
                <td>{{ $project->MontoFondosPropios }}</td>
            </tr>

    </table>
    <footer style="text-align: right">
        <div>
            <strong>Creado por: Kelvin Arnoldo Rivas</strong>
        </div>
        <div>
            <strong>Fecha de Reporte: {{date("d F Y", strtotime($project->created_at))}}</strong>
        </div>
    </fotter>
</body>
</html>