<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarHadirController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\SendUndanganController;
use App\Http\Controllers\DataPengantinController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\DaftarUndanganController;
use App\Http\Controllers\PenyewaController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


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

// Route::get('/undanganku/{nama}/{alamat}', function ($nama , $alamat) {

//     $qrcode=QrCode::size(100)->generate($nama . $alamat);

//     return view('undanganku', compact('nama','alamat') ,['qrcode'=>$qrcode]);
// });

Route::get('/', function () {
    return view('master');
});
Route::get('/undanganku/{nama}/{alamat}', [SendUndanganController::class, 'undangan']);


Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/daftarhadir', [App\Http\Controllers\DaftarHadirController::class, 'index'])->name('daftarhadir');
    Route::get('/scan', [ScanController::class, 'index'])->name('scan');
    Route::get('/download', [App\Http\Controllers\DaftarHadirController::class, 'download'])->name('download');
    Route::get('/datapengantin', [DataPengantinController::class, 'index'])->name('datapengantin');
    Route::get('/tema', [HomeController::class, 'tema'])->name('tema');
    Route::get('/lihatdata', [DataPengantinController::class, 'lihatdata'])->name('lihatdata');
    Route::get('/daftarundangan', [DaftarUndanganController::class, 'index'])->name('daftarundangan');
    Route::get('/penyewa', [PenyewaController::class, 'index'])->name('penyewa');

    Route::post('/store', [DataPengantinController::class, 'store'])->name('store');
    Route::post('/store_info', [InfoController::class, 'store_info'])->name('store_info');
    Route::post('/store_rek', [RekeningController::class, 'store_rek'])->name('store_rek');
    Route::post('/store_story', [StoryController::class, 'store_story'])->name('store_story');
    Route::post('/store_foto', [FotoController::class, 'store_foto'])->name('store_foto');
    Route::post('/store_dtamu', [DaftarUndanganController::class, 'store_dtamu'])->name('store_dtamu');
});


Route::get('/add-tamu/{slug}/{nama}', [HomeController::class, 'addTamu']);
