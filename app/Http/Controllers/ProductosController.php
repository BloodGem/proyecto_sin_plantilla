<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductosRequest;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Productos::all();

        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(ProductosRequest $request)
    {
        Productos::create($request->all());

        return redirect()->route('productos.index');

    }

    public function show($id)
    {
        $productos = Productos::findOrFail($id);

        return view('productos.show', compact('productos'));
    }

    public function edit($id)
    {
        $productos = Productos::findOrFail($id);

        return view('productos.edit', compact('productos'));
    }

    public function update(ProductosRequest $request, $id)
    {
        Productos::findOrFail($id)->update($request->all());

        return redirect()->route('productos.index');
    }

    public function destroy($id)
    {
        Productos::findOrFail($id)->delete();

        return redirect()->route('productos.index');
    }
}
