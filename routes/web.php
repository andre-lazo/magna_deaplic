<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/', function () {
    return view('auth.login');
});
if(Route::middleware(['auth:sanctum', 'verified'])){    
    Route::resource('noticia', 'App\Http\Controllers\NoticiaController');
    Route::resource('user', 'App\Http\Controllers\UserController');
    Route::resource('alicuota', 'App\Http\Controllers\AlicuotaController');
    Route::resource('reserva', 'App\Http\Controllers\EventoController');
}
    