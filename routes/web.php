<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\Leavecontroller;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\Noticecontroller;
use App\Http\Controllers\Backend\HolidayController;
use App\Http\Controllers\Backend\PayrollController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\Dashboardcontroller;
use App\Http\Controllers\Backend\AttendanceController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\DesignationController;

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
// login
Route::get('/login',[LoginController::class,'login'])->name('login.view');


// dashboard
Route::get('/employe/dashboard',[Dashboardcontroller::class,'dashboard'])->name('employee.dashboard');
Route::get('/admin/dashboard',[Dashboardcontroller::class,'index'])->name('dashboard');
// department operation
Route::get('/department/view',[DepartmentController::class,'view'])->name('view.department');
Route::get('/department/form', [DepartmentController::class, 'form'])->name('form.department');
Route::post('/department/store', [DepartmentController::class, 'store'])->name('store.department');
// department view delete operation
Route::get('/department/delete/{id}',[DepartmentController::class,'delete'])->name('delete.department');
Route::get('/department/views/{id}',[DepartmentController::class,'views'])->name('views.department');


// designation operation
Route::get('/designation/view',[DesignationController::class,'view'])->name('view.designation');
Route::get('/designation/form',[DesignationController::class,'form'])->name('form.designation');
Route::post('/designation/store',[DesignationController::class,'store'])->name('store.designation');
// designation delete view operation
Route::get('/designation/delete/{id}',[DesignationController::class,'delete'])->name('delete.designation');
Route::get('/designation/views/{id}',[DesignationController::class,'views'])->name('views.designation');


 // Admin operation
Route::get('/admin/view',[AdminController::class,'view'])->name('view.admin');
Route::get('/admin/form',[AdminController::class,'form'])->name('form.admin');
Route::post('/admin/store',[AdminController::class,'store'])->name('store.admin');
// Admin delete view operation
Route::get('/admin/delete/{id}',[AdminController::class,'delete'])->name('delete.admin');
Route::get('/admin/views/{id}',[AdminController::class,'views'])->name('views.admin');
// employee operation
Route::get('/employee/view',[EmployeeController::class,'view'])->name('view.employee');
Route::get('/employee/form',[EmployeeController::class,'form'])->name('form.employee');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('store.employee');
// delete view operation
Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('delete.employee');
Route::get('/employee/views/{id}',[EmployeeController::class,'views'])->name('views.employee');



// leave operation
Route::get('/leave/view',[Leavecontroller::class,'view'])->name('view.leave');
Route::get('/leave/form',[Leavecontroller::class,'form'])->name('form.leave');
Route::post('/leave/store',[Leavecontroller::class,'store'])->name('store.leave');
// delete operation
Route::get('leave/delete/{id}',[Leavecontroller::class,'delete'])->name('delete.leave');
// view operation
Route::get('leave/views/{id}',[Leavecontroller::class,'views'])->name('views.leave');

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
// holiday operation
Route::get('/holiday/view',[HolidayController::class,'view'])->name('view.holiday');
Route::get('/holiday/form',[HolidayController::class,'form'])->name('form.holiday');
Route::post('/holiday/store',[HolidayController::class,'store'])->name('store.holiday');
// delete operation
Route::get('holiday/delete/{id}',[HolidayController::class,'delete'])->name('delete.holiday');
Route::get('holiday/views/{id}',[HolidayController::class,'views'])->name('views.holiday');
// payrool operation
Route::get('/payroll/view',[PayrollController::class,'view'])->name('view.payroll');
Route::get('/payroll/form',[PayrollController::class,'form'])->name('form.payroll');
Route::post('/payroll/store',[PayrollController::class,'store'])->name('store.form');
// delete view operation
Route::get('/payroll/delete/{id}',[PayrollController::class,'delete'])->name('delete.payroll');
Route::get('/payroll/views/{id}',[PayrollController::class,'views'])->name('views.payroll');
