@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <form action="{{ route('bancos.update',$bancos->id)}}" method="POST" enctype="multipart/form-data">
                {!! method_field('PUT') !!}
                {!! csrf_field() !!}
                <div class="row g-4">
                    <div class="col-12 border-bottom mb-0">
                        <h1 class="m-0 fw-bold">Editar Banco</h1>
                    </div>
                    <div class="col-12 mb-0">
                        <h4 class="m-0">Infomación del Banco</h4>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="banco">Banco</label> 
                            <input type="text"  class="form-control" id="banco" name="banco" value="{{ $bancos->banco }}" autocomplete="bancos" placeholder="Ingrese el nombre del banco"  required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="siglas">Siglas</label> 
                            <input type="text"  class="form-control" id="siglas" name="siglas" value="{{ $bancos->siglas }}" autocomplete="siglas" placeholder="Ingrese las siglas"  required>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('bancos.index') }}"><button type="button" class="btn btn-danger">Regresar</button></a>
                        <button type="submit" class="btn btn-success">Editar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection