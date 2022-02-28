@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form method="POST" action="{{ route('roles.store') }}"  role="form">
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Crear Rol</h1>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="rol">Ingrese un rol</label>
                            <input type="text" class="form-control" id="rol" name="rol" value="{{ old('rol') }}" placeholder="Ingrese un rol" required>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('roles.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Crear Rol</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection