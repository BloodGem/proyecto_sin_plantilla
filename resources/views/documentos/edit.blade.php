@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form method="POST" action="{{ route('documentos.update',$documentos->id) }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Editar Documento</h1>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="archivo">Archivo</label>
                            <input type="file" class="form-control" id="archivo" name="archivo" value="{{$documentos->archivo}}" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="comentario">Comentario</label>
                            <textarea class="form-control" id="comentario" name="comentario" rows="3" placeholder="Ingrese algun comentario">{{ old('comentario') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="paciente">Paciente</label>
                        <select class="form-control" name="id_paciente" id="id_paciente">
                          <option value="">Selecciona</option>
                          @foreach ($pacientes as $paciente)
                          <option value="{{$paciente->id}}">{{$paciente->nombre}} {{$paciente->apellido_p}} {{$paciente->apellido_m}}</option>
                        @endforeach
                          </select>
                      </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('documentos.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="Crear">

            </form>
        </div>
    </div>
@endsection