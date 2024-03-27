<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikelControllerController;
use App\Http\Controllers\authController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboasrdController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RfcController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\ViewController;
use App\Models\rfc;
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
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/cetak_pdf', 'PegawaiController@cetak_pdf');

Route::get('/test', function () {
    return view('test');
});


Route::get('/',[HomeController::class,'home'])->name('home_web');
Route::get('/profile_web',[HomeController::class,'profile'])->name('profile_web');
Route::get('/artikel_web',[HomeController::class,'artikel'])->name('artikel_web');
Route::get('/artikel_web/{id}',[HomeController::class,'artikel_show'])->name('artikel_show_web');
Route::get('/rfc_web',[HomeController::class,'rfc'])->name('rfc');
Route::get('/layanan_web',[HomeController::class,'layanan'])->name('layanan_web');
Route::get('/panduan_web',[HomeController::class,'panduan'])->name('panduan_web');
Route::get('/contact_web',[HomeController::class,'contact'])->name('contact_web');

// authentication
//==============================================================================
Route::post('/login', [authController::class, 'authenticated']);
Route::get('/login', [authController::class, 'login'])->name('login');
Route::get('/logout', [authController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
//==============================================================================


// Route Admin ===================================================================
Route::middleware('admin_middleware')->group(function(){
    Route::resource('/home',AdminHomeController::class)->middleware('auth');
    Route::resource('/dashboard',DashboasrdController::class)->middleware('auth');
    Route::resource('/post',PostController::class)->middleware('auth');
    Route::resource('/beranda',BerandaController::class)->middleware('auth');
    Route::resource('/profile',ProfileController::class)->middleware('auth');
    Route::resource('/artikel',ArtikelController::class)->middleware('auth');
    Route::resource('/rfc',RfcController::class)->middleware('auth');
    Route::resource('/layanan',LayananController::class)->middleware('auth');
    Route::resource('/panduan',PanduanController::class)->middleware('auth');
    Route::resource('/kontak',KontakController::class)->middleware('auth');
    Route::resource('/setting',SettingController::class)->middleware('auth');
    Route::resource('/view', ViewController::class)->middleware('auth');
    Route::resource('/header', HeaderController::class)->middleware('auth');
    Route::resource('/user', UserController::class)->middleware('auth');
});
Route::middleware('user_middleware')->group(function(){
    Route::get('users/dashboard', [PenggunaController::class, 'index']);
    Route::get('users/profile', [PenggunaController::class, 'profile']);
    Route::get('users/profile/edit/{id}', [PenggunaController::class, 'edit'])->name('users-profile-edit');
});

// Route User ======================================================================
// Route::resource('/user',UserHomeController::class)->middleware('auth');