@extends('layouts.app')

@section('template_title')
    Imagene
@endsection

@section('content')
    <div class="container-fluid" >
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('MENU DE ARTISTAS (IMAGENES A INGRESAR) ') }}
                            </span>

                             {{--<div class="float-right">
                                <a href="{{ route('imagenes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>--}}
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
                                        
										<th>Titulo</th>
										<th>Archivo</th>
										<th>Baneada</th>
										<th>Motivo Ban</th>
										<th>Cuenta User</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($imagenes as $imagene)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $imagene->titulo }}</td>

                                            <td>
                                                <img src="{{asset('storage').'/'.$imagene->archivo}}" width="100" alt="">
                                                {{--{{ $imagene->archivo }}--}}
                                                                                          
                                            </td>

											{{--<td>{{ $imagene->archivo }}</td>--}}
											<td>{{ $imagene->baneada }}</td>
											<td>{{ $imagene->motivo_ban }}</td>
											<td>{{ $imagene->cuenta_user }}</td>

                                            <td>
                                                <form action="{{ route('imagenes.destroy',$imagene->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('imagenes.show',$imagene->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('imagenes.edit',$imagene->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Subir Foto') }}</a>
                                                    {{--@csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>--}}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $imagenes->links() !!}
            </div>
        </div>
    </div>

    <script>
    var tabla = document.querySelector("#tabla");
    var dataTable = new DataTable(tabla);
    </script>

@endsection
