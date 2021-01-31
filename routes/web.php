<?php

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
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/hola', function () {
    return view('productor');
});
Route::get('/dime',function (){return"Hola mundo";});
Route::get('/ipbase',function (){return"la base de datos está en".env('DB_HOST');});
Route::get('/dime2',function(){$nombr='Alex'; return "Hola {$nombr}";});
Route::match(['get','post'],'/dime3',function (){return "Salidad desde dime3";});
Route::any('/dime4',function (){return "Salida desde dime4";});
Route::view('/bienvenida', 'welcome');
Route::get('/dime5/{nombre}',function($nombre){return "Bienvenido {$nombre} ".$nombre;});
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
Route::get('/dime6/{nombre?}',function($nombre='Adán'){return " hola {$nombre}";});
Route::get('/dime7/{nombre?}/{apellido?}',function($nombre='Adán',$apellido="Edén")
{return " hola {$nombre} {$apellido}";});

Route::get('/dime8/{nombre?}/{apellido?}',function($nombre='Adán',$apellido="Edén")
{return " hola {$nombre} {$apellido}";})->where(['nombre'=>'[A-Za-z]+','apellido'=>'[A-Za-z]+']);
Route::group(['prefix'=>'admin'], function(){

    Route::get('/dime9/{nombre?}',function($nombre='Adán'){return " hola {$nombre}";});
    Route::get('/dime10/{nombre?}/{apellido?}',function($nombre='Adán',$apellido="Edén")
    {return " hola {$nombre} {$apellido}";});

});


Route::get('/dime11', function(){return view('productor',['nombre'=>'Alex','subnom'=>'Isaac']);});

Route::get('/dime12', function(){return view('productor')->with(['nombre'=>'Alex','subnom'=>'Isaac']);});
