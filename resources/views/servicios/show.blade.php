@extends('layouts.app')

@section('template_title')
    {{ $servicios->servicio ?? 'Datos del servicio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos del servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id servicio:</strong>
                            {{ $servi->id }}
                        </div>
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $servi->servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $servi->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>costo:</strong>
                            {{ $servi->costo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
