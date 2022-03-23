@extends('layouts.app')
@section('content')
<html>
<head>
<title>TODO supply a title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
</head>
<body>
<div class="hola1">
<article> <center><h3>AGENDA JULIO</h3></center>
    <hr>
<h5>7 Pacientes Nuevos</h5>
<canvas id="myChart" style="height:9vh; width:20vw"></canvas>
</article>
<article> <h5>0 Citas Anuladas</h5>
    <canvas id="myChart1" style="height:9vh; width:20vw"></canvas>
</article>
<article> <h5>1% Ocupación </h5>
    <canvas id="myChart2" style="height:9vh; width:20vw"></canvas>
</article>
<article> <h5>18 Presupuestos </h5>
    <canvas id="myChart3" style="height:9vh; width:20vw"></canvas>
</article>
<article> <h5>33% Atendidos vs Agendados</h5>
    <canvas id="myChart4" style="height:9vh; width:20vw"></canvas>
</article>
<article>
    <canvas id="myChart8" style="height:9vh; width:20vw"></canvas>
</article>
<article class="botn">
<button>
    <article class="uno">
        <h1 style="color: white">6</h1>
        <h4 style="color: white">Atenc. este mes</h4>
    </article>
    <article class="dos" style="color: white">
        <br>
        45% menos 
        <p style="color: white"> Que el mes anterior</p>
    </article>
</button>
</article>
</div>    
<div class="hola2">
    <article> <center><h3>VENTAS JULIO</h3></center>
        <hr>
        <article class="uno">
            <h4>Ventas</h4>
            (Aciones Realizadas)
            <h3>$1.987.734,00</h3>
            86% menos que el mes anterior
            <canvas id="myChart6" style="height:15vh; width:10vw"></canvas>
            <br>
        </article>
        <article class="dos">
            <h4>Recaudación</h4>
            (Pagos recibidos)
            <h3>$2.860.744,03</h3>
            76% menos que el mes anterior
            <canvas id="myChart7" style="height:15vh; width:10vw"></canvas>
            <br>
        </article>
    </article>
    <article> <h3>Ventas y Recaudación Mensual
        <canvas id="myChart5" style="height:15vh; width:10vw"></canvas>
    </article>
