<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $imagene->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            
            {{ Form::label('archivo') }}
            {{$imagene->archivo}}
            {{ Form::file('archivo', ['class' => 'form-control' . ($errors->has('archivo') ? ' is-invalid' : ''), 'placeholder' => 'Archivo']) }}
            <img src="{{asset('storage').'/'.$imagene->archivo}}" with ="60" alt="">
            {!! $errors->first('archivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('baneada') }}
            {{ Form::text('baneada', $imagene->baneada, ['class' => 'form-control' . ($errors->has('baneada') ? ' is-invalid' : ''), 'placeholder' => 'Baneada']) }}
            {!! $errors->first('baneada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('motivo_ban') }}
            {{ Form::text('motivo_ban', $imagene->motivo_ban, ['class' => 'form-control' . ($errors->has('motivo_ban') ? ' is-invalid' : ''), 'placeholder' => 'Motivo Ban']) }}
            {!! $errors->first('motivo_ban', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
       <div class="form-group">
            {{ Form::label('cuenta_user') }}
            {{ Form::select('cuenta_user', $cuentas, $imagene->cuenta_user, ['class' => 'form-control' . ($errors->has('cuenta_user') ? ' is-invalid' : ''), 'placeholder' => 'Cuenta User']) }}
            {!! $errors->first('cuenta_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Grabar') }}</button>
    </div>
</div>