<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriasRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

/**
 * Class ServicioController
 * @package App\Http\Controllers
 */

class CategoriasController extends Controller
{
  

    public function index(Request $request)//TODOS LOS MENSAJES
    {

        $busqueda=trim($request->get('busqueda'));

        $categorias = Categoria::select("*")
        ->where('categoria','LIKE','%'.$busqueda.'%')
        ->orWhere('tipo','LIKE','%'.$busqueda.'%')
        ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
        
        return view('categorias.index', compact('categorias','busqueda'));

    }


    public function create()
    {   

        return view('categorias.create');
    }


    public function store(CategoriasRequest $request)
    {

        $categorias = new Categoria();
        $categorias->categoria = $request->categoria;
        $categorias->tipo = $request->tipo;
        $categorias->save();
        return redirect()->route('categorias.index');
    }



    public function edit($id)//FORMULARIO DE EDICIÓN
    {
        $categorias = Categoria::findOrFail($id);//ESTE ES CON ELOQUENT

        return view('categorias.edit', compact('categorias'));
    }

    public function update(CategoriasRequest $request, $id)//ACTUALIZA MENSAJE Y REDIRRECIONA
    {
        Categoria::findOrFail($id)->update($request->all());//ESTE ES CON ELOQUENT

        return redirect()->route('categorias.index');
    }

    public function destroy($id)
    {
        $categorias = Categoria::findOrFail($id)->delete();

        return redirect()->route('categorias.index');
    }
}
