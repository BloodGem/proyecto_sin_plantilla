@extends('layouts.app')

@section('template_title')
    {{ $pacientes->name ?? 'Datos del Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos del Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pacientes->nombre}} {{$pacientes->apellido_p}} {{$pacientes->apellido_m}}
                        </div>
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $pacientes->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Curp:</strong>
                            {{ $pacientes->curp }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Nacimiento:</strong>
                            {{ $pacientes->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $pacientes->calle }} {{$pacientes->num_int}} {{$pacientes->num_ext}} {{$pacientes->colonia}} {{$pacientes->cp}} {{$pacientes->municipio}} {{$pacientes->estado}}
                        </div>
                        
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $pacientes->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $pacientes->celular }}
                        </div>

                    </div>
                </div>
            </div>

        </div>



<br><br><br>




        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Fichas sacadas</span>
                        </div>
                        
                        
                        <div class="float-right"> 
                            <form action="{{route('pacientes.show',$pacientes->id)}}" method="GET">

                                                
                                                <div class="input-group">
                                                    <input type="search" class="form-control" name="busqueda">
                                                    <input type="hidden" class="form-control" name="busqueda2" value="">
                                                    <input type="hidden" class="form-control" name="busqueda3" value="">
                                                    <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-primary">Buscar</button>
                                                    </span>
                                                  </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="table-responsive mx-2">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#Id</th>
                                        <th scope="col">Motivo</th>
                                        <th scope="col">Fecha y hora en que se saco la ficha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fichas as $ficha)
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$ficha->id}}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$ficha->motivo}}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$ficha->created_at}}
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mx-1">
                                {!! $fichas->appends(request()->query())->links() !!}  
                            </div>
                        </div>
                    </div>

                </div>

<br>
        </div></div>








        <br><br>




        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Citas sacadas</span>
                        </div>
                        
                        
                        <div class="float-right"> 
                            <form action="{{route('pacientes.show',$pacientes->id)}}" method="GET">

                                                
                                                <div class="input-group">
                                                    <input type="search" class="form-control" name="busqueda2">
                                                    <input type="hidden" class="form-control" name="busqueda" value="">
                                                    <input type="hidden" class="form-control" name="busqueda3" value="">
                                                    <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-primary">Buscar</button>
                                                    </span>
                                                  </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="table-responsive mx-2">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#Id</th>
                                        <th scope="col">Comentario</th>
                                        <th scope="col">Fecha y hora de la cita</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($citas as $cita)
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$cita->id}}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$cita->comentario}}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    {{$cita->created_at}}
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mx-1">
                                {!! $citas->appends(request()->query())->links() !!}  
                            </div>
                        </div>
                    </div>

                </div>

<br><br><br>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <span class="card-title">Presupuestos</span>
                </div>
                
                
                <div class="float-right"> 
                    <form action="{{route('pacientes.show',$pacientes->id)}}" method="GET">

                                        
                                        <div class="input-group">
                                            <input type="search" class="form-control" name="busqueda3">
                                            <input type="hidden" class="form-control" name="busqueda" value="">
                                            <input type="hidden" class="form-control" name="busqueda2" value="">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary">Buscar</button>
                                            </span>
                                          </div>
                    </form>
                </div>
            </div>

            <div class="card-body">
                
                <div class="table-responsive mx-2">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#Id</th>
                                <th scope="col">Metodo</th>
                                <th scope="col">Banco</th>
                                <th scope="col">Estatus</th>
                                <th scope="col">Fecha y hora de creación</th>
                                <th scope="col">Fecha y hora de cambio de estatus</th>
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
                                            {{$venta->created_at}}
                                        </p>
                                    </div>
                                </td>
                                
                                <td class="p-0">
                                    <div class="p-3">
                                        <p class="mb-0 text-capitalize">
                                            {{$venta->updated_at}}
                                        </p>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mx-1">
                        {!! $ventas->appends(request()->query())->links() !!}  
                    </div>
                </div>
            </div>

        </div>
        </div></div>

        
        </div>
    </section>
@endsection
