@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body pb-0">
            <div>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div
                            class="collapse navbar-collapse d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
                            <div class="col-12 col-md-auto justify-content-center">
                                <div class="input-group">
                             
                                        <form action="{{route('pacientes.index')}}" method="GET">
                                            <input type="search" class="form-control" name="busqueda" value="{{$busqueda}}">
                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                                            </form>
                                                            
                                </div>
                            </div>

                            <div class="col-md-3 text-end">
                                <div class="btn-group rounded">
                                    <a href="{{ route('pacientes.create') }}">
                                        <button type="button" class="btn btn-success">Crear Paciente</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="table-responsive mx-2">
                <table class="table table-hover table-bordered">
                    <thead>
                                    <tr>
                                        
										<th>Id Paciente</th>
							            <th scope="col">Nombre</th>
							            <th scope="col">Apellido P</th>
							            <th scope="col">Apellido M</th>
							            <th scope="col">Rfc</th>
							            <th scope="col">Curp</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Celular</th>
							            <th scope="col">Fecha De Nacimiento</th>
							            <th scope="col">Calle</th>
							            <th scope="col">Num Int</th>
							            <th scope="col">Num Ext</th>
							            <th scope="col">Localidad</th>
							            <th scope="col">Municipio</th>
							            <th scope="col">Codigo Postal</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Id_usuario</th>
                                        <th scope="col" colspan="3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->id}}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->nombre}}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->apellido_p}}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->apellido_m}}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->rfc}}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->curp}}
                                                    </p>
                                                </div>
                                            </td>
                
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->telefono}}
                                                    </p>
                                                </div>
                                            </td>
                
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->celular}}
                                                    </p>
                                                </div>
                                            </td>
                
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->fecha_nacimiento}}
                                                    </p>
                                                </div>
                                            </td>
                
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->calle}}
                                                    </p>
                                                </div>
                                            </td>
                
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->num_int}}
                                                    </p>
                                                </div>
                                            </td>
                
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->num_ext}}
                                                    </p>
                                                </div>
                                            </td>
                
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->colonia}}
                                                    </p>
                                                </div>
                                            </td>
                
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->municipio}}
                                                    </p>
                                                </div>
                                            </td>
                
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->cp}}
                                                    </p>
                                                </div>
                                            </td>
                
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->estado}}
                                                    </p>
                                                </div>
                                            </td>
                
                                            <td class="p-0">
                                                <div class="p-3">
                                                    <p class="mb-0 text-capitalize">
                                                        {{$paciente->id_usuario}}
                                                    </p>
                                                </div>
                                            </td>

                                            <td>
                                                <form action="{{ route('pacientes.destroy',$paciente->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"> Eliminar</button>
                                                </form>
                                            </td>
                                            <td>
                                                    @csrf
                                                    <a class="btn btn-sm btn-success" href="{{ route('pacientes.edit',$paciente->id) }}"><i class="fa fa-fw fa-edit"><i>Editar</a>
                                            </td>
                                            <td>
                                                    @csrf
                                                    <a class="btn btn-sm btn-primary" href="{{ route('pacientes.show',$paciente->id) }}"><i class="fa fa-fw fa-eye"><i>Ver</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pacientes->appends(request()->query())->links() !!}  
            </div>
        </div>
    </div>
@endsection
