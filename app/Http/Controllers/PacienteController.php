<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Models\Cita;
use App\Models\Ficha;
use App\Models\Paciente;
use App\Models\Venta;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
  

    public function index(Request $request)//TODOS LOS MENSAJES
    {

        $busqueda=trim($request->get('busqueda'));

        $pacientes = Paciente::select("*")
        ->where('nombre','LIKE','%'.$busqueda.'%')
        ->orWhere('apellido_p','LIKE','%'.$busqueda.'%')
        ->orWhere('apellido_m','LIKE','%'.$busqueda.'%')
        ->orWhere('curp','LIKE','%'.$busqueda.'%')
        ->orWhere('rfc','LIKE','%'.$busqueda.'%')
        ->orWhere('fecha_nacimiento','LIKE','%'.$busqueda.'%')
        ->orWhere('calle','LIKE','%'.$busqueda.'%')
        ->orWhere('colonia','LIKE','%'.$busqueda.'%')
        ->orWhere('municipio','LIKE','%'.$busqueda.'%')
        ->orWhere('cp','LIKE','%'.$busqueda.'%')
        ->orWhere('estado','LIKE','%'.$busqueda.'%')
        ->orWhere('telefono','LIKE','%'.$busqueda.'%')
        ->orWhere('celular','LIKE','%'.$busqueda.'%')
        ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
        
        return view('pacientes.index', compact('pacientes','busqueda'));

    }


    public function create()
    {   

        return view('pacientes.create');
    }


    public function store(PacienteRequest $request)
    {
        Paciente::create($request->all());
        return redirect()->route('pacientes.index');
    }

    public function show(Request $request, $id){//UN MENSAJE ESPECIFICO

        $pacientes = Paciente::findOrFail($id); //ESTE ES CON ELOQUENT

        $busqueda=trim($request->get('busqueda'));
        $busqueda2=trim($request->get('busqueda2'));
        $busqueda3=trim($request->get('busqueda3'));

        if($busqueda=trim($request->get('busqueda')) ?? $busqueda2="" ?? $busqueda3=""){

            $fichas = Ficha::select("*")
            ->where('created_at','LIKE','%'.$busqueda.'%')
            ->whereIn('id_paciente', [$id])
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);

            $ventas = Venta::select("*")
            ->where('id_paciente', $id)
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);

            $citas = Cita::select("*")
            ->where('id_paciente', $id)
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
    
            return view('pacientes.show', compact('pacientes','fichas','citas','ventas','busqueda','busqueda2','busqueda3'));
        }
        elseif($busqueda2=trim($request->get('busqueda2')) ?? $busqueda="" ?? $busqueda3=""){

            $citas = Cita::select("*")
            ->where('created_at','LIKE','%'.$busqueda2.'%')
            ->whereIn('id_paciente', [$id])
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);

            $ventas = Venta::select("*")
            ->where('id_paciente', $id)
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);

            $fichas = Ficha::select("*")
            ->where('id_paciente', $id)
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
    
            return view('pacientes.show', compact('pacientes','fichas','citas','ventas','busqueda','busqueda2','busqueda3'));
        }
        elseif($busqueda3=trim($request->get('busqueda3')) ?? $busqueda="" ?? $busqueda2=""){

            $ventas = Venta::select("*")
            ->where('created_at','LIKE','%'.$busqueda3.'%')
            ->orWhere('updated_at','LIKE','%'.$busqueda3.'%')
            ->whereIn('id_paciente', [$id])
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);

            $fichas = Ficha::select("*")
            ->where('id_paciente', $id)
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);

            $citas = Cita::select("*")
            ->where('id_paciente', $id)
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
    
            return view('pacientes.show', compact('pacientes','fichas','citas','ventas','busqueda','busqueda2','busqueda3'));
        }
        else{
            $fichas = Ficha::select("*")
            ->where('id_paciente', $id)
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);

            $citas = Cita::select("*")
            ->where('id_paciente', $id)
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);

            $ventas = Venta::select("*")
            ->where('id_paciente', $id)
            ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
        
            return view('pacientes.show', compact('pacientes','fichas','citas','ventas','busqueda','busqueda2','busqueda3'));
        }

    }

    public function edit($id)//FORMULARIO DE EDICIÓN
    {
        $pacientes = Paciente::findOrFail($id);//ESTE ES CON ELOQUENT

        return view('pacientes.edit', compact('pacientes'));
    }

    public function update(PacienteRequest $request, $id)//ACTUALIZA MENSAJE Y REDIRRECIONA
    {
        Paciente::findOrFail($id)->update($request->all());//ESTE ES CON ELOQUENT

        return redirect()->route('pacientes.index');
    }

    public function destroy($id)
    {
        $pacientes = Paciente::findOrFail($id)->delete();

        return redirect()->route('pacientes.index');
    }
}
