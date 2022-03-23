@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form method="POST" action="{{ route('horarios.update', $horarios->id) }}"  role="form">
                {!! method_field('PUT') !!}
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Modificar Horario</h1>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="dia">Día</label>
                            <input type="day" class="form-control" id="dia" name="dia" value="{{ $horarios->dia }}" required autofocus>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="inicio">Inicio</label>
                            <input type="time" class="form-control" id="inicio" name="inicio" value="{{ $horarios->inicio }}" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="finalizacion">Finalización</label>
                            <input type="time" class="form-control" id="finalizacion" name="finalizacion" value="{{ $horarios->finalizacion }}" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="id_odontologo">Id odontólogo</label>
                            <input type="text" class="form-control" id="id_odontologo" name="id_odontologo" value="{{ $horarios->id_odontologo }}" required>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('horarios.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection