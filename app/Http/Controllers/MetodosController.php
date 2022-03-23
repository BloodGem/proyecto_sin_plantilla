<?php

namespace App\Http\Controllers;
use App\Http\Requests\MetodosRequest;
use App\Models\Metodo;
use Illuminate\Http\Request;

class MetodosController extends Controller
{
    public function index()
    {
        $metodos = Metodo::all();

        return view('metodos.index', compact('metodos'));
    }

    public function create()
    {
        return view('metodos.create');
    }

    public function store(MetodosRequest $request)
    {
        Metodo::create($request->all());

        return redirect()->route('metodos.index');

    }

    public function show($id)
    {
        $metodos = Metodo::findOrFail($id);

        return view('metodos.show', compact('metodos'));
    }

    public function edit($id)
    {
        $metodos = Metodo::findOrFail($id);

        return view('metodos.edit', compact('metodos'));
    }

    public function update(MetodosRequest $request, $id)
    {
        Metodo::findOrFail($id)->update($request->all());

        return redirect()->route('metodos.index');
    }

    public function destroy($id)
    {
        Metodo::findOrFail($id)->delete();

        return redirect()->route('metodos.index');
    }
}
