@extends('layouts.app')

@section('template_title')
    {{ $imagene->name ?? "{{ __('Show') Imagene" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Imagene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('imagenes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $imagene->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Archivo:</strong>
                            {{ $imagene->archivo }}
                        </div>
                        <div class="form-group">
                            <strong>Baneada:</strong>
                            {{ $imagene->baneada }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo Ban:</strong>
                            {{ $imagene->motivo_ban }}
                        </div>
                        <div class="form-group">
                            <strong>Cuenta User:</strong>
                            {{ $imagene->cuenta_user }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
