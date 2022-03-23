<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Cita;
use App\Models\Ficha;
use App\Models\Odontologo;
use App\Models\Paciente;
use App\Models\Servicio;
use App\Models\Venta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $odontologos = Odontologo::count();
        $pacientes = Paciente::count();
        $citas = Cita::count();
        $categorias = Categoria::count();
        $servicios = Servicio::count();
        $ventas = Venta::where('estatus','=','Pendiente')->count();
        $fecha = date('Y-m-d');
        $fichas = Ficha::whereDate('created_at', $fecha)->count();
        return view('home', compact('odontologos','pacientes','citas','categorias','servicios','ventas','fichas'));
    }
}