</div>  
</body>
<script>
var ctx= document.getElementById("myChart").getContext("2d");
var myChart= new Chart(ctx,{
/*type:"doughnut",*/
/*type:"line",*/
/*type:"pie",*/
/*type:"bar",*/
/*type:"polarArea",*/
/*type:"radar",*/
/*type:"bubble",*/
type:"line",
data:{
labels:['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
datasets:[{
data:[7,8,30,9,12,16,39,20,23,27,32,40],
backgroundColor:[
'rgb(66, 134, 244,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)'
]
}]
},
});
</script>

<script>
    var ctx= document.getElementById("myChart1").getContext("2d");
    var myChart= new Chart(ctx,{
    /*type:"doughnut",*/
    /*type:"line",*/
    /*type:"pie",*/
    /*type:"bar",*/
    /*type:"polarArea",*/
    /*type:"radar",*/
    /*type:"bubble",*/
    type:"line",
    data:{
    labels:['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
    datasets:[{
    label:['Num datos','hola'],
    data:[10,9,15,3,39,9,34,5,29,4,23,2],
    backgroundColor:[
    'rgb(66, 134, 244,0.5)',
    'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
    'rgb(229, 89, 50,0.5)'
    ]
    }]
    },
    options:{
    scales:{
    yAxes:[{
    ticks:{
    beginAtZero:true
    }
    }]
    }
    }
    });
    </script>
    <script>
        var ctx= document.getElementById("myChart2").getContext("2d");
        var myChart= new Chart(ctx,{
        /*type:"doughnut",*/
        /*type:"line",*/
        /*type:"pie",*/
        /*type:"bar",*/
        /*type:"polarArea",*/
        /*type:"radar",*/
        /*type:"bubble",*/
        type:"line",
        data:{
        labels:['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
        datasets:[{
        label:'Num datos',
        data:[20,35,3,18,6,7,9,25,20,27,5,40],
        backgroundColor:[
        'rgb(66, 134, 244,0.5)',
        'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
        'rgb(229, 89, 50,0.5)'
        ]
        }]
        },
        options:{
        scales:{
        yAxes:[{
        ticks:{
        beginAtZero:true
        }
        }]
        }
        }
        });
        </script>
        <script>
            var ctx= document.getElementById("myChart3").getContext("2d");
            var myChart= new Chart(ctx,{
            /*type:"doughnut",*/
            /*type:"line",*/
            /*type:"pie",*/
            /*type:"bar",*/
            /*type:"polarArea",*/
            /*type:"radar",*/
            /*type:"bubble",*/
            type:"line",
            data:{
            labels:['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
            datasets:[{
            label:'Num datos',
            data:[5,35,6,20,12,14,20,5,38,7,12,10],
            backgroundColor:[
            'rgb(66, 134, 244,0.5)',
            'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
            'rgb(229, 89, 50,0.5)'
            ]
            }]
            },
            options:{
            scales:{
            yAxes:[{
            ticks:{
            beginAtZero:true
            }
            }]
            }
            }
            });
            </script>
            <script>
                var ctx= document.getElementById("myChart4").getContext("2d");
                var myChart= new Chart(ctx,{
                /*type:"doughnut",*/
                /*type:"line",*/
                /*type:"pie",*/
                /*type:"bar",*/
                /*type:"polarArea",*/
                /*type:"radar",*/
                /*type:"bubble",*/
                type:"line",
                data:{
                labels:['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                datasets:[{
                label:'Num datos',
                data:[20,5,30,18,2,27,24,15,20,7,35,4],
                backgroundColor:[
                'rgb(66, 134, 244,0.5)',
                'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
'rgb(229, 89, 50,0.5)',
                'rgb(229, 89, 50,0.5)'
                ]
                }]
                },
                options:{
                scales:{
                yAxes:[{
                ticks:{
                beginAtZero:true
                }
                }]
                }
                }
                });
                </script>
                <script>
                    var ctx= document.getElementById("myChart5").getContext("2d");
                    var myChart= new Chart(ctx,{
                    /*type:"doughnut",*/
                    /*type:"line",*/
                    /*type:"pie",*/
                    /*type:"bar",*/
                    /*type:"polarArea",*/
                    /*type:"radar",*/
                    /*type:"bubble",*/
                    type:"bar",
                    data:{
                    labels:['Ene','Ene','Feb','Feb','Mar','Mar','Abr','Abr','May','May','Jun','Jun','Jul','Jul','Ago','Ago','Sep','Sep','Oct','Oct','Nov','Nov','Dic','Dic'],
                    datasets:[{
                    label:'Num datos',
                    data:[20,25,30,18,29,37,12,15,20,7,35,4,27,25,34,28,9,17,2,14,19,3,35,24],
                    backgroundColor:[
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)',
                    'rgb(66, 134, 244,0.5)',
                    'rgb(74, 135, 72,0.5)'
                    ]
                    }]
                    },
                    options:{
                    scales:{
                    yAxes:[{
                    ticks:{
                    beginAtZero:true
                    }
                    }]
                    }
                    }
                    });
                    </script>
                    <script>
                        var ctx= document.getElementById("myChart6").getContext("2d");
                        var myChart= new Chart(ctx,{
                        /*type:"doughnut",*/
                        /*type:"line",*/
                        /*type:"pie",*/
                        /*type:"bar",*/
                        /*type:"polarArea",*/
                        /*type:"radar",*/
                        /*type:"bubble",*/
                        type:"doughnut",
                        data:{
                        labels:['col1','col2','col3'],
                        datasets:[{
                        label:'Num datos',
                        data:[10,9,15],
                        backgroundColor:[
                        'rgb(66, 134, 244,0.5)',
                        'rgb(74, 135, 72,0.5)',
                        'rgb(229, 89, 50,0.5)'
                        ]
                        }]
                        },
                        /*options:{
                        scales:{
                        yAxes:[{
                        ticks:{
                        beginAtZero:true
                        }
                        }]
                        }
                        }*/
                        });
                        </script>
                        <script>
                            var ctx= document.getElementById("myChart7").getContext("2d");
                            var myChart= new Chart(ctx,{
                            /*type:"doughnut",*/
                            /*type:"line",*/
                            /*type:"pie",*/
                            /*type:"bar",*/
                            /*type:"polarArea",*/
                            /*type:"radar",*/
                            /*type:"bubble",*/
                            type:"doughnut",
                            data:{
                            labels:['col1','col2','col3'],
                            datasets:[{
                            label:'Num datos',
                            data:[10,9,15],
                            backgroundColor:[
                            'rgb(66, 134, 244,0.5)',
                            'rgb(74, 135, 72,0.5)',
                            'rgb(229, 89, 50,0.5)'
                            ]
                            }]
                            },
                            /*options:{
                            scales:{
                            yAxes:[{
                            ticks:{
                            beginAtZero:true
                            }
                            }]
                            }
                            }*/
                            });
                            </script>
                            <script>
                                var ctx= document.getElementById("myChart8").getContext("2d");
                                /*type:"doughnut",*/
                                /*type:"line",*/
                                /*type:"pie",*/
                                /*type:"bar",*/
                                /*type:"polarArea",*/
                                /*type:"radar",*/
                                /*type:"bubble",*/
                                var myChart = new Chart(ctx, {
                                    type:"line",
                                    data:{
                            labels:['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                            datasets:[{
                            label:'',
                            data:[37,40,38,35,9,25,2,35,5,29,58,23],
                            backgroundColor:[
                            'rgb(66, 134, 244,0.3)',
                            'rgb(66, 134, 244,0.3)',
                            'rgb(66, 134, 244,0.3)',
                            'rgb(66, 134, 244,0.3)',
                            'rgb(66, 134, 244,0.3)',
                            'rgb(66, 134, 244,0.3)',
                            'rgb(66, 134, 244,0.3)',
                            'rgb(66, 134, 244,0.3)',
                            'rgb(66, 134, 244,0.3)',
                            'rgb(66, 134, 244,0.3)',
                            'rgb(66, 134, 244,0.3)',
                            'rgb(66, 134, 244,0.3)'
                            ]
                            }]
                            },
                                });
                                </script>
<style>
    article{ 
  width:100%; 
  float:none; padding:10px;
  box-sizing: border-box;
  background-clip:content-box;
  text-align:center;}
  .hola1{
    width: 40%;
    float:left;
    border-radius: 5px; 
  }
  .hola2{
      width: 59%;
      float:right;
  }
  .uno{
      width: 50%;
      float:left;
      text-align:center;
  }
  .dos{
      width: 50%;
      float:right;
      text-align:center;
  }

  button{
      width: 95%;
      border: 0px;
      background-color: rgb(74, 135, 72,0.7);
      border-radius: 5px;
  }
</style>
</html>
@endsection