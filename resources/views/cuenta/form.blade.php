<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user') }}
            {{ Form::text('user', $cuenta->user, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''), 'placeholder' => 'User']) }}
            {!! $errors->first('user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::text('password', $cuenta->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>  
        <br>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cuenta->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $cuenta->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{--<div class="form-group">
            {{ Form::label('perfil_id') }}
            {{ Form::text('perfil_id', $cuenta->perfil_id, ['class' => 'form-control' . ($errors->has('perfil_id') ? ' is-invalid' : ''), 'placeholder' => 'Perfil Id']) }}
            {!! $errors->first('perfil_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>--}}
        <br>
        <div class="form-group">
            {{ Form::label('perfil_id') }}
            {{ Form::select('perfil_id', $perfiles , $cuenta->perfil_id, ['class' => 'form-control' . ($errors->has('perfil_id') ? ' is-invalid' : ''), 'placeholder' => 'Perfil Id']) }}
            {!! $errors->first('perfil_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>