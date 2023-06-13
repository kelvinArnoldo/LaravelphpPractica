@extends('layouts.app')

@section('title', 'Proyecto')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Project</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('projects.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Institución:</strong>
                            {{ $project->institution_id }}
                        </div>
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
                            <strong>Montopatrocinado:</strong>
                            {{ $project->MontoPatrocinado }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Fondos Propios:</strong>
                            {{ $project->MontoFondosPropios }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $project->activate }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
