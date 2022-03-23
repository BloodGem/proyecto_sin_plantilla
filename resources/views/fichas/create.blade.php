@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form method="POST" action="{{ route('fichas.store') }}"  role="form">
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Crear Ficha</h1>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <select id="id_paciente" name="id_paciente" class="form-control" required>
                                <option value="">Selecciona</option>
                                @foreach ($pacientes as $paciente)
                                <option value="{{$paciente->id}}">{{$paciente->nombre}} {{$paciente->apellido_p}} {{$paciente->apellido_m}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <select id="motivo" name="motivo" class="form-control" required>
                              <option value="">Selecciona</option>
                              @foreach ($motivos as $motivo)
                              <option value="{{$motivo->motivo}}">{{$motivo->motivo}}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>

                    
                </div>
                <div class="col-12 text-end">
                    <a href="{{ route('fichas.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                    <button type="submit" class="btn btn-success">Generar ficha</button>
                </div>
            </form>
        </div>
    </div>
@endsection