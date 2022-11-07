<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidoController;


use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
});

Route::view('/sobre_nosotros',"sobre_nosotros")->name('sobre_nosotros');
Route::view('/sobre_producto',"sobre_producto")->name('sobre_producto');
Route::view('/cotizar',"pedido.cotizar_pedido")->name('cotizar');

Route::view('/contacto',"contacto")->name('contacto');

Route::view('/crear-pedido',"pedido.crear_pedido")->name('pedido');

//Route::view('/privada',"secret")->name('privada'); //SOLO SI SE HA INICIADO CORRECTAMENTE LA SESION PODRA VERT ESTA PESTAÑA

Route::get('/pedido', function () {
    return view('pedido.index');
});


//para acceder a todas los metodos de cliente de dorma automatizada comprobar con el comando "php artisan route::list"
Route::resource('pedido',PedidoController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
