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
                             
                                        <form action="{{route('categorias.index')}}" method="GET">
                                            <input type="search" class="form-control" name="busqueda" value="{{$busqueda}}">
                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                                            </form>
                                                            
                                </div>
                            </div>

                            <div class="col-md-3 text-end">
                                <div class="btn-group rounded">
                                    <a href="{{ route('categorias.create') }}">
                                        <button type="button" class="btn btn-success">Crear Arancel</button>
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
                            <th scope="col">Categoria</th>
                            <th scope="col">Tipo</th>
                            <th scope="col" colspan="3" width="90">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                        <tr>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$categoria->id}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$categoria->categoria}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$categoria->tipo}}
                                    </p>
                                </div>
                            </td>
                            <td width="30">
                                <a href="{{ route('categorias.edit',$categoria->id) }}"><button type="button" class="btn btn-warning">Editar</button></a>
                            </td>
                            <td width="30">
                                <form style="display: inline" action="{{ route('categorias.destroy', $categoria->id)}}" method="POST">
                                    {!! method_field('DELETE')!!}
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-danger ">Eliminar</button>
                                    
                                </form>
                            </td>

                            <td width="30">
                                <form style="display: inline" action="{{ route('servicios.index')}}" method="GET">
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-success ">Agregar Servicios</button>
                                    
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-1">
                    {!! $categorias->appends(request()->query())->links() !!}  
                </div>
            </div>
        </div>
    </div>
@endsection