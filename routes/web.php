<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;

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

Route::view('/inicio',"welcome")->name('inicio');
Route::view('/sobre_nosotros',"sobre_nosotros")->name('sobre_nosotros');
Route::view('/sobre_producto',"sobre_producto")->name('sobre_producto');
//Route::view('/cotizar',"pedido.cotizar_pedido")->name('cotizar');
//Route::view('/cotizar/orden',"pedido.cotizar_pedido")->name('cotizar/orden');
Route::view('/contacto',"contacto")->name('contacto');

Route::view('/crear-pedido',"pedido.crear_pedido")->name('pedido');

//Route::view('/pago-status',"pedido.pagostatus")->name('pago-status');


Route::view('admin/sobre_nosotros',"admin.editar_sobre_nosotros")->name('admin/sobre_nosotros');
//Route::view('/privada',"secret")->name('privada'); //SOLO SI SE HA INICIADO CORRECTAMENTE LA SESION PODRA VERT ESTA PESTAÑA

Route::get('cotizar/pdf/',[App\Http\Controllers\CotizacionController::class,'pdf'])->name('cotizar.pdf');


Route::get('/cotizar', [App\Http\Controllers\CotizacionController::class, 'cotizar'])->name('cotizar');
Route::post('/cotizar', [App\Http\Controllers\CotizacionController::class, 'cotizar'])->name('cotizar');

//payment

Route::post('/pago',[App\Http\Controllers\PaymentController::class,'payWithPayPal'])->name('pago');
Route::get('/pago',[App\Http\Controllers\PaymentController::class,'payWithPayPal'])->name('pago');
//Estado
Route::post('/status',[App\Http\Controllers\PaymentController::class,'payPalStatus'])->name('status');
Route::get('/status',[App\Http\Controllers\PaymentController::class,'payPalStatus'])->name('status');

//resultados

Route::get('/pago-status', function () {
    return view('pedido.pagostatus');
});

//NEW
Route::get('/pedidos', function () {
    $pedidos = DB::table('pedido')->where('status_pago', '==', '0')->paginate(3);
    $edo = DB::table('pedido')->value('estado');
    $cantidad = DB::table('pedido')->value('cantidad');
    $modalidad = DB::table('pedido')->value('modalidad');
    $precio=DB::table('limones')->value('precio');
    //$monto=DB::table('estados')->value('monto');
    $monto=DB::table('estados')->select('monto')->where('estado', 'like', $edo )->get();
    settype( $monto, "string");
    $total=(($modalidad * ($cantidad * $precio)));
  

    return view('pedido.pedido')->with('pedidos', $pedidos)->with('total', $total)->with('monto', $monto);
})->middleware('auth')->name('pedidos');

Route::get('/pedido', function () {
    return view('pedido.index');
});

//Ruta para eliminar-cancelar pedidos
//Route::delete('mis_pedidos/{pedido}', [App\Http\Controllers\PedidoController::class, 'destroy'])->name('delete');
Route::delete('resultados/{pedido}', [App\Http\Controllers\PedidoController::class, 'destroy'])->name('delete');

Route::patch('resultados/{pedido}', [App\Http\Controllers\PedidoController::class, 'update'])->name('update');
//Ruta para mostrar la vista editar pedido
Route::get('resultados/{pedido}/editar_pedido', [App\Http\Controllers\PedidoController::class, 'edit'])->name('edit');
//para acceder a todas los metodos de cliente de dorma automatizada comprobar con el comando "php artisan route::list"
Route::resource('pedido',PedidoController::class);


//HOY
Route::post('/resultados', [PedidoController::class, 'search'])->name('resultados');


Auth::routes();
//Agregada solo para tener acceso cuando los usuarios esten logueados
//Route::get('pedido/crear_pedido', [App\Http\Controllers\PedidoController::class, 'create'])->name('pedido');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('mis_pedidos', [App\Http\Controllers\PedidoController::class, 'index'])->name('mis_pedidos');

//HOY
Route::get('recientes', [App\Http\Controllers\PedidoController::class, 'show'])->name('recientes');


Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');


//Esta ruta funciona al escribir en el navegador admin/pedidos y mostrar los pedidos
Route::get('/admin/pedidos', [AdminController::class, 'verPedidos'])->middleware('auth.admin')->name('pedidos');
