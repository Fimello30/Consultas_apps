<?php

use App\Http\Controller\ListaController;
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

Route::get('/consultas_apps/public/', function () {
    return view('welcome');
});


Route::post('/consultas_apps/public/consulta', 'App\Http\controllers\ListaController@index',function () {
    return view('consulta.index');
})->name('consulta');
