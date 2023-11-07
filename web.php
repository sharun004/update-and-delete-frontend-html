<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

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

Route::get('/',[Usercontroller::class,'index']);
Route::post('/create',[Usercontroller::class,'details']);
Route::get('/view-record',[Usercontroller::class,'user']);

Route::get('edit/{id}', [UserController::class,'edit']);
Route::post('edit/{id}', [UserController::class, 'update']);

Route::get('delete/{id}',[UserController::class,'delete'] );
