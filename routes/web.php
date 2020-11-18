<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/', function () {
    return view('auth.login');
});
if(Route::middleware(['auth:sanctum', 'verified'])){
    
    Route::resource('user', 'App\Http\Controllers\UserController');
    Route::resource('noticia', 'App\Http\Controllers\NoticiaController');
}
