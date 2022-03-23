@extends('layouts.app')

@section('template_title')
    Nuevo Paciente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nuevo Paciente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pacientes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label for="nombre" >{{('Nombre(s)') }}</label>
            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
            @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="apellido_p" >{{('Apellido Paterno') }}</label>
            <input id="apellido_p" type="text" class="form-control @error('apellido_p') is-invalid @enderror" name="apellido_p" value="{{ old('apellido_p') }}" required autocomplete="apellido_p">
            @error('apellido_p')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="apellido_m" >{{('Apellido Materno') }}</label>
            <input id="apellido_m" type="text" class="form-control @error('apellido_m') is-invalid @enderror" name="apellido_m" value="{{ old('apellido_m') }}" required autocomplete="apellido_m" >
            @error('apellido_m')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>
        
        <div class="form-group">
            <label for="rfc" >{{('RFC') }}</label>
            <input id="rfc" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="{{ old('rfc') }}" required autocomplete="rfc">
            @error('rfc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="curp" >{{('CURP') }}</label>
            <input id="curp" type="text" class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}" required autocomplete="curp">
            @error('curp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento" >{{('Fecha de Nacimiento') }}</label>
            <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autocomplete="fecha_nacimiento">
            @error('fecha_nacimiento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="calle" >{{('Calle') }}</label>
            <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" name="calle" value="{{ old('calle') }}" required autocomplete="calle">
            @error('calle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="num_int" >{{('Número Exterior') }}</label>
            <input id="num_int" type="text" class="form-control @error('num_int') is-invalid @enderror" name="num_int" value="{{ old('num_int') }}" required autocomplete="num_int">
            @error('num_int')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="num_ext" >{{('Num_ext') }}</label>
            <input id="num_ext" type="text" class="form-control @error('num_ext') is-invalid @enderror" name="num_ext" value="{{ old('num_ext') }}" required autocomplete="num_ext">
            @error('num_ext')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="colonia" >{{('colonia') }}</label>
            <input id="colonia" type="text" class="form-control @error('colonia') is-invalid @enderror" name="colonia" value="{{ old('colonia') }}" required autocomplete="colonia">
            @error('colonia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="municipio" >{{('Municipio') }}</label>
            <input id="municipio" type="text" class="form-control @error('municipio') is-invalid @enderror" name="municipio" value="{{ old('municipio') }}" required autocomplete="municipio">
            @error('Municipio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="cp" >{{('Código Postal') }}</label>
            <input id="cp" type="text" class="form-control @error('cp') is-invalid @enderror" name="cp" value="{{ old('cp') }}" required autocomplete="cp">
            @error('cp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="estado" >{{('Estado') }}</label>
            <input id="estado" type="text" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ old('estado') }}" required autocomplete="estado">
            @error('estado')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="telefono" >{{('Teléfono') }}</label>
            <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono">
            @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="celular" >{{('Celular') }}</label>
            <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" required autocomplete="celular">
            @error('celular')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

    </div>
    <br>
    <tbody>
        <tr>
            <td>
        <button type="submit" class="btn btn-primary">Guardar</button>
            </td>
        </tr>
    </tbody>

</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
