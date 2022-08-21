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

// Route::get('/', function () {
//     return view('backend.master');
// });

//  admin login
Route::get('/',[LoginController::class,'login'])->name('login.view');
Route::post('/login',[LoginController::class,'dologin'])->name('do.login');




//  admin registration
Route::get('/registration',[LoginController::class,'registration'])->name('form.registration');
Route::post('/registration/store',[LoginController::class,'store'])->name('store.registration');


Route::group(['middleware'=> 'auth'], function (){




//  adminlogin

Route::get('/logout',[LoginController::class,'logout'])->name('do.logout');


// // dashboard
Route::get('/employe/dashboard',[Dashboardcontroller::class,'dashboard'])->name('employee.dashboard');
Route::get('/admin/dashboard',[Dashboardcontroller::class,'index'])->name('dashboard');
// department operation
Route::get('/department/view',[DepartmentController::class,'view'])->name('view.department');
Route::get('/department/form', [DepartmentController::class, 'form'])->name('form.department');
Route::post('/department/store', [DepartmentController::class, 'store'])->name('store.department');
// department view delete edit update operation
Route::get('/department/delete/{id}',[DepartmentController::class,'delete'])->name('delete.department');
Route::get('/department/views/{id}',[DepartmentController::class,'views'])->name('views.department');
Route::get('/department/edit/{id}',[DepartmentController::class,'edit'])->name('edit.department');
Route::post('/department/update/{id}',[DepartmentController::class,'update'])->name('update.department');


// designation operation
Route::get('/designation/view',[DesignationController::class,'view'])->name('view.designation');
Route::get('/designation/form',[DesignationController::class,'form'])->name('form.designation');
Route::post('/designation/store',[DesignationController::class,'store'])->name('store.designation');
// designation delete view edit update operation
Route::get('/designation/delete/{id}',[DesignationController::class,'delete'])->name('delete.designation');
Route::get('/designation/views/{id}',[DesignationController::class,'views'])->name('views.designation');
Route::get('/designation/edit/{id}',[DesignationController::class,'edit'])->name('edit.designation');
Route::post('/designation/update/{id}',[DesignationController::class,'update'])->name('update.designation');


 // Admin operation
Route::get('/admin/view',[AdminController::class,'view'])->name('view.admin');
Route::get('/admin/form',[AdminController::class,'form'])->name('form.admin');
Route::post('/admin/store',[AdminController::class,'store'])->name('store.admin');
// Admin delete view edit update operation
Route::get('/admin/delete/{id}',[AdminController::class,'delete'])->name('delete.admin');
Route::get('/admin/views/{id}',[AdminController::class,'views'])->name('views.admin');
Route::get('/admin/edit/{id}',[AdminController::class,'edit'])->name('edit.admin');
Route::post('/admin/update/{id}',[AdminController::class,'update'])->name('update.admin');
// employee operation
Route::get('/employee/view',[EmployeeController::class,'view'])->name('view.employee');
Route::get('/employee/form',[EmployeeController::class,'form'])->name('form.employee');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('store.employee');
//  employee delete view  edit update operation
Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('delete.employee');
Route::get('/employee/views/{id}',[EmployeeController::class,'views'])->name('views.employee');
Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('edit.employee');
Route::post('/employee/update/{id}',[EmployeeController::class,'update'])->name('update.employee');



// leave operation
Route::get('/leave/view',[Leavecontroller::class,'view'])->name('view.leave');
Route::get('/leave/view/list',[Leavecontroller::class,'list'])->name('view.leavelist');
Route::get('/leave/form',[Leavecontroller::class,'form'])->name('form.leave');
Route::post('/leave/store',[Leavecontroller::class,'store'])->name('store.leave');
// delete operation
Route::get('leave/delete/{id}',[Leavecontroller::class,'delete'])->name('delete.leave');
// view operation edit upade
Route::get('leave/views/{id}',[Leavecontroller::class,'views'])->name('views.leave');
Route::get('leave/edit/{id}',[Leavecontroller::class,'edit'])->name('edit.leave');
Route::post('leave/update/{id}',[Leavecontroller::class,'update'])->name('update.leave');
//  leave type
Route::get('leve/type',[Leavecontroller::class,'leavetype'])->name('view.leavetype');
Route::get('leve/type/form',[Leavecontroller::class,'leavetypeform'])->name('form.leavetype');
Route::post('leve/type/store',[Leavecontroller::class,'leavetypestore'])->name('store.leavetype');
// leave type update delete view
Route::get('leave/typedelete/{id}',[Leavecontroller::class,'typedelete'])->name('typedelete.leave');
Route::get('leave/typeviews/{id}',[Leavecontroller::class,'typeviews'])->name('typeviews.leave');
Route::get('leave/typeedit/{id}',[Leavecontroller::class,'typeedit'])->name('typeedit.leave');
Route::post('leave/typeupdate/{id}',[Leavecontroller::class,'typeupdate'])->name('typeupdate.leave');
Route::post('leave/status/{id}',[Leavecontroller::class,'status'])->name('leave.status');

// attendance operation

Route::get('/attendance/view',[AttendanceController::class,'view'])->name('view.attendance');
Route::get('/attendance/checkout/{id}',[AttendanceController::class,'checkout'])->name('checkout.attendance');
Route::get('/attendance/store',[AttendanceController::class,'store'])->name('store.attendance');
Route::get('/attendance/checkattendance',[AttendanceController::class,'checkattendance'])->name('checkin.attendance');
// notice operation
Route::get('/notice/view',[Noticecontroller::class,'view'])->name('view.notice');
Route::get('/notice/view/list',[Noticecontroller::class,'list'])->name('view.noticelist');
Route::get('/notice/form',[Noticecontroller::class,'form'])->name('form.notice');
Route::post('/notice/store',[Noticecontroller::class,'store'])->name('store.notice');
// Delete  view edit update operation for notice
Route::get('/notice/delete/{id}', [Noticecontroller::class, 'delete'])-> name('delete.notice');
Route::get('/notice/single/{id}', [Noticecontroller::class, 'single_view'])->name('single.notice');
Route::get('/notice/edit/{id}', [Noticecontroller::class, 'edit'])->name('edit.notice');
Route::post('/notice/update/{id}', [Noticecontroller::class, 'update'])->name('update.notice');
// holiday operation
Route::get('/holiday/view',[HolidayController::class,'view'])->name('view.holiday');
Route::get('/holiday/form',[HolidayController::class,'form'])->name('form.holiday');
Route::post('/holiday/store',[HolidayController::class,'store'])->name('store.holiday');
// delete  delete edit update operation
Route::get('holiday/delete/{id}',[HolidayController::class,'delete'])->name('delete.holiday');
Route::get('holiday/views/{id}',[HolidayController::class,'views'])->name('views.holiday');
Route::get('holiday/edit/{id}',[HolidayController::class,'edit'])->name('edit.holiday');
Route::post('holiday/update/{id}',[HolidayController::class,'update'])->name('update.holiday');
// payrool operation
Route::get('/payroll/view',[PayrollController::class,'view'])->name('view.payroll');
Route::get('/payroll/form',[PayrollController::class,'form'])->name('form.payroll');
Route::post('/payroll/store',[PayrollController::class,'store'])->name('store.form');
// delete view eidt update operation
Route::get('/payroll/delete/{id}',[PayrollController::class,'delete'])->name('delete.payroll');
Route::get('/payroll/views/{id}',[PayrollController::class,'views'])->name('views.payroll');
Route::get('/payroll/edit/{id}',[PayrollController::class,'edit'])->name('edit.payroll');
Route::post('/payroll/update/{id}',[PayrollController::class,'update'])->name('update.payroll');
Route::get('/payroll/status',[payrollcontroller::class,'status'])->name('status.payroll');

});
