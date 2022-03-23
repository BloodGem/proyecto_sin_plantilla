<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/plantilla', function () {
    return view('plantilla');
});



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('usuarios/create', ['as' => 'usuarios.create', 'uses' => 'App\\Http\\Controllers\\UsuariosController@create']);
Route::post('usuarios', ['as' => 'usuarios.store', 'uses' => 'App\\Http\\Controllers\\UsuariosController@store']);
Route::get('usuarios', ['as' => 'usuarios.index', 'uses' => 'App\\Http\\Controllers\\UsuariosController@index']);
Route::get('usuarios/{id}', ['as' => 'usuarios.show', 'uses' => 'App\\Http\\Controllers\\UsuariosController@show']);
Route::get('usuarios/{id}/edit', ['as' => 'usuarios.edit', 'uses' => 'App\\Http\\Controllers\\UsuariosController@edit']);
Route::put('usuarios/{id}', ['as' => 'usuarios.update', 'uses' => 'App\\Http\\Controllers\\UsuariosController@update']);
Route::delete('usuarios/{id}', ['as' => 'usuarios.destroy', 'uses' => 'App\\Http\\Controllers\\UsuariosController@destroy']);

//RUTAS PARA LOGIN Y REGISTRARSE
Route::get('login','App\\Http\\Controllers\\Auth\\LoginController@showLoginForm');
Route::post('login','App\\Http\\Controllers\\Auth\\LoginController@login');
Route::get('logout','App\\Http\\Controllers\\Auth\\LoginController@logout');

//RUTAS PARA LOS ARANCELES
Route::get('categorias/create', ['as' => 'categorias.create', 'uses' => 'App\\Http\\Controllers\\CategoriasController@create']);
Route::post('categorias', ['as' => 'categorias.store', 'uses' => 'App\\Http\\Controllers\\CategoriasController@store']);
Route::get('categorias', ['as' => 'categorias.index', 'uses' => 'App\\Http\\Controllers\\CategoriasController@index']);
Route::get('categorias/{id}/edit', ['as' => 'categorias.edit', 'uses' => 'App\\Http\\Controllers\\CategoriasController@edit']);
Route::put('categorias/{id}', ['as' => 'categorias.update', 'uses' => 'App\\Http\\Controllers\\CategoriasController@update']);
Route::delete('categorias/{id}', ['as' => 'categorias.destroy', 'uses' => 'App\\Http\\Controllers\\CategoriasController@destroy']);

//RUTAS PARA LOS GAstos
Route::get('gastos/create', ['as' => 'gastos.create', 'uses' => 'App\\Http\\Controllers\\GastosController@create']);
Route::post('gastoscategorias', ['as' => 'gastos.store', 'uses' => 'App\\Http\\Controllers\\GastosController@store']);
Route::get('gastos', ['as' => 'gastos.index', 'uses' => 'App\\Http\\Controllers\\GastosController@index']);
Route::get('gastos/{id}/edit', ['as' => 'gastos.edit', 'uses' => 'App\\Http\\Controllers\\GastosController@edit']);
Route::put('gastos/{id}', ['as' => 'gastos.update', 'uses' => 'App\\Http\\Controllers\\GastosController@update']);
Route::delete('gastos/{id}', ['as' => 'gastos.destroy', 'uses' => 'App\\Http\\Controllers\\GastosController@destroy']);


//RUTAS PARA LOS SERVICIOS
Route::get('sevicios/create', ['as' => 'servicios.create', 'uses' => 'App\\Http\\Controllers\\ServicioController@create']);
Route::post('servicios', ['as' => 'servicios.store', 'uses' => 'App\\Http\\Controllers\\ServicioController@store']);
Route::get('servicios', ['as' => 'servicios.index', 'uses' => 'App\\Http\\Controllers\\ServicioController@index']);
Route::get('servicios/{id}', ['as' => 'servicios.show', 'uses' => 'App\\Http\\Controllers\\ServicioController@show']);
Route::get('servicios/{id}/edit', ['as' => 'servicios.edit', 'uses' => 'App\\Http\\Controllers\\ServicioController@edit']);
Route::put('servicios/{id}', ['as' => 'servicios.update', 'uses' => 'App\\Http\\Controllers\\ServicioController@update']);
Route::delete('servicios/{id}', ['as' => 'servicios.destroy', 'uses' => 'App\\Http\\Controllers\\ServicioController@destroy']);


