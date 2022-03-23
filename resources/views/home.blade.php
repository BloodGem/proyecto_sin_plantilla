@extends('layouts.app')
@section('title', __('BIENVENIDO'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
			<div class="card-body">
				<h5>Hola <strong>{{ Auth::user()->email }},</strong></h5>
				<br> 
				<hr>

				 <div class="row w-100">
					<div class="col-md-3">
						<div class="card border-info mx-sm-1 p-3">
							<a href="{{ url('/odontologos') }}"><div class="card border-info text-info p-3" ><span class="text-center fa fa-plane-departure" aria-hidden="true">Ver más...</span></div></a>
							<div class="text-info text-center mt-3"><h4>Dentistas</h4></div>
							<div class="text-info text-center mt-2"><h1>{{$odontologos}}</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-success mx-sm-1 p-3">
							<a href="{{ url('/pacientes') }}"><div class="card border-success text-success p-3 my-card"><span class="text-center fa fa-luggage-cart" aria-hidden="true">Ver más...</span></div></a>
							<div class="text-success text-center mt-3"><h4>Pacientes</h4></div>
							<div class="text-success text-center mt-2"><h1>{{$pacientes}}</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-danger mx-sm-1 p-3">
							<a href="{{ url('/citas') }}"><div class="card border-danger text-danger p-3 my-card" ><span class="text-center fa fa-person-booth" aria-hidden="true">Ver más...</span></div></a>
							<div class="text-danger text-center mt-3"><h4>Citas pendientes</h4></div>
							<div class="text-danger text-center mt-2"><h1>{{$citas}}</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-warning mx-sm-1 p-3">
							<a href="{{ url('/usuarios') }}"><div class="card border-warning text-warning p-3 my-card" ><span class="text-center fa fa-users" aria-hidden="true">Ver más...</span></div></a>
							<div class="text-warning text-center mt-3"><h4>Usuarios totales en el sistema</h4></div>
							<div class="text-warning text-center mt-2"><h1>{{ Auth::user()->count() }}</h1></div>
						</div>
					</div>
				 </div>
				 <br>
				 <div class="row w-100">
					<div class="col-md-3">
						<div class="card border-info mx-sm-1 p-3">
							<a href="{{ url('/fichas') }}"><div class="card border-info text-info p-3" ><span class="text-center fa fa-plane-departure" aria-hidden="true">Ver más...</span></div></a>
							<div class="text-info text-center mt-3"><h4>Fichas de hoy</h4></div>
							<div class="text-info text-center mt-2"><h1>{{$fichas}}</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-success mx-sm-1 p-3">
							<a href="{{ url('/categoriass') }}"><div class="card border-success text-success p-3 my-card"><span class="text-center fa fa-luggage-cart" aria-hidden="true">Ver más...</span></div></a>
							<div class="text-success text-center mt-3"><h4>Categorias</h4></div>
							<div class="text-success text-center mt-2"><h1>{{$categorias}}</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-danger mx-sm-1 p-3">
							<a href=""><div class="card border-danger text-danger p-3 my-card" ><span class="text-center fa fa-person-booth" aria-hidden="true">.</span></div></a>
							<div class="text-danger text-center mt-3"><h4>No. servicios</h4></div>
							<div class="text-danger text-center mt-2"><h1>{{$servicios}}</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-warning mx-sm-1 p-3">
							<a href="{{ url('/carrito') }}"><div class="card border-warning text-warning p-3 my-card" ><span class="text-center fa fa-users" aria-hidden="true">Ver más...</span></div></a>
							<div class="text-warning text-center mt-3"><h4>Pagos pendientes</h4></div>
							<div class="text-warning text-center mt-2"><h1>{{ $ventas }}</h1></div>
						</div>
					</div>
				 </div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
