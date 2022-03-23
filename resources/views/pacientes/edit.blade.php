@extends('layouts.app')

@section('template_title')
    Editar Paciente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Paciente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pacientes.update', $pacientes->id) }}"  role="form" enctype="multipart/form-data">
                            {!! method_field('PUT') !!}
                            {!! csrf_field() !!}

                       <div class="box-body">
        
                        <div class="form-group">
                           <label for="nombre" >{{('Nombre(s)') }}</label>
                           <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ $pacientes->nombre }}" required autocomplete="nombre" autofocus>
                           @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                           <label for="apellido_p" >{{('Apellido Paterno') }}</label>
                           <input id="apellido_p" type="text" class="form-control @error('apellido_p') is-invalid @enderror" name="apellido_p" value="{{ $pacientes->apellido_p }}" required autocomplete="apellido_p">
                           @error('apellido_p')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="apellido_m" >{{('Apellido Materno') }}</label>
                            <input id="apellido_m" type="text" class="form-control @error('apellido_m') is-invalid @enderror" name="apellido_m" value="{{ $pacientes->apellido_m }}" required autocomplete="apellido_m">
                            @error('apellido_m')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
        
                        <div class="form-group">
                            <label for="rfc" >{{('RFC') }}</label>
                            <input id="rfc" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="{{ $pacientes->rfc }}" required autocomplete="rfc">
                            @error('rfc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="curp" >{{('CURP') }}</label>
                            <input id="curp" type="text" class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ $pacientes->curp }}" required autocomplete="curp">
                            @error('curp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="fecha_nacimiento" >{{('Fecha de Nacimiento') }}</label>
                            <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ $pacientes->fecha_nacimiento }}" required autocomplete="fecha_nacimiento">
                            @error('fecha_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="calle" >{{('Calle') }}</label>
                            <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" name="calle" value="{{ $pacientes->calle }}" required autocomplete="calle" >
                            @error('Calle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="num_int" >{{('Número interior') }}</label>
                            <input id="num_int" type="text" class="form-control @error('num_int') is-invalid @enderror" name="num_int" value="{{ $pacientes->num_int }}" required autocomplete="num_int" >
                            @error('Num_int')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="num_ext" >{{('Número exterior') }}</label>
                            <input id="num_ext" type="text" class="form-control @error('num_ext') is-invalid @enderror" name="num_ext" value="{{ $pacientes->num_ext }}" required autocomplete="num_ext" >
                            @error('Num_ext')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="colonia" >{{('Colonia') }}</label>
                            <input id="colonia" type="text" class="form-control @error('colonia') is-invalid @enderror" name="colonia" value="{{ $pacientes->colonia }}" required autocomplete="colonia">
                            @error('colonia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="municipio" >{{('Municipio') }}</label>
                            <input id="municipio" type="text" class="form-control @error('municipio') is-invalid @enderror" name="municipio" value="{{ $pacientes->municipio }}" required autocomplete="municipio" >
                            @error('municipio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="cp" >{{('Código postal') }}</label>
                            <input id="cp" type="text" class="form-control @error('cp') is-invalid @enderror" name="cp" value="{{ $pacientes->cp }}" required autocomplete="cp" >
                            @error('cp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="estado" >{{('Estado') }}</label>
                            <input id="estado" type="text" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ $pacientes->estado }}" required autocomplete="estado">
                            @error('estado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="telefono" >{{('Teléfono') }}</label>
                            <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $pacientes->telefono }}" required autocomplete="telefono">
                            @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="celular" >{{('Celular') }}</label>
                            <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ $pacientes->celular }}" required autocomplete="celular">
                            @error('celular')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="id_usuario" >{{('Id usuario') }}</label>
                            <input id="id_usuario" type="text" class="form-control @error('id_usuario') is-invalid @enderror" name="id_usuario" value="{{ $pacientes->id_usuario }}" required autocomplete="id_usuario">
                            @error('id_usuario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                      </div>
                                <tbody>
                                    <tr>
                                        <td>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </td>
                                        <td>
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Regresar</a>
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





