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

        @endsection