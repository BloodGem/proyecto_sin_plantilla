<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichaRequest;
use App\Models\Ficha;
use App\Models\Motivo;
use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;

class FichasController extends Controller
{
    public function index(Request $request)
    {   
        $busqueda=trim($request->get('busqueda'));

        $fichas = Ficha::select("*")
        ->where('id_paciente','LIKE','%'.$busqueda.'%')
        ->orWhere('motivo','LIKE','%'.$busqueda.'%')
        ->orWhere('created_at','LIKE','%'.$busqueda.'%')
        ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
        
        return view('fichas.index', compact('fichas','busqueda'));
    }

    public function create()
    {   
        $motivos = Motivo::all();
        $pacientes = Paciente::all();
        return view('fichas.create', compact('motivos','pacientes'));
    }

    public function store(FichaRequest $request)//GUARDA MENSAJES Y REDIRECCIONA
    {


        $fecha = date('Y-m-d');
        $count = DB::table('fichas')->whereDate('created_at', $fecha)->count();
        $count2 = $count + 1;
        $fichas = new Ficha();
        $fichas->id_paciente= $request->id_paciente;
        $fichas->motivo = $request->motivo;

        if($fichas->save()){


            $impresora = "impresora de tickets";

            $conector = new WindowsPrintConnector($impresora);

            $printer = new Printer($conector);

            $printer -> setJustification(Printer::JUSTIFY_CENTER);
            $printer -> setTextSize(2, 1);
            $printer -> text("SYSTEMAR"."\n");//Nombre de la empresa
            $printer -> feed(1); //Alimentamos el papel 1 vez*/
            $printer -> setTextSize(1, 1);
            $printer -> text(date("d-m-Y H:i:s")."\n");//Fecha de la factura
            $printer -> feed(1); //Alimentamos el papel 1 vez*/

            $printer -> setTextSize(2, 2);
            $printer -> text("$fichas->motivo"."\n");
            $printer -> setTextSize(5, 5);

            $printer -> text("Turno no.$count2"."\n");//Nombre de la empresa

            $printer -> feed(3); //Alimentamos el papel 1 vez*/	
            
            $printer -> close();

            return redirect()->route('fichas.index');
        }
        
    }

    public function destroy($id)
    {
        $fichas = Ficha::findOrFail($id)->delete();

        return redirect()->route('fichas.index');
    }
}
