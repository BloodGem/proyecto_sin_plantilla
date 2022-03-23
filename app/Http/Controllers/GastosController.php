<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriasRequest;
use App\Http\Requests\GastosRequest;
use App\Models\Categoria;
use App\Models\Gasto;
use Illuminate\Http\Request;

/**
 * Class ServicioController
 * @package App\Http\Controllers
 */

class GastosController extends Controller
{
  

    public function index(Request $request)//TODOS LOS MENSAJES
    {

        $busqueda=trim($request->get('busqueda'));

        $gastos = Gasto::select("*")
        ->where('categoria','LIKE','%'.$busqueda.'%')
        ->orWhere('detalle','LIKE','%'.$busqueda.'%')
        ->orWhere('fecha_pago','LIKE','%'.$busqueda.'%')
        ->orWhere('fecha_factura','LIKE','%'.$busqueda.'%')
        ->orWhere('total','LIKE','%'.$busqueda.'%')
        ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
        
        return view('gastos.index', compact('gastos','busqueda'));

    }


    public function create()
    {   

        return view('gastos.create');
    }


    public function store(GastosRequest $request)
    {

        $gastos = new Gasto();
        $gastos->categoria = $request->categoria;
        $gastos->detalle = $request->detalle;
        $gastos->fecha_pago = $request->fecha_pago;
        $gastos->fecha_factura = $request->fecha_factura;
        $gastos->total = $request->total;
        $gastos->save();
        return redirect()->route('gastos.index');
    }



    public function edit($id)//FORMULARIO DE EDICIÓN
    {
        $gastos = Gasto::findOrFail($id);//ESTE ES CON ELOQUENT

        return view('gastos.edit', compact('gastos'));
    }

    public function update(GastosRequest $request, $id)//ACTUALIZA MENSAJE Y REDIRRECIONA
    {
        Gasto::findOrFail($id)->update($request->all());//ESTE ES CON ELOQUENT

        return redirect()->route('gastos.index');
    }

    public function destroy($id)
    {
        $gastos = Gasto::findOrFail($id)->delete();

        return redirect()->route('gastos.index');
    }
}
