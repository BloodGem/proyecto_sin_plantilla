





@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form action="{{ route('usuarios.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                {!! method_field('PUT') !!}
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Editar Usuario</h1>
                    </div>
                   
                    <div class="col-3">
                        <div class="form-group">
                            <label for="email">Ingrese el email del usuario</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="password">Ingrese la contraseña del usuario</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="password-confirm">Ingrese de nuevo la contraseña</label>
                            <input type="password" class="form-control" id="password-confirm"  autocomplete="new-password" name="password_confirmation" required>
                        </div>
                    </div>



                    <div class="col-3">
                        <div class="form-group">
                            <label for="rol">Ingrese el rol del usuario</label>
                            <select class="form-control" id="rol" name="rol" required>
                                <option value="{{$user->rol}}">{{$user->rol}}</option>
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
                                <option value="{{$user->estatus}}">{{$user->estatus}}</option>
                                <option value="Activo">Activo</option>
                                <option value="Desactivado">Desactivado</option>
                            </select>
                        </div>
                    </div>
                   
                    <div class="col-12 text-end">
                        <a href="{{ route('usuarios.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection