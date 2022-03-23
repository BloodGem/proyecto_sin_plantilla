<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriasRequest;
use App\Http\Requests\GastosRequest;
use App\Http\Requests\OdontologosRequest;
use App\Models\Categoria;
use App\Models\Gasto;
use App\Models\Odontologo;
use Illuminate\Http\Request;

/**
 * Class ServicioController
 * @package App\Http\Controllers
 */

class OdontologosController extends Controller
{
  

    public function index(Request $request)//TODOS LOS MENSAJES
    {

        $busqueda=trim($request->get('busqueda'));

        $odontologos = Odontologo::select("*")
        ->where('nombre_o','LIKE','%'.$busqueda.'%')
        ->orWhere('apellido_p_o','LIKE','%'.$busqueda.'%')
        ->orWhere('apellido_m_o','LIKE','%'.$busqueda.'%')
        ->orWhere('curp_o','LIKE','%'.$busqueda.'%')
        ->orWhere('rfc_o','LIKE','%'.$busqueda.'%')
        ->orWhere('fecha_nacimiento_o','LIKE','%'.$busqueda.'%')
        ->orWhere('calle_o','LIKE','%'.$busqueda.'%')
        ->orWhere('colonia_o','LIKE','%'.$busqueda.'%')
        ->orWhere('municipio_o','LIKE','%'.$busqueda.'%')
        ->orWhere('cp_o','LIKE','%'.$busqueda.'%')
        ->orWhere('estado_o','LIKE','%'.$busqueda.'%')
        ->orWhere('telefono_o','LIKE','%'.$busqueda.'%')
        ->orWhere('celular_o','LIKE','%'.$busqueda.'%')
        ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
        
        return view('odontologos.index', compact('odontologos','busqueda'));

    }


    public function create()
    {   

        return view('odontologos.create');
    }


    public function store(OdontologosRequest $request)
    {
        Odontologo::create($request->all());
        return redirect()->route('odontologos.index');
    }



    public function edit($id)//FORMULARIO DE EDICIÓN
    {
        $odontologos = Odontologo::findOrFail($id);//ESTE ES CON ELOQUENT

        return view('odontologos.edit', compact('odontologos'));
    }

    public function update(OdontologosRequest $request, $id)//ACTUALIZA MENSAJE Y REDIRRECIONA
    {
        Odontologo::findOrFail($id)->update($request->all());//ESTE ES CON ELOQUENT

        return redirect()->route('odontologos.index');
    }

    public function destroy($id)
    {
        $odontologos = Odontologo::findOrFail($id)->delete();

        return redirect()->route('odontologos.index');
    }
}
