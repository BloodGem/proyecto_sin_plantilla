
document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("#citasFormulario");
    
    var calendarEl = document.getElementById('agenda');
    var calendar = new FullCalendar.Calendar(calendarEl, {
    
      initialView: 'dayGridMonth',
    
      locale: 'es',
    
      headerToolbar:{
          left: 'prev,next,today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,listWeek'
      },
    
      eventSources:{
          url: baseURL+"/citas/show",
          method: "POST",
          extraParams:{
              _token: formulario._token.value,
          }
      },
    
      dateClick:function(info){
          formulario.reset();
    
          formulario.start.value=info.dateStr;
          formulario.end.value=info.dateStr;
    
          $("#cita").modal("show");
      },
    
      eventClick:function (info){
    
          var citas= info.event;
          console.log(citas);
    
          axios.post(baseURL+"/citas/edit/"+info.event.id).
          then(
            (respuesta) =>{
    
                formulario.id.value= respuesta.data.id;
                formulario.id_paciente.value= respuesta.data.id_paciente;
                formulario.id_odontologo.value= respuesta.data.id_odontologo;
                formulario.comentario.value= respuesta.data.comentario;
                formulario.start.value= respuesta.data.start;
                formulario.end.value= respuesta.data.end;
                formulario.estatus.value= respuesta.data.estatus;
                $("#cita").modal("show");
            }
            ).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            )
    
      },
    
    });
    
    calendar.render();
    
    
    
    document.getElementById("btnGuardar").addEventListener("click",function(){
        enviarDatos("/citas/store");
    });
    
    document.getElementById("btnEliminar").addEventListener("click",function(){
        enviarDatos("/citas/destroy/"+formulario.id.value);
    });
    
    document.getElementById("btnModificar").addEventListener("click",function(){
        enviarDatos("/citas/update/"+formulario.id.value);
    });
    
    
    function enviarDatos(url) {
    
        const datos= new FormData(formulario);
        console.log(datos);
    
        URL= baseURL + url;
    
        axios.post(URL, datos).
        then(
            (respuesta) =>{
    
                calendar.refetchEvents();
    
                $("#cita").modal("hide");
            }
            ).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            )
    
    };
    
    
    
    
    
    
    
    
    });
    