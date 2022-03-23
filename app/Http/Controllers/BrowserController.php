<?php

namespace App\Http\Controllers;

use App\Models\Browser;
use Illuminate\Http\Request;

class BrowserController extends Controller
{
    public function index()
    {
       $navegadores = Browser::all();

       $puntos = [];
       foreach($navegadores as $navegador) {
           $puntos[] = ['name' => $navegador['nombre'], 'y' => floatval(($navegador['porcentaje']))];
       }

       return view('browsers.index', ["data" => json_encode($puntos)]);
        //$browsers = Browser::all();

        //return view('browsers.index', compact('browsers'));
    }
}
