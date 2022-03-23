@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form action="{{ route('productos.update',$productos->id)}}" method="POST" enctype="multipart/form-data">
                {!! method_field('PUT') !!}
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Editar Prodcuto</h1>
                    </div>
                    <div class="col-12 mb-0">
                        <h4 class="m-0">Infomación de Producto</h4>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="producto">Producto</label> 
                            <input type="text"  class="form-control" id="producto" name="producto" value="{{ $productos->producto }}" autocomplete="producto" placeholder="Ingrese el nombre del producto"  required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="stock_s">Stock S</label>
                            <input type="text"  class="form-control" id="stock_s" name="stock_s" placeholder="Ingrese el stock s" value="{{ $productos->stock_s }}" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="stock_a">Stock A</label>
                            <input type="text"  class="form-control" id="stock_a" name="stock_a" value="{{ $productos->stock_a }}" placeholder="Ingrese el stock a" required>
                        </div>
                    </div>
                    
                    <div class="col-12 text-end">
                        <a href="{{ route('productos.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Editar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection