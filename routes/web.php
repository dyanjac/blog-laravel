<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesoController;

Route::get('/admincd', [AccesoController::class, 'index']);
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

// Route::get('/', function () {
//     return view('welcome');
// });



/**********
* ACCESO 
***********/
Route::get('acceso/perfil', [AccesoController::class, 'index'])->name('perfil');
//Route::get('/admincd', 'AccesoController@index')->name('admincd');
//Route::view('/admincd', 'admin.index');
// Route::post('carritoAdd', 'CarritoController@Add')->name('carritoAdd');
// Route::post('carritoEditar', 'CarritoController@edit')->name('carritoEditar');
// Route::post('carritoDelete', 'CarritoController@delete')->name('carritoDelete');
