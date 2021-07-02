<?php

use App\Http\Controllers\PlatoController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

Route::get('/dash/crud',function(){
   return view('crud.index');
});

Route::get('/dash/crud/create', function () {
   return view('crud.create');
});
Auth::routes();

Auth::routes();
route::resource('platos',PlatoController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
