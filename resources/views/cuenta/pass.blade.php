@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Cuenta
@endsection

@section('content')
 
 <!-- Formulario -->
 <section div class="col-lg-8 bg-white">
    <h4>Inicio de Sesión</h4>
    <small>Proporcione sus credenciales para ingresar al Sistema</small>
    <div class="card">
        <div class="card-body">
            <form action="">
                <div class="mb-3">
                    <label for="usename" class="form-label">Nombre de Usuario</label>
                    <input type="text" id="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" id="password" class="form-control">
                </div>
                <div class="mb-3 text-end">
                    <a href="{{route('home.index')}}" class="btn btn-success">Iniciar Sesión</a>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection
<!-- / FIN Formulario -->