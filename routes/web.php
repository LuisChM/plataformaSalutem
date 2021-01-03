<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['permission:create_Facturas']], function () {

    Route::resource('factura', 'App\Http\Controllers\FacturaController')->names('facturas');
});

Route::resource('user', 'App\Http\Controllers\UserController')->names('users');

Route::resource('role', 'App\Http\Controllers\RoleController')->names('roles');