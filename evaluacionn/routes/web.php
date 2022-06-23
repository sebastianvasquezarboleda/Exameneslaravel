<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\procedimientosController;

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
Route::get('/procedimientos',[procedimientosController::class,'index']);
//Route::get('/procedimientos',[procedimientosController::class,'store']);


Route::get('/', function () {
    return view('auth.login');
});

Route::resource('paciente',PacienteController::class)->middleware('auth');

Auth::routes(['reset'=>false]);

Route::get('/app', [PacienteController::class, 'index'])->name('app');

Route::group(['middleware'=>'auth'], function(){

    Route::get('/', [PacienteController::class, 'index'])->name('app');

});
