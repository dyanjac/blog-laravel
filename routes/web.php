<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesoController;
use App\Http\Controllers\PortadaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\SuscripcionController;
use App\Http\Middleware\Logincpanel;

Route::get('login', [AccesoController::class, 'login']);
Route::post('cpanel/home', [AccesoController::class, 'acceso']);



// Route::get('/', function () {
//     return view('index');
// });


	// Route::group(['prefix' => 'cpanel'], function () {

	// 	Route::resource('/',AccesoController::class);
	// });

	

	Route::middleware(['login'])->group( function () {

    	
		/**********
		* ACCESO 
		***********/
	Route::group(['prefix' => 'cpanel'], function () {

		Route::resource('/',AccesoController::class);

		Route::resource('blog',NoticiaController::class);
		Route::get('blog/edit/{id}',[NoticiaController::class,'edit']);
		Route::post('blog/delete',[NoticiaController::class,'delete']);
		Route::post('blog/save',[NoticiaController::class,'save']);
		Route::post('blog/update',[NoticiaController::class,'update']);

		Route::resource('mercadeo',NoticiaController::class);
		Route::get('mercadeo',[NegocioController::class,'inicio'])->name('inicio');
		Route::get('mercadeo/edit/{id}',[NegocioController::class,'edit']);
		Route::post('mercadeo/delete',[NegocioController::class,'delete']);
		Route::post('mercadeo/save',[NegocioController::class,'save']);
		Route::post('mercadeo/update',[NegocioController::class,'update']);
		
	});

});



/**********
* PORTADA 
***********/
Route::resource('/', PortadaController::class);
Route::get('home', [PortadaController::class,'index'])->name('noticias-ti');

Route::get('negocios-mercadeo', [NegocioController::class,'index'])->name('negocios-mercadeo');

Route::get('suscribase', [SuscripcionController::class, 'index'])->name('suscribase');
Route::post('suscribirme', [SuscripcionController::class, 'registro'])->name('suscribirme');
Route::post('suscribirme', [SuscripcionController::class, 'registro'])->name('suscribirme');

Route::get('big-data', [NegocioController::class, 'articulos'])->name('big-data');



Route::resource('show', NoticiaController::class);

Route::get('{title}/{id}', [NoticiaController::class, 'articulos']);
Route::get('{title}', [NoticiaController::class, 'searchtitulo']);

Route::get('mercadeo/{title}/{id}', [NegocioController::class, 'articulos']);







// Route::get('images/{path}/{attachment}', function($path , $attachment)
// {
//     $file =sprintf('storage/%s/s',$path,$attachment);
// if(File::exists($file)){
	
// return \Intervention\Image\Facades\Image::make($file)->response();
// 	}
// });

//Route::get('/admincd', 'AccesoController@index')->name('admincd');
//Route::view('/admincd', 'admin.index');
// Route::post('carritoAdd', 'CarritoController@Add')->name('carritoAdd');
// Route::post('carritoEditar', 'CarritoController@edit')->name('carritoEditar');
// Route::post('carritoDelete', 'CarritoController@delete')->name('carritoDelete');
