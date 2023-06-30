@extends('layouts.app')

@section('template_title')
    Cuenta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('LISTADO DE LAS CUENTAS') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('imagenes.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                    {{ __('Volver') }}
                                </a>
                                <a href="{{ route('cuentas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id = "tabla" >
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>User</th>
										<th>Password</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Perfil Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cuentas as $cuenta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $cuenta->user }}</td>
											<td>{{ $cuenta->password }}</td>
											<td>{{ $cuenta->nombre }}</td>
											<td>{{ $cuenta->apellido }}</td>
											<td>{{ $cuenta->perfil_id }}</td>

                                            <td>
                                                <form action="{{ route('cuentas.destroy',$cuenta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cuentas.show',$cuenta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cuentas.edit',$cuenta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cuentas->links() !!}
            </div>
        </div>
    </div>
    <script>
        var tabla = document.querySelector("#tabla");
        var dataTable = new DataTable(tabla);
    </script>

@endsection
