<?php

use App\Http\Controllers\LayoutController;
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

Route::get('/layout',[LayoutController::class,'layoutController']);
Route::get('/index',[LayoutController::class,'Index']);
Route::get('/list',[LayoutController::class,'List']);
Route::get('/form',[LayoutController::class,'Form']);
Route::get('/calendar',[LayoutController::class,'Calendar']);
Route::get('/ui',[LayoutController::class,'Ui']);
