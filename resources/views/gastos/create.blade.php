@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form method="POST" action="{{ route('gastos.store') }}"  role="form">
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Crear Gasto</h1>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Categoria</label>
                            <input type="text" class="form-control" id="categoria" name="categoria" value="{{ old('categoria') }}" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="detalle">Detalle</label>
                        <select class="form-control" id="detalle" name="detalle">
                            <option value="">Selecciona</option>
                            <option value="Agua">Agua</option>
                            <option value="Luz">Luz</option>
                            <option value="Internet">Internet</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="fecha_pago">Fecha de pago</label>
                            <input type="date" class="form-control" id="fecha_pago" name="fecha_pago" value="{{ old('fecha_pago') }}" required autofocus>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="fecha_factura">Fecha de factura</label>
                            <input type="date" class="form-control" id="fecha_factura" name="fecha_factura" value="{{ old('fecha_factura') }}" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="fecha_factura">Total</label>
                            <input type="number" class="form-control" id="total" name="total" value="{{ old('total') }}" required>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('gastos.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Crear Gasto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection