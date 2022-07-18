<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\Leavecontroller;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\Dashboardcontroller;
use App\Http\Controllers\Backend\AttendanceController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\DesignationController;
use App\Http\Controllers\Backend\Noticecontroller;

// use App\Http\Controllers\Backend\DepartmentController;
// use App\Http\Controllers\Backend\DesignationController;
// use App\Http\Controllers\Backend\AdminController;

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
    return view('backend.master');
});
Route::get('/dashboard',[Dashboardcontroller::class,'index'])->name('dashboard');
// department operation
Route::get('/department/view',[DepartmentController::class,'view'])->name('view.department');
Route::get('/department/form', [DepartmentController::class, 'form'])->name('form.department');
Route::post('/department/store', [DepartmentController::class, 'store'])->name('store.department');
// designation operation
Route::get('/designation/view',[DesignationController::class,'view'])->name('view.designation');
Route::get('/designation/form',[DesignationController::class,'form'])->name('form.designation');
Route::post('/designation/store',[DesignationController::class,'store'])->name('store.designation');
// // Admin operation
Route::get('/admin/view',[AdminController::class,'view'])->name('view.admin');
Route::get('/admin/form',[AdminController::class,'form'])->name('form.admin');
Route::post('/admin/store',[AdminController::class,'store'])->name('store.admin');
// employee operation
Route::get('/employee/view',[EmployeeController::class,'view'])->name('view.employee');
Route::get('/employee/form',[EmployeeController::class,'form'])->name('form.employee');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('store.employee');
// leave operation
Route::get('/leave/view',[Leavecontroller::class,'view'])->name('view.leave');
Route::get('/leave/form',[Leavecontroller::class,'form'])->name('form.leave');
Route::post('/leave/store',[Leavecontroller::class,'store'])->name('store.leave');
// attendance operation
Route::get('/attendance/view',[AttendanceController::class,'view'])->name('view.attendance');
Route::get('/attendance/form',[AttendanceController::class,'form'])->name('form.attendance');
Route::post('/attendance/store',[AttendanceController::class,'store'])->name('store.attendance');
// delete operation for attendance
Route::get('/attendance/delete/{id}',[AttendanceController::class,'delete'])->name('delete.attendance');
Route::get('/attendance/single/{id}',[AttendanceController::class,'single_view'])->name('single.attendance');


// notice operation
Route::get('/notice/view',[Noticecontroller::class,'view'])->name('view.notice');
Route::get('/notice/form',[Noticecontroller::class,'form'])->name('form.notice');
Route::post('/notice/store',[Noticecontroller::class,'store'])->name('store.notice');
// Delete operation for notice
Route::get('/notice/delete/{id}', [Noticecontroller::class, 'delete'])-> name('delete.notice');
// Single view
Route::get('/notice/single/{id}', [Noticecontroller::class, 'single_view'])->name('single.notice');
