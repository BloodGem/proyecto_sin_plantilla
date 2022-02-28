





@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form action="{{ route('usuarios.store')}}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Crear Usuario</h1>
                    </div>
                    <div class="col-12 mb-0">
                        <h4 class="m-0">Infomación Personal</h4>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="imagen">Ingrese el nombre del usuario</label> 
                            <input type="file" class="form-control" id="imagen" name="imagen" autocomplete="name" placeholder="Ingrese el nombre del usuario"  required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="name">Ingrese el nombre del usuario</label> 
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Ingrese el nombre del usuario"  required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="apellido_p">Ingrese el apellido parterno del usuario</label>
                            <input type="text" class="form-control" id="apellido_p" name="apellido_p" placeholder="Ingrese el apellido paterno del usuario" value="{{ old('apellido_p') }}" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="apellido_m">Ingrese el apellido materno del usuario</label>
                            <input type="text" class="form-control" id="apellido_m" name="apellido_m" value="{{ old('apellido_m') }}" placeholder="Ingrese el apellido materno del usuario" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="rfc">Ingrese el RFC del usuario</label>
                            <input type="text" class="form-control" id="rfc" name="rfc" value="{{ old('rfc') }}" placeholder="Ingrese el RFC del usuario" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="curp">Ingrese la CURP del usuario</label>
                            <input type="text" class="form-control" id="curp" name="curp" value="{{ old('curp') }}" placeholder="Ingrese el CURP del usuario" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="fecha_nacimiento">Ingrese la fecha de nacimiento del usuario</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" placeholder="Ingrese la fecha de naciemiento del usuario" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="email">Ingrese el email del usuario</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Ingrese la email del usuario" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="password">Ingrese la contraseña del usuario</label>
                            <input type="password" class="form-control" id="password" name="password"  placeholder="Ingrese la contraseña del usuario" required>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="password-confirm">Ingrese de nuevo la contraseña</label>
                            <input type="password" class="form-control" id="password-confirm" placeholder="Ingrese la contraseña del usuario" autocomplete="new-password" name="password_confirmation" required>
                        </div>
                    </div>



                    <div class="col-3">
                        <div class="form-group">
                            <label for="rol">Ingrese el rol del usuario</label>
                            <select class="form-control" id="rol" name="rol" required>
                                <option value="">Selecciones un rol</option>
                                @foreach ($roles as $rol)
                                <option value='{{$rol->rol}}'>{{$rol->rol}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="estatus">Ingrese el estatus del usuario</label>
                            <select class="form-control" id="estatus" name="estatus" required>
                                <option value="">Selecciones un estatus</option>
                                <option value="Activo">Activo</option>
                                <option value="Desactivado">Desactivado</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mb-0">
                        <h4 class="m-0">Dirección</h4>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="calle">Ingrese la calle del usuario</label>
                            <input type="text" class="form-control" id="calle" name="calle" value="{{ old('calle') }}"  placeholder="Ingrese la calle del usuario" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="num_int">Ingrese el núm. int. del usuario</label>
                            <input type="text" class="form-control" id="num_int" name="num_int" value="{{ old('num_int') }}" placeholder="Ingrese el núm. int. del usuario" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="num_ext">Ingrese el núm. ext. del usuario</label>
                            <input type="text" class="form-control" id="num_ext" name="num_ext" value="{{ old('num_ext') }}" placeholder="Ingrese el núm. ext. del usuario" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="cp">Ingrese el código postal del usuario</label>
                            <input type="text" class="form-control" id="cp" name="cp" value="{{ old('cp') }}" placeholder="Ingrese el código postal del usuario" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="municipio">Municipio</label>
                            <input type="text" class="form-control" id="municipio" name="municipio" value="{{ old('municipio') }}" placeholder="Ingrese el municipio del usuario" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="colonia">Colonia</label>
                            <input type="text" class="form-control" id="colonia" name="colonia" value="{{ old('colonia') }}" placeholder="Ingrese la colonia del usuario" required>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('usuarios.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Crear Usuario</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection