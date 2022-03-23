<?php

namespace App\Http\Controllers;
use App\Http\Requests\BancosRequest;
use App\Models\Bancos;
use Illuminate\Http\Request;

class BancosController extends Controller
{
    public function index()
    {
        $bancos = Bancos::all();

        return view('bancos.index', compact('bancos'));
    }

    public function create()
    {
        return view('bancos.create');
    }

    public function store(BancosRequest $request)
    {
        Bancos::create($request->all());

        return redirect()->route('bancos.index');

    }

    public function show($id)
    {
        $bancos = Bancos::findOrFail($id);

        return view('bancos.show', compact('bancos'));
    }

    public function edit($id)
    {
        $bancos = Bancos::findOrFail($id);

        return view('bancos.edit', compact('bancos'));
    }

    public function update(BancosRequest $request, $id)
    {
        Bancos::findOrFail($id)->update($request->all());

        return redirect()->route('bancos.index');
    }

    public function destroy($id)
    {
        Bancos::findOrFail($id)->delete();

        return redirect()->route('bancos.index');
    }
}