//RUTAS PARA TODO EL CRUD DE PACIENTES
Route::get('pacientes/create', ['as' => 'pacientes.create', 'uses' => 'App\\Http\\Controllers\\PacienteController@create']);
Route::post('pacientes', ['as' => 'pacientes.store', 'uses' => 'App\\Http\\Controllers\\PacienteController@store']);
Route::get('pacientes', ['as' => 'pacientes.index', 'uses' => 'App\\Http\\Controllers\\PacienteController@index']);
Route::get('pacientes/{id}', ['as' => 'pacientes.show', 'uses' => 'App\\Http\\Controllers\\PacienteController@show']);
Route::get('pacientes/{id}/edit', ['as' => 'pacientes.edit', 'uses' => 'App\\Http\\Controllers\\PacienteController@edit']);
Route::put('pacientes/{id}', ['as' => 'pacientes.update', 'uses' => 'App\\Http\\Controllers\\PacienteController@update']);
Route::delete('pacientes/{id}', ['as' => 'pacientes.destroy', 'uses' => 'App\\Http\\Controllers\\PacienteController@destroy']);

//RUTAS PARA TODO EL CRUD DE ODONTÓLOGOS
Route::get('odontologos/create', ['as' => 'odontologos.create', 'uses' => 'App\\Http\\Controllers\\OdontologosController@create']);
Route::post('odontologos', ['as' => 'odontologos.store', 'uses' => 'App\\Http\\Controllers\\OdontologosController@store']);
Route::get('odontologos', ['as' => 'odontologos.index', 'uses' => 'App\\Http\\Controllers\\OdontologosController@index']);
Route::get('odontologos/{id}', ['as' => 'odontologos.show', 'uses' => 'App\\Http\\Controllers\\OdontologosController@show']);
Route::get('odontologos/{id}/edit', ['as' => 'odontologos.edit', 'uses' => 'App\\Http\\Controllers\\OdontologosController@edit']);
Route::put('odontologos/{id}', ['as' => 'odontologos.update', 'uses' => 'App\\Http\\Controllers\\OdontologosController@update']);
Route::delete('odontologos/{id}', ['as' => 'odontologos.destroy', 'uses' => 'App\\Http\\Controllers\\OdontologosController@destroy']);

//RUTAS PARA TODO EL CRUD DE ODONTÓLOGOS
Route::get('horarios/create', ['as' => 'horarios.create', 'uses' => 'App\\Http\\Controllers\\HorariosController@create']);
Route::post('horarios', ['as' => 'horarios.store', 'uses' => 'App\\Http\\Controllers\\HorariosController@store']);
Route::get('horarios', ['as' => 'horarios.index', 'uses' => 'App\\Http\\Controllers\\HorariosController@index']);
Route::get('horarios/{id}/edit', ['as' => 'horarios.edit', 'uses' => 'App\\Http\\Controllers\\HorariosController@edit']);
Route::put('horarios/{id}', ['as' => 'horarios.update', 'uses' => 'App\\Http\\Controllers\\HorariosController@update']);
Route::delete('horarios/{id}', ['as' => 'horarios.destroy', 'uses' => 'App\\Http\\Controllers\\HorariosController@destroy']);

