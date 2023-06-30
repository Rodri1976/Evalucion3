@extends('layouts.app')

@section('template_title')
    Perfile
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('LISTADO DE LOS PERFILES') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('imagenes.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                    {{ __('Volver') }}
                                </a>
                                <a href="{{ route('perfiles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover" id = "tabla">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($perfiles as $perfile)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $perfile->nombre }}</td>

                                            <td>
                                                <form action="{{ route('perfiles.destroy',$perfile->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('perfiles.show',$perfile->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('perfiles.edit',$perfile->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $perfiles->links() !!}
            </div>
        </div>
    </div>
    <script>
        var tabla = document.querySelector("#tabla");
        var dataTable = new DataTable(tabla);
    </script>

@endsection
