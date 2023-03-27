<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TanggapanController;

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
// landingpage
Route::get('/', function () {
    return view('LandingPage');
});
// Route Landing
Route::get('/', [AuthController::class, 'landingpage'])->name('routeLP.landing');
// Register
Route::get('register', [AuthController::class, 'register'])->name('route.register');
Route::post('register', [AuthController::class, 'storeRegister'])->name('store.register');
// Login
Route::get('login', [AuthController::class, 'login'])->name('route.login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
// logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Midleware
Route::middleware('IsLogin')->group(function () {
    // dashboard
    Route::prefix('')->name('masyarakat.')->middleware(['auth:petugas,masyarakat'])->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
    // petugas
    Route::get('/petugas', [PetugasController::class, 'index'])->name('routeP.index');
    Route::get('/petugas/create', [PetugasController::class, 'create'])->name('routeP.create');
    Route::post('/petugas/create', [PetugasController::class, 'store'])->name('routeP.store');
    Route::get('/petugas/edit/{id_petugas}', [PetugasController::class, 'edit'])->name('routeP.edit');
    Route::patch('/petugas/edit/{id_petugas}', [PetugasController::class, 'update'])->name('routeP.update');
    Route::get('/petugas/destroy/{id_petugas}', [PetugasController::class, 'destroy'])->name('routeP.destroy');
    // masyarakat
    Route::get('/masyarakat', [MasyarakatController::class, 'index'])->name('routeM.index');
    Route::get('/masyarakat/detail', [MasyarakatController::class, 'show'])->name('routeM.show');
    Route::get('/masyarakat/destroy/{id_masyarakat}', [MasyarakatController::class, 'destroy'])->name('routeM.destroy');
    // pengaduan
    Route::patch('/pengaduan/edit/{id_pengaduan}', [PengaduanController::class, 'update'])->name('routePN.update');
    Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('routePN.index');
    Route::get('/pengaduan/create', [PengaduanController::class, 'create'])->name('routePN.create');
    Route::post('/pengaduan/create', [PengaduanController::class, 'store'])->name('routePN.store');
    Route::get('/pengaduan/destroy/{id_pengaduan}', [PengaduanController::class, 'destroy'])->name('routePN.destroy');
    Route::get('/pengaduan/detail/{id_pengaduan}', [PengaduanController::class, 'show'])->name('routePN.show');
    Route::put('/pengaduan/verif/{id}', [PengaduanController::class, 'verif'])->name('verif');
    // tanggapan
    Route::get('/tanggapan', [TanggapanController::class, 'index'])->name('routeT.index');
    Route::get('/tanggapan/{id_pengaduan}', [TanggapanController::class, 'destroy'])->name('routeT.destroy');
    Route::put('/tanggapan/{id_pengaduan}', [TanggapanController::class, 'store'])->name('routeT.store');
    Route::get('/petugas/generate_pdf', [TanggapanController::class, 'generatePDF'])->name('generate.pdf');
});
