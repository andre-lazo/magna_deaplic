<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/', function () {
    return view('user_cliente.index');
});
Route::get('/index', function () {
    return view('user_cliente.index');
});
Route::get('/normas', function () {
    return view('user_cliente.normas');
});
Route::resource('noticia_cliente', 'App\Http\Controllers\Noticia_userController');
Route::resource('alicuota_cliente', 'App\Http\Controllers\Alicuota_userController');

if(Route::middleware(['auth:sanctum', 'verified'])){    
    Route::resource('noticia', 'App\Http\Controllers\NoticiaController');
    Route::resource('user', 'App\Http\Controllers\UserController');
    Route::resource('alicuota', 'App\Http\Controllers\AlicuotaController');
    Route::resource('reserva', 'App\Http\Controllers\EventoController');
}
    