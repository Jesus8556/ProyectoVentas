<?php
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::resource('productos',ProductoController::class);
Route::resource('usuarios',UsuarioController::class);
Route::resource('pedidos',PedidoController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/show', [App\Http\Controllers\ShowController::class, 'index'])->name('show');
Route::get('/important', [App\Http\Controllers\ImportanteController::class, 'index'])->name('important');

