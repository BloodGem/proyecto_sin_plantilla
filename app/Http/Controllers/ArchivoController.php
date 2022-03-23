<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArchivosRequest;
use App\Models\Archivo;
use App\Models\Paciente;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{

    public function index(Request $request)//TODOS LOS MENSAJES
    {
        $busqueda=trim($request->get('busqueda'));

        $archivos = Archivo::select("*")
        ->where('id_paciente','LIKE','%'.$busqueda.'%')
        ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
        
        return view('archivos.index', compact('archivos','busqueda'));

    }


    public function create()
    {   
        $pacientes = Paciente::all();
        return view('archivos.create', compact('pacientes'));
    }


    public function store(ArchivosRequest $request)//GUARDA MENSAJES Y REDIRECCIONA
    {
        $archivos = new Archivo();
        if($request->hasFile('archivo')){
            $archivo = $request->file('archivo');
            $destino = 'imagenes';
            $nombrearchivo = time().'-'.$archivo->getClientOriginalName();
            $guardarimagen = $request->file('archivo')->move($destino, $nombrearchivo);
            $archivos->archivo=$destino.$nombrearchivo;
        }
        $archivos->comentario = $request->comentario;
        $archivos->id_paciente = $request->id_paciente;
        $archivos->save();

    }



    public function edit($id)//FORMULARIO DE EDICIÓN
    {
        $archivos = Archivo::findOrFail($id);//ESTE ES CON ELOQUENT

        return view('archivos.edit', compact('archivos'));
    }

    public function update(ArchivosRequest $request, $id)//ACTUALIZA MENSAJE Y REDIRRECIONA
    {
        Archivo::findOrFail($id)->update($request->all());//ESTE ES CON ELOQUENT

        return redirect()->route('archivos.index');
    }

    public function destroy($id)
    {
        Archivo::findOrFail($id)->delete();

        return redirect()->route('archivos.index');
    }
}
