<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentosRequest;
use App\Models\Documento;
use App\Models\Paciente;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index(Request $request)//TODOS LOS MENSAJES
    {
        $busqueda=trim($request->get('busqueda'));

        $documentos = Documento::select("*")
        ->where('id_paciente','LIKE','%'.$busqueda.'%')
        ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
        
        return view('documentos.index', compact('documentos','busqueda'));

    }


    public function create()
    {   
        $pacientes = Paciente::all();
        $documentos = Documento::all();
        return view('documentos.create', compact('documentos','pacientes'));
    }


    public function store(DocumentosRequest $request)//GUARDA MENSAJES Y REDIRECCIONA
    {
        $documentos = new Documento();
        if($request->hasFile('archivo')){
            $archivo = $request->file('archivo');
            $destino = 'imagenes';
            $nombrearchivo = time().'-'.$archivo->getClientOriginalName();
            $guardarimagen = $request->file('archivo')->move($destino, $nombrearchivo);
            $documentos->archivo=$destino.$nombrearchivo;
        }
        $documentos->comentario = $request->comentario;
        $documentos->id_paciente = $request->id_paciente;
        $documentos->save();

        return redirect()->route('documentos.index');

    }



    public function edit($id)//FORMULARIO DE EDICIÓN
    {
        $pacientes = Paciente::all();
        $documentos = Documento::findOrFail($id);//ESTE ES CON ELOQUENT

        return view('documentos.edit', compact('documentos','pacientes'));
    }

    public function update(DocumentosRequest $request, $id)//ACTUALIZA MENSAJE Y REDIRRECIONA
    {
        Documento::findOrFail($id)->update($request->all());//ESTE ES CON ELOQUENT

        return redirect()->route('documentos.index');
    }

    public function destroy($id)
    {
        Documento::findOrFail($id)->delete();

        return redirect()->route('documentos.index');
    }
}
