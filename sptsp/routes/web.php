<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\JenisPerkaraController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PerkaraController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SaksiController;
use App\Http\Controllers\SidangController;
use App\Http\Controllers\SyaratController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [InformasiController::class, 'index']);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'cekRole:0']], function () {
    Route::resource('jenis_perkara', JenisPerkaraController::class);
});

// Route baru
Route::group(['middleware' => ['auth', 'cekRole:0,1']], function () {
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
    Route::get('/perkara/import', [PerkaraController::class, 'form_import'])->name('perkara.import');
    Route::post('/perkara/import', [PerkaraController::class, 'proses_import'])->name('perkara.proses_import');
    Route::resource('perkara', PerkaraController::class);
    Route::get('/prasyarat', [SyaratController::class, 'index'])->name('syarat.index');
    Route::get('/prasyarat/{id}/edit', [SyaratController::class, 'edit'])->name('syarat.edit');
    Route::get('/prasyarat/{id}/delete', [SyaratController::class, 'delete'])->name('syarat.delete');
    Route::get('/prasyarat/tambah', [SyaratController::class, 'tambah'])->name('syarat.tambah');
    Route::post('/prasyarat/store', [SyaratController::class, 'store'])->name('syarat.store');
    Route::post('/prasyarat/update', [SyaratController::class, 'update'])->name('syarat.update');
});
Route::group(['middleware' => ['auth', 'cekRole:0,2']], function () {
    Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
    Route::get('/pengaduan/pegawai', [PengaduanController::class, 'show_data_pegawai'])->name('pengaduan.pegawai');
});
Route::group(['middleware' => ['auth', 'cekRole:0,3']], function () {
    Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');
    Route::get('/kasir/tambah', [KasirController::class, 'tambah'])->name('kasir.tambah');
    Route::post('/kasir/store', [KasirController::class, 'store'])->name('kasir.store');
    Route::get('/kasir/edit/{id}', [KasirController::class, 'edit'])->name('kasir.edit');
    Route::get('/kasir/delete/{id}', [KasirController::class, 'delete'])->name('kasir.delete');
    Route::post('/kasir/update', [KasirController::class, 'update'])->name('kasir.update');
});
Route::group(['middleware' => ['auth', 'cekRole:0,4']], function () {
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('/produk/tambah', [ProdukController::class, 'tambah'])->name('produk.tambah');
    Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::get('/produk/delete/{id}', [ProdukController::class, 'delete'])->name('produk.delete');
    Route::post('/produk/update', [ProdukController::class, 'update'])->name('produk.update');
});



// Khusus Wenny untuk sistem antrian
Route::group(['middleware' => ['auth', 'cekRole:0,5']], function () {
    Route::get('/sidang', [SidangController::class, 'index'])->name('sidang.index');
    Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian.index');
    Route::get('/antrian/{id}', [AntrianController::class, 'detail'])->name('antrian.detail');
    Route::get('/antrian/isi-sidang/{id}', [AntrianController::class, 'isi_data_sidang'])->name('antrian.isi_sidang');
    Route::post('/antrian/post-sidang', [AntrianController::class, 'post_isi_sidang'])->name('antrian.post_isi_sidang');
    Route::get('/antrian/update-status/{id}/{status}', [AntrianController::class, 'update_status'])->name('antrian.update_status');
    Route::get('/sidang/saksi', [SaksiController::class, 'index'])->name('saksi.index');
    Route::get('/sidang/saksi/{id}', [SaksiController::class, 'detail'])->name('saksi.detail_saksi');
    Route::get('/sidang/saksi-cetak', [SaksiController::class, 'cetak'])->name('saksi.cetak');
});
