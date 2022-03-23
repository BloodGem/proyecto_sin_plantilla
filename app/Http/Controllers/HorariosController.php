<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriasRequest;
use App\Http\Requests\GastosRequest;
use App\Http\Requests\HorariosRequest;
use App\Http\Requests\OdontologosRequest;
use App\Models\Categoria;
use App\Models\Gasto;
use App\Models\Horario;
use App\Models\Odontologo;
use Illuminate\Http\Request;

/**
 * Class ServicioController
 * @package App\Http\Controllers
 */

class HorariosController extends Controller
{
  

    public function index(Request $request)//TODOS LOS MENSAJES
    {


        $horarios = Horario::all()->where('id_odontologo',1);
       
        
        return view('horarios.index', compact('horarios'));

    }


    public function create()
    {   

        return view('horarios.create');
    }


    public function store(HorariosRequest $request)
    {
        Horario::create($request->all());
        return redirect()->route('horarios.index');
    }



    public function edit($id)//FORMULARIO DE EDICIÓN
    {
        $horarios = Horario::findOrFail($id);//ESTE ES CON ELOQUENT

        return view('horarios.edit', compact('horarios'));
    }

    public function update(HorariosRequest $request, $id)//ACTUALIZA MENSAJE Y REDIRRECIONA
    {
        Horario::findOrFail($id)->update($request->all());//ESTE ES CON ELOQUENT

        return redirect()->route('horarios.index');
    }

    public function destroy($id)
    {
        $horarios = Horario::findOrFail($id)->delete();

        return redirect()->route('horarios.index');
    }
}
