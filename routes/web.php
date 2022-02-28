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



Route::get('/', [App\Http\Controllers\ProductoController::class, 'index'])->name('home');

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

Auth::routes();