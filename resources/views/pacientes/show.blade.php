@extends('layouts.app')

@section('template_title')
    {{ $pacientes->name ?? 'Datos del Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos del Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Paciente:</strong>
                            {{ $pacientes->id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pacientes->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido P:</strong>
                            {{ $pacientes->apellido_p }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido M:</strong>
                            {{ $pacientes->apellido_m }}
                        </div>
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $pacientes->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Curp:</strong>
                            {{ $pacientes->curp }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Nacimiento:</strong>
                            {{ $pacientes->fecha_de_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Calle:</strong>
                            {{ $pacientes->calle }}
                        </div>
                        <div class="form-group">
                            <strong>Num Int:</strong>
                            {{ $pacientes->num_int }}
                        </div>
                        <div class="form-group">
                            <strong>Num Ext:</strong>
                            {{ $pacientes->num_ext }}
                        </div>
                        <div class="form-group">
                            <strong>Localidad:</strong>
                            {{ $pacientes->localidad }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $pacientes->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Postal:</strong>
                            {{ $pacientes->codigo_postal }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electronico:</strong>
                            {{ $pacientes->correo_electronico }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $pacientes->contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $pacientes->estatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
