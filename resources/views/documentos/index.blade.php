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
                             
                                        <form action="{{route('documentos.index')}}" method="GET">
                                            <input type="search" class="form-control" name="busqueda" value="{{$busqueda}}">
                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                                            </form>
                                                            
                                </div>
                            </div>

                            <div class="col-md-3 text-end">
                                <div class="btn-group rounded">
                                    <a href="{{ route('documentos.create') }}">
                                        <button type="button" class="btn btn-success">Crear Documento</button>
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
                            <th scope="col">Documento</th>
                            <th scope="col">Comentario</th>
                            <th scope="col">Id_paciente</th>
                            <th scope="col">Fecha de creación</th>
                            <th scope="col" colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documentos as $documento)
                        <tr>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$documento->id}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$documento->archivo}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$documento->comentario}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$documento->id_paciente}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$documento->created_at}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('documentos.edit',$documento->id) }}"><button type="button" class="btn btn-warning">Editar</button></a>
                            </td>
                            <td>
                                <form style="display: inline" action="{{ route('documentos.destroy', $documento->id)}}" method="POST">
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
                    {!! $documentos->appends(request()->query())->links() !!}  
                </div>
            </div>
        </div>
    </div>
@endsection