<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    return view('auth.login');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  
    return view('dashboard');
})->name('dashboard');

/*if(Route::middleware(['auth:sanctum', 'verified'])){
    
    Route::resource('user', 'App\Http\Controllers\UserController');
}


    // Route::resource('user', 'App\Http\Controllers\UserController');


Route::get('/user', function () {
    $user=User::all();
    return view('users.index',['users'=>$user]);
});*/