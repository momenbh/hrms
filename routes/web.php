<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\DesignationController;

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