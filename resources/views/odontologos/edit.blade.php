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
                        <span class="card-title">Editar Odontólogo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('odontologos.update', $odontologos->id) }}"  role="form" enctype="multipart/form-data">
                            {!! method_field('PUT') !!}
                            {!! csrf_field() !!}

                            <div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label for="nombre_o" >{{('Nombre') }}</label>
            <input id="nombre_o" type="text" class="form-control @error('nombre_o') is-invalid @enderror" name="nombre_o" value="{{ $odontologos->nombre_o }}" required autocomplete="nombre" placeholder="Nombre" autofocus>
            @error('nombre_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="apellido_p_o" >{{('Apellido Paterno') }}</label>
            <input id="apellido_p_o" type="text" class="form-control @error('apellido_p_o') is-invalid @enderror" name="apellido_p_o" value="{{ $odontologos->apellido_p_o }}" required autocomplete="apellido_p_o" >
            @error('apellido_p_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="apellido_m_o" >{{('Apellido Materno') }}</label>
            <input id="apellido_m_o" type="text" class="form-control @error('apellido_m_o') is-invalid @enderror" name="apellido_m_o" value="{{ $odontologos->apellido_m_o }}" required autocomplete="apellido_m_o">
            @error('apellido_m_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>
        
        <div class="form-group">
            <label for="rfc_o" >{{('RFC') }}</label>
            <input id="rfc_o" type="text" class="form-control @error('rfc_o') is-invalid @enderror" name="rfc_o" value="{{ $odontologos->rfc_o }}" required autocomplete="rfc_o">
            @error('rfc_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="curp_o" >{{('Curp') }}</label>
            <input id="curp_o" type="text" class="form-control @error('curp_o') is-invalid @enderror" name="curp_o" value="{{ $odontologos->curp_o }}" required autocomplete="curp_o" >
            @error('curp_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento_o" >{{('Fecha de nacimiento') }}</label>
            <input id="fecha_nacimiento_o" type="date" class="form-control @error('fecha_nacimiento_o') is-invalid @enderror" name="fecha_nacimiento_o" value="{{ $odontologos->fecha_nacimiento_o}}" required autocomplete="fecha_nacimiento_o">
            @error('fecha_nacimiento_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="text" >{{('Calle') }}</label>
            <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" name="calle" value="{{ $odontologos->calle}}" required autocomplete="calle" placeholder="Calle">
            @error('Calle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="num_int_o" >{{('Número Interior') }}</label>
            <input id="num_int_o" type="text" class="form-control @error('num_int_o') is-invalid @enderror" name="num_int_o" value="{{ $odontologos->num_int_o }}" required autocomplete="num_int_o">
            @error('num_int_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="num_ext_o" >{{('Número Exterior') }}</label>
            <input id="num_ext_o" type="text" class="form-control @error('num_ext_o') is-invalid @enderror" name="num_ext_o" value="{{ $odontologos->num_ext_o }}" required autocomplete="num_ext_o">
            @error('num_ext_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="colonia_o" >{{('Colonia') }}</label>
            <input id="colonia_o" type="text" class="form-control @error('colonia_o') is-invalid @enderror" name="colonia_o" value="{{ $odontologos->colonia_o }}" required autocomplete="colonia_o">
            @error('colonia_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="municipio_o" >{{('Municipio') }}</label>
            <input id="municipio_o" type="text" class="form-control @error('municipio_o') is-invalid @enderror" name="municipio_o" value="{{ $odontologos->municipio_o }}" required autocomplete="municipio_o">
            @error('municipio_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="cp_o" >{{('Codigo Postal') }}</label>
            <input id="cp_o" type="text" class="form-control @error('cp_o') is-invalid @enderror" name="cp_o" value="{{ $odontologos->cp_o }}" required autocomplete="cp_o">
            @error('cp_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="estado_o" >{{('Estado') }}</label>
            <input id="estado_o" type="text" class="form-control @error('estado_o') is-invalid @enderror" name="estado_o" value="{{ $odontologos->estado_o }}" required autocomplete="estado_o">
            @error('estado_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="telefono_o" >{{('Teléfono') }}</label>
            <input id="telefono_o" type="text" class="form-control @error('telefono_o') is-invalid @enderror" name="telefono_o" value="{{ $odontologos->telefono_o }}" required autocomplete="telefono_o">
            @error('telefono_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="celular_o" >{{('Celular') }}</label>
            <input id="celular_o" type="text" class="form-control @error('celular_o') is-invalid @enderror" name="celular_o" value="{{ $odontologos->celular_o }}" required autocomplete="celular_o">
            @error('celular_o')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="id_usuario_o" >{{('Id usuario') }}</label>
            <input id="id_usuario_o" type="text" class="form-control @error('id_usuario_o') is-invalid @enderror" name="id_usuario_o" value="{{ $odontologos->id_usuario_o }}" required autocomplete="id_usuario_o">
            @error('id_usuario_o')
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
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </td>
            <td>
        <a class="btn btn-primary" href="{{ route('odontologos.index') }}"> Regresar</a>
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
