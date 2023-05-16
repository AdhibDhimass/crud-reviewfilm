<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'home']);
Route::get('/table',[AuthController::class,'table']);
Route::get('/data-table',[AuthController::class,'data']);


//CRUD cast
//read data
Route::get('/cast', [CastController::class, 'index']);
//create data
Route::get('/cast/create',[CastController::class, 'create']);
//rute untuk memasukkan inputan ke database
Route::post('/cast', [CastController::class, 'store']);
Route::get('/cast/{id}', [CastController::class, 'show']);
//update data
Route::get('/cast/{id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{id}', [CastController::class, 'update']);
//delete data
Route::delete('/cast/{id}', [CastController::class, 'destory']);
