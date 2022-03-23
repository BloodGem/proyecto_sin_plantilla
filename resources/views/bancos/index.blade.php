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
                                        placeholder="Ingrese el Banco ...">
                                </div>
                            </div>

                            <div class="col-md-3 text-end">
                                <div class="btn-group rounded">
                                    <a href="{{ route('bancos.create') }}">
                                        <button type="button" class="btn btn-success">Crear Bancos </button>
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
                            <th scope="col">#Id_Banco</th>
                            <th scope="col">Banco</th>
                            <th scope="col">Siglas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bancos as $bancos)
                        <tr>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$bancos->id}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$bancos->banco}}
                                    </p>
                                </div>
                            </td>
                            <td class="p-0">
                                <div class="p-3">
                                    <p class="mb-0 text-capitalize">
                                        {{$bancos->siglas}}
                                    </p>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('bancos.edit', $bancos->id) }}"><button type="button" class="btn btn-warning">Editar</button></a>
                            </td>
                            <td>
                                <form style="display: inline" action="{{ route('bancos.destroy', $bancos->id)}}" method="POST">
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