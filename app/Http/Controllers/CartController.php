<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Servicio;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index(){
        $servicios = Servicio::all(); // Este es la forma correcta con Eloquent de Laravel

    return view('carrito.index', compact('servicios'));
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


    /*
    $id_usuario = auth()->user()->id;
        \Cart::session($id_usuario)->add(array(
            'id' => $producto->id,
            'name' => $producto->name,
            'price' => $producto->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $producto
        ));*/
    }

public function cart(){
    $params=[
        'title' => 'Shopping Cart Checkout',
    ];
    return view('carrito.checkout')->with($params);
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
}
