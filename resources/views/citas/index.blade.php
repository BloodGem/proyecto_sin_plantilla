@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- FULL CALENDAR -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>
    
    <script type="text/javascript">
     var baseURL = {!! json_encode(url('/')) !!} </script>
     <script src="/js/agenda.js"></script>

  </head>

  <body>
    


    <div class="container">

        <div id="agenda"></div>
    
    </div>
    
  
    
    <!-- Modal -->
    <div class="modal fade" id="cita" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">CITA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="" method="POST" id="citasFormulario">
                {!! csrf_field() !!}
                <div class="modal-body">

                    <div class="form-group">
                      <label for="id">ID</label>
                      <input type="text" class="form-control" name="id" id="id" placeholder="">
                    </div>

                    <div class="form-group">
                      <label for="paciente">Nombre del paciente</label>
                      <input type="text" class="form-control" name="paciente" id="paciente" placeholder="">
                    </div>
                
    
                <div class="form-group">
                  <label for="comentario"></label>
                  <textarea class="form-control" name="comentario" id="comentario" rows="3" placeholder="Introduce tus comentarios"></textarea>
                </div>
    
                <div class="form-group">
                  <label for="start">Start</label>
                  <input type="date" class="form-control" name="start" id="start" placeholder="">
                </div>
    
                <div class="form-group">
                    <label for="end">End</label>
                    <input type="date" class="form-control" name="end" id="end" placeholder="">
                  </div>
      
                </div><!--Aqui acaba el cuerpo del modal-->
                  
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                    <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>




    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection
  </body>
</html>