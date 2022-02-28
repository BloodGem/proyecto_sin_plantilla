<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultoriosRequest;
use App\Models\Consultorio;
use App\Models\User;
use Illuminate\Http\Request;

class ConsultoriosController extends Controller
{

    public function index()
    {
        $consultorios = Consultorio::all();

        return view('consultorios.index', compact('consultorios'));
    }

    public function create()
    {

        $dentistas = User::all()->where('rol','Dentista');
        
        return view('consultorios.create', compact('dentistas'));
    }

    public function store(ConsultoriosRequest $request)
    {
        Consultorio::create($request->all());

        return redirect()->route('consultorios.index');

    }

    public function show($id)
    {
        $consultorio = Consultorio::findOrFail($id);

        return view('consultorios.show', compact('consultorio'));
    }

    public function edit($id)
    {
        $consultorios = Consultorio::findOrFail($id);

        return view('consultorios.edit', compact('consultorios'));
    }

    public function update(ConsultoriosRequest $request, $id)
    {
        Consultorio::findOrFail($id)->update($request->all());

        return redirect()->route('consultorios.index');
    }

    public function destroy($id)
    {
        Consultorio::findOrFail($id)->delete();

        return redirect()->route('consultorios.index');
    }
}
