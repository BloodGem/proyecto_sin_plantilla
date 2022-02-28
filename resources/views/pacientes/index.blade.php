
@extends('layouts.app')

@section('template_title')
    Paciente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Paciente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pacientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
										<th>Id Paciente</th>
										<th>Nombre</th>
										<th>Apellido P</th>
										<th>Apellido M</th>
										<th>Rfc</th>
										<th>Curp</th>
										<th>Fecha De Nacimiento</th>
										<th>Calle</th>
										<th>Num Int</th>
										<th>Num Ext</th>
										<th>Localidad</th>
										<th>Municipio</th>
										<th>Codigo Postal</th>
										<th>Correo Electronico</th>
										<th>Contraseña</th>
										<th>Estatus</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            
											<td>{{ $paciente->id }}</td>
											<td>{{ $paciente->nombre }}</td>
											<td>{{ $paciente->apellido_p }}</td>
											<td>{{ $paciente->apellido_m }}</td>
											<td>{{ $paciente->rfc }}</td>
											<td>{{ $paciente->curp }}</td>
											<td>{{ $paciente->fecha_de_nacimiento }}</td>
											<td>{{ $paciente->calle }}</td>
											<td>{{ $paciente->num_int }}</td>
											<td>{{ $paciente->num_ext }}</td>
											<td>{{ $paciente->localidad }}</td>
											<td>{{ $paciente->municipio }}</td>
											<td>{{ $paciente->codigo_postal }}</td>
											<td>{{ $paciente->correo_electronico }}</td>
											<td>{{ $paciente->contraseña }}</td>
											<td>{{ $paciente->estatus }}</td>

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
