<?php

namespace App\Http\Controllers;

use App\Http\Requests\MotivoRequest;
use App\Models\Motivo;
use Illuminate\Http\Request;

class MotivosController extends Controller
{
    public function index(Request $request)//TODOS LOS MENSAJES
    {

        $busqueda=trim($request->get('busqueda'));

        $motivos = Motivo::select("*")
        ->where('motivo','LIKE','%'.$busqueda.'%')
        ->orWhere('descripcion','LIKE','%'.$busqueda.'%')        
        ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
        
        return view('motivos.index', compact('motivos','busqueda'));

    }

    public function create()
    {
        return view('motivos.create');
    }

    public function store(MotivoRequest $request)
    {
        Motivo::create($request->all());

        return redirect()->route('motivos.index');

    }

    public function edit($id)
    {
        $motivos = Motivo::findOrFail($id);

        return view('motivos.edit', compact('motivos'));
    }

    public function update(MotivoRequest $request, $id)
    {
        Motivo::findOrFail($id)->update($request->all());

        return redirect()->route('motivos.index');
    }

    public function destroy($id)
    {
        Motivo::findOrFail($id)->delete();

        return redirect()->route('motivos.index');
    }
}
