<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

/**
 * Class ServicioController
 * @package App\Http\Controllers
 */

class ServicioController extends Controller
{
  

    public function index(Request $request)//TODOS LOS MENSAJES
    {

        $busqueda=trim($request->get('busqueda'));

        $serv = Servicio::select("*")
        ->where('id_categoria',1)
        ->where('name','LIKE','%'.$busqueda.'%')
        ->orWhere('description','LIKE','%'.$busqueda.'%')
        ->orWhere('price','LIKE','%'.$busqueda.'%')
        
        ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
        
        return view('servicios.index', compact('serv','busqueda'));

    }


    public function create()
    {   

        $servi = new Servicio();
        return view('servicios.create', compact('servi'));
    }


    public function store(Request $request)
    { 
        $serv2 = new servicio();
        $serv2->name = $request->name;
        $serv2->description = $request->description;
        $serv2->price = $request->price;
        $serv2->id_categoria = $request->id_categoria;
        $serv2->save();
        return redirect()->route('servicios.index')
            ->with('success', 'Service created successfully.');
    }


    public function show($id)
    {
        $servi = Servicio::find($id);

        return view('servicios.show', compact('servi'));
    }


    public function edit($id)
    {
        $servi = Servicio::find($id);

        return view('servicios.edit', compact('servi'));
    }

    public function update(Request $request, $id)
    {

        $servicio_update = Servicio::find($id);
        $servicio_update->name = $request->input('name');
        $servicio_update->description = $request->input('description');
        $servicio_update->price = $request->input('price');
        $servicio_update->id_categoria = $request->input('id_categoria');
        $servicio_update->save();
        return redirect()->route('servicios.index');
    }

    public function destroy($id)
    {
        $ser = Servicio::findOrFail($id)->delete();

        return redirect()->route('servicios.index');
    }
}
