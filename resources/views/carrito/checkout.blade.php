@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-sm-12 bg-white">
             @if(count(Cart::getContent()))
             <table class="table table-striped">
                 <thead>
                     <th>ID</th>
                     <th>Nombre</th>
                     <th>Precio</th>
                     <th>Cantidad</th>
                 </thead>
                 @foreach (Cart::getContent() as $servicio)
                 <tr>
                    <td>{{$servicio->id}}</td>
                    <td>{{$servicio->name}}</td>
                    <td>{{$servicio->price}}</td>
                    <td>{{$servicio->quantity}}</td>
                    <td>
                        <form action="{{route('carrito.removeitem')}}" method="POST">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{$servicio->id}}">
                            <button type="submit" class="btn btn-link btn-sm text-danger"> X </button>
                        </form>
                    </td>
                </tr>
                 @endforeach
             </table>
             <form action="{{route('carrito.clear')}}" method="POST">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-link btn-sm text-danger"> Vaciar Carrito </button>

               

            </form>
            <form action="{{route('carrito.prueba')}}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="metodo">Metodo de pago</label>
                    <select class="form-control" name="metodo" id="metodo">
                      <option value="">Selecciona</option>
                      @foreach ($metodos as $metodo)
                      <option value="{{$metodo->metodo}}">{{$metodo->metodo}}</option>
                    @endforeach
                      </select>
                  </div>

                  <div class="form-group">
                    <label for="banco">Banco</label>
                    <select class="form-control" name="banco" id="banco">
                      <option value="Ninguno">Ninguno</option>
                      @foreach ($bancos as $banco)
                      <option value="{{$banco->siglas}}">{{$banco->banco}}</option>
                    @endforeach
                      </select>
                  </div>

                  <div class="form-group">
                    <label for="id_paciente">Paciente</label>
                    <select class="form-control" name="id_paciente" id="id_paciente" required>
                      <option value="">--Selecciona--</option>
                      @foreach ($pacientes as $paciente)
                      <option value="{{$paciente->id}}">{{$paciente->nombre}} {{$paciente->apellido_p}} {{$paciente->apellido_m}}</option>
                      @endforeach
                      </select>
                  </div>

                  <div class="form-group">
                    <label for="estatus">Estatus</label>
                      <select class="form-control" name="estatus" id="estatus">
                        <option value="">--Selecciona--</option>
                        <option value="Pagado">Pagado</option>
                        <option value="Pendiente">Pendiente</option>
                        </select>
                </div>

                  <button type="submit" class="btn btn-link btn-sm text-danger"> Prueba </button>
            </form>
             @else
             <p>Carrito vacio</p>
             @endif
        </div>

        </div>
        </div>

        @endsection