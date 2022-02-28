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
                             
                                        <form action="{{route('usuarios.index')}}" method="GET">
                                            <input type="search" class="form-control" name="busqueda" value="{{$busqueda}}">
                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                                            </form>
                                                            
                                </div>
                            </div>

                            <div class="col-md-3 text-end">
                                <div class="btn-group rounded">
                                    <a href="{{ route('usuarios.create') }}">
                                        <button type="button" class="btn btn-success m-sm-1">Crear Usuario</button>
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
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">RFC</th>
                            <th scope="col">CURP</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Calle</th>
                            <th scope="col">Núm. Int.</th>
                            <th scope="col">Núm. Ext.</th>
                            <th scope="col">Colonia</th>
                            <th scope="col">Municipio</th>
                            <th scope="col">Código Postal</th>
                            <th scope="col">Email</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">Rol</th>
                            <th scope="col" colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr class="text-center">
                            
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->name }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->apellido_p }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->apellido_m}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->rfc }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->curp }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->fecha_nacimiento }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->calle }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->num_int }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->num_ext }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->colonia }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->municipio }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->cp }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->email }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->estatus }}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{ $usuario->rol }}
                                    </p>
                                </div>
                            </td>



                                <td class="p-0">
                                    <form style="display: inline" action="{{ route('usuarios.show', $usuario->id)}}" method="GET">
                                        {!! csrf_field() !!}
                                        <button type="submit" class="btn btn-success ">Ver</button>
                                    </form>
                                </td> 
                                   <td class="p-0">
                                       <form style="display: inline" action="{{ route('usuarios.edit', $usuario->id)}}" method="GET">
                                           {!! csrf_field() !!}
                                           <button type="submit" class="btn btn-primary ">Editar</button>
                                       </form>
                                   </td>
                                   <td class="p-0">
                                   <form style="display: inline" action="{{ route('usuarios.destroy', $usuario->id)}}" method="POST">
                                    {!! method_field('DELETE')!!}
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-danger ">Eliminar</button>
                                    
                                </form>
                                   </td>
                        </tr>
                @endforeach
                    </tbody>
                </table>

                

               <div class="mx-1">
                    {!! $usuarios->appends(request()->query())->links() !!}  
            </div>
        </div>
    </div>
@endsection