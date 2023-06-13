<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
</head>
<body>
    <h1 class="text-center">Gobierno de El Salvador</h1>
    <h2 class="text-center">Banco Central de Reserva de El Salvador</h2>
    <p>FECHA {{date("d F Y", strtotime($project->created_at))}}</p>
    <div class="form-group">
        <strong>Nombre Proyecto:</strong>
        {{ $project->NombreProyecto }}
    </div>
    <div class="form-group">
        <strong>Fuente Fondos:</strong>
        {{ $project->fuenteFondos }}
    </div>
    <div class="form-group">
        <strong>Monto Planificado:</strong>
        {{ $project->MontoPlanificado }}
    </div>
    <div class="form-group">
        <strong>Monto Patrocinado:</strong>
        {{ $project->MontoPatrocinado }}
    </div>
    <div class="form-group">
        <strong>Monto Fondos Propios:</strong>
        {{ $project->MontoFondosPropios }}
    </div>

</body>
</html>