<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos = Servicio::all(); // Este es la forma correcta con Eloquent de Laravel

    return view('carrito.index', compact('productos'));
    }
}
