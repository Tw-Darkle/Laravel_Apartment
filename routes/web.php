<?php

use App\Http\Controllers\BillMeterController;
use App\Http\Controllers\ManagerRenterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SettingRoomController;
use App\Http\Controllers\ShowbillsController;
use App\Http\Controllers\UserBillController;
use App\Http\Controllers\UserDataPersonalController;
use App\Http\Controllers\UserPaymentController;
use App\Http\Controllers\UserReportController;
use App\Http\Controllers\UserRoomController;

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
Route::get('/admin/delete/{id}',[ManagerRenterController::class,'destroy'])->name('delete.renters');//ลบห้อง

// หน้าแจ้งซ่อม
Route::get('/admin/report', [ReportController::class,'index'])->name('admin.report');
Route::put('/admin/updateReport/{id}',[ReportController::class,'update'])->name('update.report'); // เเก้ไข




// หน้าสถานะห้อง ของผู้ใช่งาน
Route::get('/user/room',  [UserRoomController::class,'index'])->name('user.room');

// หน้าดูบิลเเละเเจ้งชำระเงิน
Route::get('/user/bill', [UserBillController::class,'index'])->name('user.bill');
Route::put('/user/updatebill/{id}',[UserBillController::class,'update'])->name('user.updateBill');

// หน้าข้อมูลผู้เช่า
Route::get('/user/datapersonal',[UserDataPersonalController::class,'index'])->name('user.datapersonal');

// หน้าประวัติการชำระเงิน
Route::get('/user/payment', [UserPaymentController::class,'index'])->name('user.payment');

// หน้าแจ้งเรื่องซ่อม
Route::get('/user/report', [UserReportController::class,'index'])->name('user.report');
Route::post('/storeReport',[UserReportController::class,'store']); //บันทึก



