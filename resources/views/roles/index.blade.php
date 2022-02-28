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
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Buscar</span>
                                    </div>
                                    <input type="text" class="form-control"
                                        placeholder="Ingrese el rol, ...">
                                </div>
                            </div>

                            <div class="col-md-3 text-end">
                                <div class="btn-group rounded">
                                    <a href="{{ route('roles.create') }}">
                                        <button type="button" class="btn btn-success">Crear Rol</button>
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
                            <th scope="col">#Id</th>
                            <th scope="col">Rol</th>
                            
                            <th scope="col" colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $rol)
                        <tr>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$rol->id}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$rol->rol}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('roles.edit', $rol->id) }}"><button type="button" class="btn btn-warning">Editar</button></a>
                            </td>
                            <td>
                                <form style="display: inline" action="{{ route('roles.destroy', $rol->id)}}" method="POST">
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
                    
                    {!! $roles->appends(request()->query())->links() !!} 
                </div>
            </div>
        </div>
    </div>
@endsection