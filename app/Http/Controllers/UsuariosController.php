<?php

namespace App\Http\Controllers;

use App\Http\Requests\User2Request;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;

class UsuariosController extends Controller
{
    
    /*function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:administrador');
    }*/

    public function index(Request $request)//TODOS LOS MENSAJES
    {

        $busqueda=trim($request->get('busqueda'));

        $usuarios = User::select("*")
        ->where('name','LIKE','%'.$busqueda.'%')
        ->orWhere('apellido_p','LIKE','%'.$busqueda.'%')
        ->orWhere('apellido_m','LIKE','%'.$busqueda.'%')
        ->orWhere('curp','LIKE','%'.$busqueda.'%')
        ->orWhere('rfc','LIKE','%'.$busqueda.'%')
        ->orWhere('fecha_nacimiento','LIKE','%'.$busqueda.'%')
        ->orWhere('calle','LIKE','%'.$busqueda.'%')
        ->orWhere('colonia','LIKE','%'.$busqueda.'%')
        ->orWhere('municipio','LIKE','%'.$busqueda.'%')
        ->orWhere('cp','LIKE','%'.$busqueda.'%')
        ->orWhere('estatus','LIKE','%'.$busqueda.'%')
        ->orWhere('rol','LIKE','%'.$busqueda.'%')
        ->orWhere('email','LIKE','%'.$busqueda.'%')
        ->orderBy('created_at', request('sorted', 'DESC'))->paginate(10);
        
        return view('usuarios.index', compact('usuarios','busqueda'));

    }

    public function create()//FORMULARIO DE CREACIÓN
    {

        $roles = Role::all();
        return view('usuarios.create', compact('roles'));
    }

    public function store(UserRequest $request)//GUARDA MENSAJES Y REDIRECCIONA
    {
        $usuarios = new User();
        if($request->hasFile('imagen')){
            $archivo = $request->file('imagen');
            $destino = 'imagenes/usuarios/';
            $nombreimagen = time().'-'.$archivo->getClientOriginalName();
            $guardarimagen = $request->file('imagen')->move($destino, $nombreimagen);
            $usuarios->imagen=$destino.$nombreimagen;
        }
        $usuarios->name = $request->name;
        $usuarios->apellido_p = $request->apellido_p;
        $usuarios->apellido_m = $request->apellido_m;
        $usuarios->fecha_nacimiento = $request->fecha_nacimiento;
        $usuarios->rfc = $request->rfc;
        $usuarios->curp = $request->curp;
        $usuarios->calle = $request->calle;
        $usuarios->num_ext = $request->num_ext;
        $usuarios->num_int = $request->num_int;
        $usuarios->colonia = $request->colonia;
        $usuarios->cp = $request->cp;
        $usuarios->municipio = $request->municipio;
        $usuarios->email= $request->email;
        $usuarios->rol = $request->rol;
        $usuarios->estatus = $request->estatus;
        $usuarios-> password = Hash::make($request->password);
        $usuarios->save();

return redirect()->route('usuarios.index');
     
    }

    public function show($id){//UN MENSAJE ESPECIFICO

        $user = User::findOrFail($id); //ESTE ES CON ELOQUENT

        return view('usuarios.show', compact('user'));
    }

    public function edit($id)//FORMULARIO DE EDICIÓN
    {
        $user = User::findOrFail($id);//ESTE ES CON ELOQUENT

        return view('usuarios.edit', compact('user'));
    }

    public function update(User2Request $request, $id)//ACTUALIZA MENSAJE Y REDIRRECIONA
    {
        User::findOrFail($id)->update($request->all());//ESTE ES CON ELOQUENT

        return redirect()->route('usuarios.index');
    }

    public function destroy($id)//ELIMINA MENSAJE Y REDIRECCIONA
    {
        User::findOrFail($id)->delete();//ESTE ES CON ELOQUENT

        return redirect()->route('usuarios.index');
    }
}
