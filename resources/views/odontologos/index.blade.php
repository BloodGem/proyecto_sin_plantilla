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
                             
                                        <form action="{{route('odontologos.index')}}" method="GET">
                                            <input type="search" class="form-control" name="busqueda" value="{{$busqueda}}">
                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                                            </form>
                                                            
                                </div>
                            </div>

                            <div class="col-md-3 text-end">
                                <div class="btn-group rounded">
                                    <a href="{{ route('odontologos.create') }}">
                                        <button type="button" class="btn btn-success">Crear Odontólogo</button>
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
                        @foreach ($odontologos as $odontologo)
                        <tr>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->id}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->nombre_o}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->apellido_p_o}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->apellido_m_o}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->rfc_o}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->curp_o}}
                                    </p>
                                </div>
                            </td>

                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->telefono_o}}
                                    </p>
                                </div>
                            </td>

                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->celular_o}}
                                    </p>
                                </div>
                            </td>

                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->fecha_nacimiento_o}}
                                    </p>
                                </div>
                            </td>

                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->calle_o}}
                                    </p>
                                </div>
                            </td>

                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->num_int_o}}
                                    </p>
                                </div>
                            </td>

                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->num_ext_o}}
                                    </p>
                                </div>
                            </td>

                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->colonia_o}}
                                    </p>
                                </div>
                            </td>

                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->municipio_o}}
                                    </p>
                                </div>
                            </td>

                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->cp_o}}
                                    </p>
                                </div>
                            </td>

                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->estado_o}}
                                    </p>
                                </div>
                            </td>

                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$odontologo->id_usuario_o}}
                                    </p>
                                </div>
                            </td>
                            
                            <td>
                                <a href="{{ route('odontologos.edit',$odontologo->id) }}"><button type="button" class="btn btn-warning">Editar</button></a>
                            </td>
                            <td>
                                <form style="display: inline" action="{{ route('odontologos.destroy', $odontologo->id)}}" method="POST">
                                    {!! method_field('DELETE')!!}
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-danger ">Eliminar</button>
                                    
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('horarios.index',$odontologo->id) }}"><button type="button" class="btn btn-success">Horarios</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-1">
                    {!! $odontologos->appends(request()->query())->links() !!}  
                </div>
            </div>
        </div>
    </div>
@endsection