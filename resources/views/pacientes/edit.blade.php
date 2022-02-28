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
                            {{ method_field('PUT') }}
                            @csrf

                       <div class="box-body">
        
                        <div class="form-group">
                           <label for="text" >{{('Nombre') }}</label>
                           <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre',$pacientes->nombre) }}" required autocomplete="nombre" placeholder="Nombre" autofocus>
                           @error('Nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                           <label for="text" >{{('Apellido_P') }}</label>
                           <input id="apellido_p" type="text" class="form-control @error('apellido_p') is-invalid @enderror" name="apellido_p" value="{{ old('apellido_p',$pacientes->apellido_p) }}" required autocomplete="apellido_p" placeholder="Apellido_P">
                           @error('Apellido_P')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Apellido_M') }}</label>
                            <input id="apellido_m" type="text" class="form-control @error('apellido_m') is-invalid @enderror" name="apellido_m" value="{{ old('apellido_m',$pacientes->apellido_m) }}" required autocomplete="apellido_m" placeholder="Apellido_M">
                            @error('Apellido_M')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
        
                        <div class="form-group">
                            <label for="text" >{{('Rfc') }}</label>
                            <input id="rfc" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="{{ old('rfc',$pacientes->rfc) }}" required autocomplete="rfc" placeholder="Rfc">
                            @error('Rfc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Curp') }}</label>
                            <input id="curp" type="text" class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp',$pacientes->curp) }}" required autocomplete="curp" placeholder="Curp">
                            @error('Curp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Fecha_de_nacimiento') }}</label>
                            <input id="fecha_de_nacimiento" type="date" class="form-control @error('fecha_de_nacimiento') is-invalid @enderror" name="fecha_de_nacimiento" value="{{ old('fecha_de_nacimiento',$pacientes->fecha_de_nacimiento) }}" required autocomplete="fecha_de_nacimiento" placeholder="Fecha_de_nacimiento">
                            @error('Fecha_de_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Calle') }}</label>
                            <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" name="calle" value="{{ old('calle',$pacientes->calle) }}" required autocomplete="calle" placeholder="Calle">
                            @error('Calle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Num_int') }}</label>
                            <input id="num_int" type="text" class="form-control @error('num_int') is-invalid @enderror" name="num_int" value="{{ old('num_int',$pacientes->num_int) }}" required autocomplete="num_int" placeholder="Num_int">
                            @error('Num_int')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Num_ext') }}</label>
                            <input id="num_ext" type="text" class="form-control @error('num_ext') is-invalid @enderror" name="num_ext" value="{{ old('num_ext',$pacientes->num_ext) }}" required autocomplete="num_ext" placeholder="Num_ext">
                            @error('Num_ext')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Localidad') }}</label>
                            <input id="localidad" type="text" class="form-control @error('localidad') is-invalid @enderror" name="localidad" value="{{ old('localidad',$pacientes->localidad) }}" required autocomplete="localidad" placeholder="Localidad">
                            @error('Localidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Municipio') }}</label>
                            <input id="municipio" type="text" class="form-control @error('municipio') is-invalid @enderror" name="municipio" value="{{ old('municipio',$pacientes->municipio) }}" required autocomplete="municipio" placeholder="Municipio">
                            @error('Municipio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Codigo_postal') }}</label>
                            <input id="codigo_postal" type="text" class="form-control @error('codigo_postal') is-invalid @enderror" name="codigo_postal" value="{{ old('codigo_postal',$pacientes->codigo_postal) }}" required autocomplete="codigo_postal" placeholder="Codigo_postal">
                            @error('Codigo_postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Correo_electronico') }}</label>
                            <input id="correo_electronico" type="email" class="form-control @error('correo_electronico') is-invalid @enderror" name="correo_electronico" value="{{ old('correo_electronico',$pacientes->correo_electronico) }}" required autocomplete="correo_electronico" placeholder="Correo_electronico">
                            @error('Correo_electronico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Contraseña') }}</label>
                            <input id="contrasena" type="password" class="form-control @error('contrasena') is-invalid @enderror" name="contrasena" value="{{ old('contrasena',$pacientes->contraseña) }}" required autocomplete="contrasena" placeholder="Contraseña">
                            @error('contrasena')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="text" >{{('Estatus') }}</label>
                            <input id="estatus" type="text" class="form-control @error('estatus') is-invalid @enderror" name="estatus" value="{{ old('estatus',$pacientes->estatus) }}" required autocomplete="estatus" placeholder="Estatus">
                            @error('Estatus')
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





