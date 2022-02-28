@extends('layout')
@section('contenido')
<br>
<br>
    <div class="col">
        <div class="card">
          <div class="row g-0">
            <div class="col-md-4">
              <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>

            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title">{{$user->name}} {{$user->apellido_p}} {{$user->apellido_m}}</h3>
                <p class="card-text"><strong>RFC: </strong>{{$user->rfc}}                      CURP: </strong>{{$user->curp}}</p>
                <p class="card-text">Dirección: Calle {{$user->calle}} no.{{$user->num_ext}} de {{$user->colonia}} {{$user->localidad}} {{$user->municipio}} {{$user->cp}}</p>
                <p class="card-text"><small class="text-muted">{{$user->email}}</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection