@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form method="POST" action="{{ route('consultorios.update', $consultorios->id) }}">
                {!! method_field('PUT') !!}
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Crear Consultorio</h1>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="id_usuario">Asigne un dentista </label>
                            <select class="form-control" id="id_usuario" name="id_usuario" required>
                                <option value="{{$consultorios->id_usuario}}">{{$consultorios->id_usuario}}</option>
                                <option value="1">Braulio</option>
                                <option value="2">Adrian</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('consultorios.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Crear Consultorio</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection