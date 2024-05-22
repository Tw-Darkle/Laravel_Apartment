<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function() {return view('welcome');});
Route::get('/admin/room', function() {return view('/admin/room');});
Route::get('/admin/meter', function() {return view('/admin/meter');});
Route::get('/admin/bill', function() {return view('/admin/bill');});
Route::get('/admin/managerenters', function() {return view('/admin/managerenters');});
Route::get('/admin/report', function() {return view('/admin/report');});
Route::get('/user/room', function() {return view('/user/room');});
Route::get('/user/bill', function() {return view('/user/bill');});
Route::get('/user/datapersonal', function() {return view('/user/datapersonal');});
Route::get('/user/report', function() {return view('/user/report');});


Route::post('insert',[AdminController::class,'insert']);