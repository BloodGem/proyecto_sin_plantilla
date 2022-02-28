@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form method="POST" action="{{ route('servicios.store') }}"  role="form">
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Crear Servicio</h1>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Ingrese el nombre del servicio</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Ingrese el nombre del servicio" required autofocus>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="description">Ingrese la descripción del servicio</label>
                            <textarea class="form-control" id="description" name="description" rows="1" placeholder="Ingrese la descripción del servicio">{{ old('description') }}</textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="price">Ingrese el costo del servicio</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}"
                                placeholder="Ingrese el costo del servicio" required>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('servicios.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Crear Servicio</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection