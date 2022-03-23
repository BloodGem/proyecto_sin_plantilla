@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-sm-3 bg-white">
             @if(count(Cart::getContent()))
             <a href="{{route('carrito.checkout')}}">VER CARRITO <span class="badge badge-danger">{{count(Cart::getContent())}}</span></a>
                 
             
             @endif
        </div>

        
        <div class="col-sm-9">
            <div class="row justify-content-center">
                @foreach ($servicios as $servicio)
                    <div class="col-4 border p-5 mt-5 text-center">
                        <h1>{{$servicio->name}}</h1>
                        <p>{{$servicio->price}}</p>
                        <form action="{{route('carrito.add')}}" method="POST">
                        {!! csrf_field() !!}
                        <input type="text" name="producto_id" value="{{$servicio->id}}">
                        <input type="submit" name="btn" class="btn btn-success" value="Agregar al carrito">
                        </form>
                    </div>
            
                @endforeach
            </div>
        </div>
    </div></div>

        <div class="card m-5">
            <div class="card-body pb-0">
        <div class="table-responsive mx-2">
            <table class="table table-hover table-bordered">
                <thead>
                                <tr>
                                    
                                    <th>#Id</th>
                                    <th scope="col">Venta</th>
                                    <th scope="col">Metodo</th>
                                    <th scope="col">Banco</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Id_usuario</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ventas as $venta)
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$venta->id}}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$venta->venta}}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$venta->metodo}}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$venta->banco}}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$venta->estatus}}
                                                </p>
                                            </div>
                                        </td>

                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$venta->id_paciente}}
                                                </p>
                                            </div>
                                        </td>

                                        <td>
                                            <form action="{{ route('carrito.show',$venta->id) }}" method="GET">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"> Ver</button>
                                            </form> 
                                        </td>
                                    </tr>
                                @endforeach
                             </tbody>
                        </table>
                    </div>
    </div></div>
        @endsection