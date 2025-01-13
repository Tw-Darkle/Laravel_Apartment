<?php

use App\Http\Controllers\BillMeterController;
use App\Http\Controllers\ManagerRenterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SettingRoomController;
use App\Http\Controllers\ShowbillsController;
use App\Models\ManagerRenter;

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

Route::get('/', [RoomController::class,'index']);

//หน้าตั้งค่าห้อง
Route::get('/admin/settingRoom', [SettingRoomController::class,'index'])->name('admin.settingRoom');
Route::post('/setRoom',[SettingRoomController::class,'store']); //บันทึก
Route::put('/updateSetRoom/{id}',[SettingRoomController::class,'update'])->name('update.setRoom');

// หน้าสถานะห้อง
Route::get('/admin/room',[RoomController::class,'index'])->name('room'); //โชว์ข้อมูล
Route::post('/storeRoom',[RoomController::class,'store']); //บันทึก
Route::put('/update/{id}',[RoomController::class,'update'])->name('update.room'); // เเก้ไข
Route::get('/delete/{id}',[RoomController::class,'destroy'])->name('delete.room');//ลบห้อง

// หน้ามิเตอร์
Route::get('/admin/meter', [MeterController::class,'index'])->name('admin.meter');
Route::post('/storeMeter{id}',[MeterController::class,'store'])->name('record.meter'); //บันทึก
Route::get('/admin/showMeter/{id}', [ShowbillsController::class,'index'])->name('admin.showMeter');
Route::post('/bills/{id}',[ShowbillsController::class,'store'])->name('bills.store');//บันทึก

// หน้าบิล
Route::get('/admin/bill', [BillMeterController::class,'index'])->name('admin.bill');

// หน้าการจัดการผู้เช้า
Route::get('/admin/managerenters', [ManagerRenterController::class,'index'])->name('admin.managerenters');
Route::post('/storeRenters',[ManagerRenterController::class,'store']); //บันทึก
Route::put('/admin/update/{id}',[ManagerRenterController::class,'update'])->name('update.renters'); // เเก้ไข




Route::get('/admin/report', function() {return view('/admin/report');})->name('admin/report');
Route::get('/user/room', function() {return view('/user/room');})->name('user/room');
Route::get('/user/bill', function() {return view('/user/bill');})->name('user/bill');
Route::get('/user/datapersonal', function() {return view('/user/datapersonal');})->name('user/datapersonal');
Route::get('/user/payment', function() {return view('/user/payment');})->name('user/payment');
Route::get('/user/report', function() {return view('/user/report');})->name('user/report');


