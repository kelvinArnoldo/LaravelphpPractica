@extends('layouts.app')

@section('title', 'Institución')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Detalles') }} Institución</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('institutions.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $institution->name }}
                        </div>
                        <div class="form-group">
                            <strong>Abreviatura:</strong>
                            {{ $institution->acronym }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $institution->activate }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
