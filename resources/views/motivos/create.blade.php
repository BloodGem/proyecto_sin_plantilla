@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form method="POST" action="{{ route('motivos.store') }}"  role="form">
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Crear Servicio</h1>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="motivo">Ingrese el motivo de ficha</label>
                            <input type="text" class="form-control" id="motivo" name="motivo" value="{{ old('motivo') }}" autocomplete="motivo" required autofocus>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="descripcion">Ingrese la descripción del motivo</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="1">{{ old('descripcion') }}</textarea>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('motivos.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Crear Motivo</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection