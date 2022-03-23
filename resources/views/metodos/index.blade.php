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
                                        placeholder="Ingrese el Metodo, ...">
                                </div>
                            </div>

                            <div class="col-md-3 text-end">
                                <div class="btn-group rounded">
                                    <a href="{{ route('metodos.create') }}">
                                        <button type="button" class="btn btn-success"> Crear Metodos </button>
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
                            <th scope="col">#Id_metodo</th>
                            <th scope="col">Metodo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($metodos as $metodos)
                        <tr>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$metodos->id}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$metodos->metodo}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('metodos.edit', $metodos->id) }}"><button type="button" class="btn btn-warning">Editar</button></a>
                            </td>
                            <td>
                                <form style="display: inline" action="{{ route('metodos.destroy', $metodos->id)}}" method="POST">
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
                </div>
            </div>
        </div>
    </div>
@endsection