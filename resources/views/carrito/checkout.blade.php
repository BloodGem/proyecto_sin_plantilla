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
                            <input type="text" name="id" value="{{$servicio->id}}">
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
             @else
             <p>Carrito vacio</p>
             @endif
        </div>

        </div>
        </div>

        @endsection