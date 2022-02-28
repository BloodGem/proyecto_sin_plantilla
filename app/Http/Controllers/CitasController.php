<?php

namespace App\Http\Controllers;

use App\Http\Requests\CitaRequest;
use App\Http\Requests\User2Request;
use App\Http\Requests\UserRequest;
use App\Models\Cita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CitasController extends Controller
{
    
    /*function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:administrador');
    }*/

    public function index()//TODOS LOS MENSAJES
    {

       /* $usuarios = User::orderBy('users.name', request('sorted', 'ASC'))->paginate(10); // Este es la forma correcta con Eloquent de Laravel
*/
        return view('citas.index');
    }

    public function create()//FORMULARIO DE CREACIÓN
    {
        return view('citas.create');
    }

    public function store(CitaRequest $request)//GUARDA MENSAJES Y REDIRECCIONA
    {
        Cita::create($request->all());

    }

    public function show()//UN MENSAJE ESPECIFICO
    {

       $citas = Cita::all();//ESTE ES CON ELOQUENT

        return response()->json($citas);
    }

    public function edit($id)//FORMULARIO DE EDICIÓN
    {
        $citas= Cita::findOrFail($id);

        //$citas->start = Carbon::createFromFormat('Y-m-d H:i:s', $citas->start)->format('Y-m_d'); 

       // return view('citas.edit', compact('citas'));
       return response()->json($citas);
    }

    public function update(CitaRequest $request, $id)//ACTUALIZA MENSAJE Y REDIRRECIONA
    {
        $citas = Cita::findOrFail($id)->update($request->all());//ESTE ES CON ELOQUENT

        return response()->json($citas);
    }

    public function destroy($id)//ELIMINA MENSAJE Y REDIRECCIONA
    {
        $citas= Cita::findOrFail($id)->delete();
        return response()->json($citas);
    }
}
