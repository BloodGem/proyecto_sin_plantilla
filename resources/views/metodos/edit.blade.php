@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form action="{{ route('metodos.update',$metodos->id)}}" method="POST" enctype="multipart/form-data">
                {!! method_field('PUT') !!}
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Editar Metodo</h1>
                    </div>
                    <div class="col-12 mb-0">
                        <h4 class="m-0">Infomación del Metodo</h4>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="metodo">Metodo</label> 
                            <input type="text"  class="form-control" id="metodo" name="metodo" value="{{ $metodos->metodo }}" autocomplete="metodo" placeholder="Ingrese el nombre del metodo"  required>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('metodos.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Editar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection