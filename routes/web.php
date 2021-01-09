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

Auth::routes(
    ['verify' => true]
);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::group(['middleware' => ['permission:Ver roles|Crear roles|Editar roles|Eliminar roles']], function () {
    Route::resource('role', 'RoleController')->names('roles')->middleware('verified');
});
Route::group(['middleware' => ['permission:Ver usuarios|Crear usuarios|Editar usuarios|Eliminar usuarios']], function () {
    Route::resource('user', 'UserController')->names('users')->middleware('verified');
});
Route::group(['middleware' => ['permission:Ver facturas|Crear facturas|Editar facturas|Eliminar facturas']], function () {
    Route::resource('factura', 'FacturaController')->names('facturas')->middleware('verified');
});
Route::group(['middleware' => ['permission:Ver productos|Crear productos|Editar productos|Eliminar productos']], function () {
    Route::resource('producto', 'ProductosController')->names('productos');

    Route::view('agregarproductos', 'administracion.productos.agregarproductos')->name('agregarproductos');

    Route::view('editarproductos', 'administracion.productos.editarproductos')->name('editarproductos');

    Route::resource('retirar_producto', 'RetirarProductoController')->names('retirar_producto');
});

Route::group(['middleware' => ['permission:Usar envio de correos']], function () {
    Route::get('/sendemail', 'SendEmailController@index')->name('sendemail')->middleware('verified');
    Route::post('/sendemail/send', 'SendEmailController@send')->name('sendemail.send')->middleware('verified');

});

Route::group(['middleware' => ['permission:Usar envio de correos']], function () {
    Route::resource('compras','ComprasController')->names('compras')->middleware('verified');
});

Route::group(['middleware' => ['permission:Ver pacientes|Crear pacientes|Editar pacientes|Eliminar pacientes']], function () {
    Route::resource('paciente','PacienteController')->names('pacientes')->middleware('verified');
    Route::resource('paciente.seguimiento','HojaSeguimientoController')->names('pacientes.seguimientos')->middleware('verified');
    Route::resource('seguimiento','HojaSeguimientoController')->names('seguimientos')->middleware('verified');
});

Route::group(['middleware' => ['permission:Usar envio de correos']], function () {
    Route::view('calculo' , 'nutricion.calculo.index')->name('calculo')->middleware('verified');
});

Route::group(['middleware' => ['permission:Ver pacientes']], function () {
    Route::view('cliente/{cliente}', 'cliente.show1')->middleware('verified');
    Route::get('cliente/progreso/{cliente}',['as'=>'cliente.show1', 'uses'=>'ClientePacienteController@show1'])->middleware('verified');;
    Route::get('cliente/planNutricional/{cliente}',['as'=>'cliente.show2', 'uses'=>'ClientePacienteController@show2'])->middleware('verified');;
    Route::resource('cliente','ClientePacienteController')->names('clientes')->middleware('verified');
});

Route::group(['middleware' => ['permission:Ver plan nutricional|Crear plan nutricional|Editar plan nutricional|Eliminar plan nutricional']], function () {
    Route::resource('planNutricional','PlanNutricionalController')->names('planNutricionals')->middleware('verified');
});



Route::resource('ventas', 'VentasController')->names('ventas')->middleware('verified');

Route::resource('estadisticasventas', 'EstadisticasVentasController')->names('estadisticasventas')->middleware('verified');

Route::resource('estadisticascomida', 'EstadisticasComidaController')->names('estadisticascomida')->middleware('verified');

Route::resource('compra', 'VentaController')->names('compra')->middleware('verified');

Route::resource('retirar_producto', 'RetirarProductoController')->names('retirar_producto')->middleware('verified');


Route::get('chart', 'LaravelGoogleGrapController@graficoCircular')->name('chart')->middleware('verified');
Route::get('chart', 'LaravelGoogleGrapController@graficoBarras')->name('chart')->middleware('verified');








