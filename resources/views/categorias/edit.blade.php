@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form method="POST" action="{{ route('categorias.update', $categorias->id) }}"  role="form">
                {!! method_field('PUT') !!}
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Editar Arancel</h1>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <input type="text" class="form-control" id="categoria" name="categoria" value="{{$categorias->categoria}}" required autofocus>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                        <select class="form-control" id="tipo" name="tipo">
                            <option value="{{$categorias->tipo}}">{{$categorias->tipo}}</option>
                            <option value="x">x</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('categorias.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Guardar cambios</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection