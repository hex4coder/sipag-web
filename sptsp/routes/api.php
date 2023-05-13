<?php

use App\Http\Controllers\MobileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Mobile controller
Route::get('/check-connection', [MobileController::class, 'cek_connection'])->name('mobile.check_connection');
Route::post('/auth', [MobileController::class, 'login'])->name('mobile.auth');
Route::get('/get-saksi', [MobileController::class, 'get_saksi'])->name('mobile.getsaksi');
Route::post('/post-saksi', [MobileController::class, 'post_saksi'])->name('mobile.postsaksi');
Route::post('/request-antrian', [MobileController::class, 'request_antrian'])->name('mobile.requestantrian');
Route::get('/check-status', [MobileController::class, 'cek_status'])->name('mobile.cekstatus');
Route::get('/get-notif', [MobileController::class, 'get_notif'])->name('mobile.get_notif');
Route::delete('/delete-saksi', [MobileController::class, 'delete_saksi'])->name('mobile.delete_saksi');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/get-syarat/{perkaraid}', [MobileController::class, 'get_prasyarat'])->name('mobile.syarat');
Route::get('/get-biaya', [MobileController::class, 'get_biaya'])->name('mobile.get_biaya');
Route::get('/get-all-prasyarat', [MobileController::class, 'get_all_prasyarat'])->name('mobile.all_prasyarat');
Route::get('/get-detail-biaya/{perkaraid}', [MobileController::class, 'get_detail_biaya'])->name('mobile.get_detail_biaya');
Route::get('/get-list-antrian', [MobileController::class, 'get_list_antrian'])->name('mobile.get_list_antrian');
Route::get('/cek-data-perkara/{perkaraid}', [MobileController::class, 'cek_data_perkara'])->name('mobile.cek_data_perkara');
Route::get('/get-data-antrian/{antrianid}', [MobileController::class, 'get_data_antrian'])->name('mobile.cek_data_perkara');

// Keperluan data pengaduan
Route::get('/get-all-pegawai', [MobileController::class, 'get_all_pegawai'])->name('mobile.get_all_pegawai');
Route::post('/post-pengaduan', [MobileController::class, 'post_pengaduan'])->name('mobile.post_pengaduan');
