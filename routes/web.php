<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\RaportController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DataPPDBController;
use App\Http\Controllers\DataRaportController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KTMController;
use App\Http\Middleware\AdminMidlleware;

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

Route::get('/', [AuthController::class, 'index']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'daftar'])->name('register');



Route::group(['middleware' => 'AuthMiddleware'], function () {
    //--------------user--------------------
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata');
    Route::post('/biodata', [BiodataController::class, 'simpan'])->name('biodata');
    Route::get('/editBiodata/{id_siswa}', [BiodataController::class, 'edit'])->name('editBiodata');
    Route::post('/editBiodata/{id_siswa}', [BiodataController::class, 'update'])->name('editBiodata');

    Route::get('/raport', [RaportController::class, 'index'])->name('raport');
    Route::post('/raport', [RaportController::class, 'simpan'])->name('raport');
    Route::get('/editRaport/{id_user}', [RaportController::class, 'edit'])->name('editRaport');
    Route::post('/editRaport/{id_user}', [RaportController::class, 'update'])->name('editRaport');



    //----------------admin--------------------------
    Route::group(['middleware' => 'AdminMiddleware'], function () {
        Route::get('/dataPPDB', [DataPPDBController::class, 'index'])->name('dataPPDB');
        Route::get('/detailBiodata/{id_user}', [DataPPDBController::class, 'detail'])->name('detailBiodata');
        Route::get('/deleteBiodata/{id_siswa}', [DataPPDBController::class, 'delete'])->name('deleteBiodata');



        Route::get('/dataRaport', [DataRaportController::class, 'index'])->name('dataRaport');
        Route::get('/detailRaport/{id_user}-{nama_lengkap}', [DataRaportController::class, 'detail'])->name('detailRaport');
        Route::get('/deleteRaport/{id_user}', [DataRaportController::class, 'delete'])->name('deleteRaport');



        Route::get('/dataJurusan', [JurusanController::class, 'index'])->name('jurusan');
        Route::get('/datajurusan', [JurusanController::class, 'tambah'])->name('tambahJurusan');
        Route::post('/datajurusan', [JurusanController::class, 'simpan'])->name('tambahJurusan');

        Route::get('/editJurusan/{id_jurusan}', [JurusanController::class, 'edit'])->name('editJurusan');
        Route::post('/editJurusan/{id_jurusan}', [JurusanController::class, 'update'])->name('editJurusan');

        Route::get('/deleteJurusan/{id_jurusan}', [JurusanController::class, 'delete'])->name('deleteJurusan');



        Route::get('/dataKTM', [KTMController::class, 'index'])->name('KTM');
        Route::get('/tambahKTM', [KTMController::class, 'tambah'])->name('tambahKTM');
        Route::post('/tambahKTM', [KTMController::class, 'simpan'])->name('tambahKTM');

        Route::get('/editKTM/{id_ktm}', [KTMController::class, 'edit'])->name('editKTM');
        Route::post('/editKTM/{id_ktm}', [KTMController::class, 'update'])->name('editKTM');

        Route::get('/deleteKTM/{id_ktm}', [KTMController::class, 'delete'])->name('deleteKTM');




        Route::get('/laporanPeserta', [LaporanController::class, 'index'])->name('laporanPeserta');
    });
});
