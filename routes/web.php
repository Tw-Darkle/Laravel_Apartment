<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomController;
use App\Models\Room;

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

// หน้าสถานะห้อง
Route::get('/admin/room',[RoomController::class,'index'])->name('room'); //โชว์ข้อมูล
Route::post('/store',[RoomController::class,'store']); //บันทึก
Route::put('/update/{id}',[RoomController::class,'update'])->name('update.room'); // เเก้ไข
Route::get('/delete/{id}',[RoomController::class,'destroy'])->name('delete.room');//ลบห้อง





Route::get('/admin/meter', function() {return view('/admin/meter');})->name('admin/meter');
Route::get('/admin/bill', function() {return view('/admin/bill');})->name('admin/bill');
Route::get('/admin/managerenters', function() {return view('/admin/managerenters');})->name('admin/managerenters');
Route::get('/admin/report', function() {return view('/admin/report');})->name('admin/report');
Route::get('/user/room', function() {return view('/user/room');})->name('user/room');
Route::get('/user/bill', function() {return view('/user/bill');})->name('user/bill');
Route::get('/user/datapersonal', function() {return view('/user/datapersonal');})->name('user/datapersonal');
Route::get('/user/payment', function() {return view('/user/payment');})->name('user/payment');
Route::get('/user/report', function() {return view('/user/report');})->name('user/report');