//RUTAS PARA TODO EL CRUD DE ROLES
Route::get('roles/create', ['as' => 'roles.create', 'uses' => 'App\\Http\\Controllers\\RoleController@create']);
Route::post('roles', ['as' => 'roles.store', 'uses' => 'App\\Http\\Controllers\\RoleController@store']);
Route::get('roles', ['as' => 'roles.index', 'uses' => 'App\\Http\\Controllers\\RoleController@index']);
Route::get('roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'App\\Http\\Controllers\\RoleController@edit']);
Route::put('roles/{id}', ['as' => 'roles.update', 'uses' => 'App\\Http\\Controllers\\RoleController@update']);
Route::delete('roles/{id}', ['as' => 'roles.destroy', 'uses' => 'App\\Http\\Controllers\\RoleController@destroy']);

//RUTAS PARA TODO EL CRUD DE CITAS
Route::post('citas/create', ['as' => 'citas.create', 'uses' => 'App\\Http\\Controllers\\CitasController@create']);
Route::post('citas/store', ['as' => 'citas.store', 'uses' => 'App\\Http\\Controllers\\CitasController@store']);
Route::get('citas', ['as' => 'citas.index', 'uses' => 'App\\Http\\Controllers\\CitasController@index']);
Route::post('citas/show', ['as' => 'citas.show', 'uses' => 'App\\Http\\Controllers\\CitasController@show']);
Route::post('citas/edit/{id}', ['as' => 'citas.edit', 'uses' => 'App\\Http\\Controllers\\CitasController@edit']);
Route::post('citas/update/{id}', ['as' => 'citas.update', 'uses' => 'App\\Http\\Controllers\\CitasController@update']);
Route::post('citas/destroy/{id}', ['as' => 'citas.destroy', 'uses' => 'App\\Http\\Controllers\\CitasController@destroy']);

//RUTAS PARA LAS FICHAS
Route::get('fichas/create', ['as' => 'fichas.create', 'uses' => 'App\\Http\\Controllers\\FichasController@create']);
Route::post('fichas/store', ['as' => 'fichas.store', 'uses' => 'App\\Http\\Controllers\\FichasController@store']);
Route::get('fichas', ['as' => 'fichas.index', 'uses' => 'App\\Http\\Controllers\\FichasController@index']);
Route::delete('fichas/destroy/{id}', ['as' => 'fichas.destroy', 'uses' => 'App\\Http\\Controllers\\FichasController@destroy']);


//RUTAS PARA TODO EL CRUD DE CONSULTORIOS
Route::get('consultorios', ['as' => 'consultorios.index', 'uses' => 'App\Http\Controllers\ConsultoriosController@index']);
Route::get('consultorios/create', ['as' => 'consultorios.create', 'uses' => 'App\Http\Controllers\ConsultoriosController@create']);
Route::post('consultorios', ['as' => 'consultorios.store', 'uses' => 'App\Http\Controllers\ConsultoriosController@store']);
Route::get('consultorios/{id}/edit', ['as' => 'consultorios.edit', 'uses' => 'App\Http\Controllers\ConsultoriosController@edit']);
Route::put('consultorios/{id}', ['as' => 'consultorios.update', 'uses' => 'App\Http\Controllers\ConsultoriosController@update']);
Route::delete('consultorios/{id}', ['as' => 'consultorios.destroy', 'uses' => 'App\Http\Controllers\ConsultoriosController@destroy']);


//RUTAS PARA EL CARRITO DE COMPRAS

Route::get('carrito', ['as' => 'carrito.index', 'uses' => 'App\Http\Controllers\CartController@index']);
Route::post('carrito/cart-add', ['as' => 'carrito.add', 'uses' => 'App\\Http\\Controllers\\CartController@add']);
Route::get('carrito/checkout', ['as' => 'carrito.checkout', 'uses' => 'App\\Http\\Controllers\\CartController@cart']);
Route::post('carrito/cart-clear', ['as' => 'carrito.clear', 'uses' => 'App\\Http\\Controllers\\CartController@clear']);
Route::post('carrito/cart-removeitem', ['as' => 'carrito.removeitem', 'uses' => 'App\\Http\\Controllers\\CartController@removeitem']);
Route::post('carrito/prueba', ['as' => 'carrito.prueba', 'uses' => 'App\\Http\\Controllers\\CartController@prueba']);
Route::get('carrito/{id}', ['as' => 'carrito.show', 'uses' => 'App\\Http\\Controllers\\CartController@show']);


Route::get('productos', ['as' => 'productos.index', 'uses' => 'App\Http\Controllers\ProductosController@index']);
Route::get('productos/create', ['as' => 'productos.create', 'uses' => 'App\Http\Controllers\ProductosController@create']);
Route::post('productos', ['as' => 'productos.store', 'uses' => 'App\Http\Controllers\ProductosController@store']);
Route::get('productos/{id}/edit', ['as' => 'productos.edit', 'uses' => 'App\Http\Controllers\ProductosController@edit']);
Route::put('productos/{id}', ['as' => 'productos.update', 'uses' => 'App\Http\Controllers\ProductosController@update']);
Route::delete('productos/{id}', ['as' => 'productos.destroy', 'uses' => 'App\Http\Controllers\ProductosController@destroy']);

//RUTAS PARA TODO EL CRUD DE MOTIVOS
Route::get('motivos', ['as' => 'motivos.index', 'uses' => 'App\Http\Controllers\MotivosController@index']);
Route::get('motivos/create', ['as' => 'motivos.create', 'uses' => 'App\Http\Controllers\MotivosController@create']);
Route::post('motivos', ['as' => 'motivos.store', 'uses' => 'App\Http\Controllers\MotivosController@store']);
Route::get('motivos/{id}/edit', ['as' => 'motivos.edit', 'uses' => 'App\Http\Controllers\MotivosController@edit']);
Route::put('motivos/{id}', ['as' => 'motivos.update', 'uses' => 'App\Http\Controllers\MotivosController@update']);
Route::delete('motivos/{id}', ['as' => 'motivos.destroy', 'uses' => 'App\Http\Controllers\MotivosController@destroy']);

//RUTAS PARA TODO EL CRUD DE AGENDA
Route::get('agenda', ['as' => 'agenda.index', 'uses' => 'App\Http\Controllers\AgendaController@index']);
Route::get('agenda/create', ['as' => 'agenda.create', 'uses' => 'App\Http\Controllers\AgendaController@create']);
Route::post('agenda', ['as' => 'agenda.store', 'uses' => 'App\Http\Controllers\AgendaController@store']);
Route::get('agenda/{id}/edit', ['as' => 'agenda.edit', 'uses' => 'App\Http\Controllers\AgendaController@edit']);
Route::put('agenda/{id}', ['as' => 'agenda.update', 'uses' => 'App\Http\Controllers\AgendaController@update']);
Route::delete('agenda/{id}', ['as' => 'agenda.destroy', 'uses' => 'App\Http\Controllers\AgendaController@destroy']);

//RUTAS PARA TODO EL CRUD DE METODOS
Route::get('metodos', ['as' => 'metodos.index', 'uses' => 'App\Http\Controllers\MetodosController@index']);
Route::get('metodos/create', ['as' => 'metodos.create', 'uses' => 'App\Http\Controllers\MetodosController@create']);
Route::post('metodos', ['as' => 'metodos.store', 'uses' => 'App\Http\Controllers\MetodosController@store']);
Route::get('metodos/{id}/edit', ['as' => 'metodos.edit', 'uses' => 'App\Http\Controllers\MetodosController@edit']);
Route::put('metodos/{id}', ['as' => 'metodos.update', 'uses' => 'App\Http\Controllers\MetodosController@update']);
Route::delete('metodos/{id}', ['as' => 'metodos.destroy', 'uses' => 'App\Http\Controllers\MetodosController@destroy']);

//RUTAS PARA TODO EL CRUD DE BANCOS
Route::get('bancos', ['as' => 'bancos.index', 'uses' => 'App\Http\Controllers\BancosController@index']);
Route::get('bancos/create', ['as' => 'bancos.create', 'uses' => 'App\Http\Controllers\BancosController@create']);
Route::post('bancos', ['as' => 'bancos.store', 'uses' => 'App\Http\Controllers\BancosController@store']);
Route::get('bancos/{id}/edit', ['as' => 'bancos.edit', 'uses' => 'App\Http\Controllers\BancosController@edit']);
Route::put('bancos/{id}', ['as' => 'bancos.update', 'uses' => 'App\Http\Controllers\BancosController@update']);
Route::delete('bancos/{id}', ['as' => 'bancos.destroy', 'uses' => 'App\Http\Controllers\BancosController@destroy']);

//RUTAS PARA LOS DOCUMENTOS
Route::get('documentos', ['as' => 'documentos.index', 'uses' => 'App\Http\Controllers\DocumentoController@index']);
Route::get('documentos/create', ['as' => 'documentos.create', 'uses' => 'App\Http\Controllers\DocumentoController@create']);
Route::post('documentos', ['as' => 'documentos.store', 'uses' => 'App\Http\Controllers\DocumentoController@store']);
Route::get('documentos/{id}/edit', ['as' => 'documentos.edit', 'uses' => 'App\Http\Controllers\DocumentoController@edit']);
Route::put('documentos/{id}', ['as' => 'documentos.update', 'uses' => 'App\Http\Controllers\DocumentoController@update']);
Route::delete('documentos/{id}', ['as' => 'documentos.destroy', 'uses' => 'App\Http\Controllers\DocumentoController@destroy']);

Route::get('browsers', ['as' => 'browsers.index', 'uses' => 'App\Http\Controllers\BrowserController@index']);

Auth::routes();