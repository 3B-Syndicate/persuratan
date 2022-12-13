<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\SuratKeluarController;
use App\Http\Controllers\Backend\SuratMasukController;

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
    return Redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        // return view('dashboard');
        // return view('superadmin.index');
        return view('admin.index');
        // return view('kaprodi.index');
    })->name('dashboard');
});

Route::get('/logout',[AdminController::class, 'logout'])->name('superadmin.logout');
Route::prefix('super')->group(function(){
    Route::get('/view',[UserController::class, 'UserView'])->name('user.view');
    Route::get('/add',[UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store',[UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class, 'UsersUpdate'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'UserDelete'])->name('users.delete');
    });

Route::prefix('SKeluar')->group(function(){
    Route::get('/view',[SuratKeluarController::class, 'index'])->name('skeluar.view');
    Route::get('/add',[SuratKeluarController::class, 'create'])->name('skeluar.add');
    Route::post('/store',[SuratKeluarController::class, 'store'])->name('skeluar.store');
    Route::get('/edit/{id}',[SuratKeluarController::class, 'edit'])->name('skeluar.edit');
    Route::post('/update/{id}',[SuratKeluarController::class, 'update'])->name('skeluar.update');
    Route::get('/delete/{id}',[SuratKeluarController::class, 'destroy'])->name('skeluar.delete');

});

Route::prefix('admin')->group(function(){
    Route::get('/view',[SuratMasukController::class, 'SMView'])->name('admin.surat_masuk.table');

});
