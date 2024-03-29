<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\SuratKeluarController;
use App\Http\Controllers\Backend\SuratMasukController;
use App\Http\Controllers\Backend\NotulensiRapatController;
use App\Http\Controllers\Backend\KajurController;
use App\Http\Controllers\Backend\KaprodiController;
use App\Http\Controllers\Backend\DosenController;
  
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

Auth::routes();
// super admin auth
Route::middleware(['auth', 'user-access:Super Admin'])->group(function () {
  
    Route::get('/superadmin/dashboard', [HomeController::class, 'super'])->name('super.home');
});
// admin jurusan auth
Route::middleware(['auth', 'user-access:Admin Jurusan'])->group(function () {
  
    Route::get('/adminjurusan/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
});
// Kajur aut
Route::middleware(['auth', 'user-access:Kajur'])->group(function () {
  
    Route::get('/Kajur/dashboard', [HomeController::class, 'kajurHome'])->name('kajur.home');
});
// Kaprodi auth
Route::middleware(['auth', 'user-access:Kaprodi'])->group(function () {
  
    Route::get('/Kaprodi/dashboard', [HomeController::class, 'kaprodiHome'])->name('kaprodi.home');
});
// Dosen auth
Route::middleware(['auth', 'user-access:Dosen'])->group(function () {
  
    Route::get('/dosen/dashboard', [HomeController::class, 'dosenHome'])->name('dosen.home');
});

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

// route backend
Route::prefix('superadmin')->group(function(){
    Route::get('/view',[UserController::class, 'UserView'])->name('user.view');
    Route::get('/add',[UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store',[UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'UserDelete'])->name('users.delete');
});

Route::prefix('adminjurusan/SKeluar')->group(function(){
    Route::get('/view',[SuratKeluarController::class, 'index'])->name('skeluar.view');
    Route::get('/add',[SuratKeluarController::class, 'create'])->name('skeluar.add');
    Route::post('/store',[SuratKeluarController::class, 'store'])->name('skeluar.store');
    Route::get('/show/{id}',[SuratKeluarController::class, 'show'])->name('skeluar.show');
    Route::get('/edit/{id}',[SuratKeluarController::class, 'edit'])->name('skeluar.edit');
    Route::post('/update/{id}',[SuratKeluarController::class, 'update'])->name('skeluar.update');
    Route::get('/delete/{id}',[SuratKeluarController::class, 'destroy'])->name('skeluar.delete');
});

Route::prefix('adminjurusan/SMasuk')->group(function(){
    Route::get('/view',[SuratMasukController::class, 'index'])->name('smasuk.view');
    Route::get('/add',[SuratMasukController::class, 'create'])->name('smasuk.add');
    Route::post('/store',[SuratMasukController::class, 'store'])->name('smasuk.store');
    Route::get('/show/{id}',[SuratMasukController::class, 'show'])->name('smasuk.show');
    Route::get('/edit/{id}',[SuratMasukController::class, 'edit'])->name('smasuk.edit');
    Route::post('/update/{id}',[SuratMasukController::class, 'update'])->name('smasuk.update');
    Route::get('/delete/{id}',[SuratMasukController::class, 'destroy'])->name('smasuk.delete');
});

Route::prefix('adminjurusan/NRapat')->group(function(){
    Route::get('/view',[NotulensiRapatController::class, 'index'])->name('nrapat.view');
    Route::get('/add',[NotulensiRapatController::class, 'create'])->name('nrapat.add');
    Route::post('/store',[NotulensiRapatController::class, 'store'])->name('nrapat.store');
    Route::get('/show/{id}',[NotulensiRapatController::class, 'show'])->name('nrapat.show');
    Route::get('/edit/{id}',[NotulensiRapatController::class, 'edit'])->name('nrapat.edit');
    Route::post('/update/{id}',[NotulensiRapatController::class, 'update'])->name('nrapat.update');
    Route::get('/delete/{id}',[NotulensiRapatController::class, 'destroy'])->name('nrapat.delete');
});

Route::prefix('kajur')->group(function(){
    Route::get('/view/suratmasuk',[KajurController::class, 'indexSM'])->name('kajurSM.view');
    Route::get('/view/suratkeluar',[KajurController::class, 'indexSK'])->name('kajurSK.view');
    Route::get('/view/notulensirapat',[KajurController::class, 'indexNR'])->name('kajurNR.view');
});

Route::prefix('kaprodi')->group(function(){
    Route::get('/view/suratmasuk',[KaprodiController::class, 'indexSM'])->name('kaprodiSM.view');
    Route::get('/view/suratkeluar',[KaprodiController::class, 'indexSK'])->name('kaprodiSK.view');
    Route::get('/view/notulensirapat',[KaprodiController::class, 'indexNR'])->name('kaprodiNR.view');
});

Route::prefix('dosen')->group(function(){
    Route::get('/view/suratmasuk',[DosenController::class, 'indexSM'])->name('DosenSM.view');
    Route::get('/view/notulensirapat',[DosenController::class, 'indexNR'])->name('DosenNR.view');
});
