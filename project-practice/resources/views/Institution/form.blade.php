<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $institution->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Abreviatura') }}
            {{ Form::text('acronym', $institution->acronym, ['class' => 'form-control' . ($errors->has('acronym') ? ' is-invalid' : ''), 'placeholder' => 'Abreviatura']) }}
            {!! $errors->first('acronym', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activo') }}
            {{ Form::text('activate', $institution->activate, ['class' => 'form-control' . ($errors->has('activate') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('activate', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
</hr>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>