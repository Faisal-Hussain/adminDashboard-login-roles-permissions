<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterLoginController;
use App\Http\Controllers\Admin\Spatie\PermissionsController;
use App\Http\Controllers\Admin\Spatie\RoleController;





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
    return view('admin.login');
});



require __DIR__.'/auth.php';



Route::get('/login/page', [HomeController::class,'loginView'])->name('login.page');
Route::get('/register/page', [HomeController::class,'registerView'])->name('register.page');

Route::post('/register/user', [RegisterLoginController::class,'register'])->name('user.register');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->namespace('Admin')->group(function(){
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');
Route::get('/roles', [RoleController::class,'roles'])->name('roles');
Route::post('/roles/save', [RoleController::class,'save'])->name('roles.save');
Route::get('/permissions', [PermissionsController::class,'permissions'])->name('permissions');
Route::post('/permissions/save', [PermissionsController::class,'save'])->name('permissions.save');


	 
});
