<?php

namespace App\Http\Controllers;

use App\Models\Bancos;
use App\Models\Metodo;
use App\Models\Paciente;
use App\Models\Producto;
use App\Models\Servicio;
use App\Models\Venta;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index(){
        $ventas = Venta::all();
        $servicios = Servicio::all(); // Este es la forma correcta con Eloquent de Laravel
        
    return view('carrito.index', compact('servicios','ventas'));
    }

    public function add(Request $request){

    $servicio = Servicio::find($request->producto_id);
    \Cart::add(
        $servicio->id,
        $servicio->name,
        $servicio->price,
        1
    );

    return back()->with('success',"$servicio->nombre Se ha agregado al carrito");


    }

public function cart(){
    $pacientes = Paciente::all();
    $bancos = Bancos::all();
    $metodos = Metodo::all();
    $params=[
        'title' => 'Shopping Cart Checkout',
    ];
    return view('carrito.checkout', compact('metodos','bancos','pacientes'))->with($params);
}

public function removeitem(Request $request){
   // $producto = Producto::where('id', $request->id)->firstOrFail();

    \Cart::remove([
        'id' => $request->id,
    ]);

    return back()->with('success',"El prodcuto ha sido removido de tu carrito");
}


public function clear(){
    \Cart::clear();
    return back()->with('success',"Su carrito se ha vaciado con exito");
}


public function prueba(Request $request){
 
    $venta = new Venta();
    $venta->venta = \Cart::getContent();
    $venta->metodo = $request->metodo;
    $venta->banco = $request->banco;
    $venta->estatus = $request->estatus;
    $venta->id_paciente = $request->id_paciente;
    $venta->save();
    \Cart::clear();
    return redirect()->route('carrito.index');
}




public function show(Request $request, $id){//UN MENSAJE ESPECIFICO

    $ventas = Venta::findOrFail($id); //ESTE ES CON ELOQUENT

    return view('carrito.show', compact('ventas'));


}

}
