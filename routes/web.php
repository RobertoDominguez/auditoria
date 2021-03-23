<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'assistance_view'])->name('asistencia_view');
Route::post('/asistencia',[UserController::class,'assistance'])->name('asistencia');

Route::get('/admin/login',[AdministratorController::class,'viewLogin'])->name('admin.login_view');
Route::post('/admin/login',[AdministratorController::class,'login'])->name('admin.login');
Route::post('/admin/logout',[AdministratorController::class,'logout'])->name('admin.logout');

Route::get('/admin/dashboard',[AdministratorController::class,'dashboard'])->name('dashboard')->middleware('auth:web');
Route::get('logs')->name('logs')->middleware('auth:web');;
