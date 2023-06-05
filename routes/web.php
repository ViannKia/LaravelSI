<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\RiwayatTransaksiController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\PenukaranPoinController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\SaranController;
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

Route::get('/', function () {
    return view('layouts/home');
})->name('home');


Route::get('/dashboard', function () {
    return view('layouts/dashboard');
})->name('dashboard');

// Route Controller Pelanggan

Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');

Route::get('/pelanggan/add' , [PelangganController::class,'create'])->name('addpelanggan');

Route::post('/pelanggan/add', [PelangganController::class,'store'])->name('insertpelanggan');

Route::get('/pelanggan/edit/{id}' , [PelangganController::class,'edit'])->name('editpelanggan');

Route::post('/pelanggan/edit/{id}', [PelangganController::class,'update'])->name('updatepelanggan');

Route::get('/pelanggan/{id}' , [PelangganController::class,'destroy'])->name('destroypelanggan');

Route::get('/pdf-pelanggan', [PelangganController::class, 'exportpdf'])->name('pdfpelanggan');

// Route Controller Konsumen

Route::get('/konsumen', [KonsumenController::class, 'index'])->name('konsumen');

Route::get('/konsumen/add' , [KonsumenController::class,'create'])->name('addkonsumen');

Route::post('/konsumen/add', [KonsumenController::class,'store'])->name('insertkonsumen');

Route::get('/konsumen/edit/{id}' , [KonsumenController::class,'edit'])->name('editkonsumen');

Route::post('/konsumen/edit/{id}', [KonsumenController::class,'update'])->name('updatekonsumen');

Route::get('/konsumen/{id}' , [KonsumenController::class,'destroy'])->name('destroykonsumen');

Route::get('/pdf-konsumen', [KonsumenController::class, 'exportpdf'])->name('pdfkonsumen');

// Route Controller Pembelian

Route::get('/pembelian', [PembelianController::class, 'index'])->name('pembelian');

Route::get('/pembelian/add' , [PembelianController::class,'create'])->name('addpembelian');

Route::post('/pembelian/add', [PembelianController::class,'store'])->name('insertpembelian');

Route::get('/pembelian/edit/{id}' , [PembelianController::class,'edit'])->name('editpembelian');

Route::post('/pembelian/edit/{id}', [PembelianController::class,'update'])->name('updatepembelian');

Route::get('/pembelian/{id}' , [PembelianController::class,'destroy'])->name('destroypembelian');

Route::get('/pdf-pembelian', [PembelianController::class, 'exportpdf'])->name('pdfpembelian');

// Route Controller Barang

Route::get('/barang', [BarangController::class, 'index'])->name('items');

Route::get('/barang/add' , [BarangController::class,'create'])->name('additems');

Route::post('/barang/add', [BarangController::class,'store'])->name('insertitems');

Route::get('/barang/edit/{id_barang}' , [BarangController::class,'edit'])->name('edititems');

Route::post('/barang/edit/{id_barang}', [BarangController::class,'update'])->name('updateitems');

Route::get('/barang/{id_barang}' , [BarangController::class,'destroy'])->name('destroyitems');

Route::get('/pdf-barang', [BarangController::class, 'exportpdf'])->name('pdfbarang');

// Route Controller Transaksi

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');

Route::get('/transaksi/add' , [TransaksiController::class,'create'])->name('addtransaksi');

Route::post('/transaksi/add', [TransaksiController::class,'store'])->name('inserttransaksi');

Route::get('/transaksi/edit/{id}' , [TransaksiController::class,'edit'])->name('edittransaksi');

Route::post('/transaksi/edit/{id}', [TransaksiController::class,'update'])->name('updatetransaksi');

Route::get('/transaksi/{id}' , [TransaksiController::class,'destroy'])->name('destroytransaksi');

Route::get('/pdf-transaksi', [TransaksiController::class, 'exportpdf'])->name('pdftransaksi');

// Route Controller Distributor

Route::get('/distributor', [DistributorController::class, 'index'])->name('distributor');

Route::get('/distributor/add' , [DistributorController::class,'create'])->name('adddistributor');

Route::post('/distributor/add', [DistributorController::class,'store'])->name('insertdistributor');

Route::get('/distributor/edit/{id}' , [DistributorController::class,'edit'])->name('editdistributor');

Route::post('/distributor/edit/{id}', [DistributorController::class,'update'])->name('updatedistributor');

Route::get('/distributor/{id}' , [DistributorController::class,'destroy'])->name('destroydistributor');

Route::get('/pdf-distributor', [DistributorController::class, 'exportpdf'])->name('pdfdistributor');

// Route Controller RiwayatTransaksi

Route::get('/riwayat', [RiwayatTransaksiController::class, 'index'])->name('riwayat');

Route::get('/riwayat/add' , [RiwayatTransaksiController::class,'create'])->name('addriwayat');

Route::post('/riwayat/add', [RiwayatTransaksiController::class,'store'])->name('insertriwayat');

Route::get('/riwayat/edit/{id}' , [RiwayatTransaksiController::class,'edit'])->name('editriwayat');

Route::post('/riwayat/edit/{id}', [RiwayatTransaksiController::class,'update'])->name('updateriwayat');

Route::get('/riwayat/{id}' , [RiwayatTransaksiController::class,'destroy'])->name('destroyriwayat');

Route::get('/pdf-riwayat', [RiwayatTransaksiController::class, 'exportpdf'])->name('pdfriwayat');

// Route Controller Diskon

Route::get('/diskon', [DiskonController::class, 'index'])->name('diskon');

Route::get('/diskon/add' , [DiskonController::class,'create'])->name('adddiskon');

Route::post('/diskon/add', [DiskonController::class,'store'])->name('insertdiskon');

Route::get('/diskon/edit/{id}' , [DiskonController::class,'edit'])->name('editdiskon');

Route::post('/diskon/edit/{id}', [DiskonController::class,'update'])->name('updatediskon');

Route::get('/diskon/{id}' , [DiskonController::class,'destroy'])->name('destroydiskon');

Route::get('/pdf-diskon', [DiskonController::class, 'exportpdf'])->name('pdfdiskon');

// Route Controller Penukaran Poin

Route::get('/penukaran-poin', [PenukaranPoinController::class, 'index'])->name('penukaran-poin');

Route::get('/penukaran-poin/add' , [PenukaranPoinController::class,'create'])->name('addpenukaran-poin');

Route::post('/penukaran-poin/add', [PenukaranPoinController::class,'store'])->name('insertpenukaran-poin');

Route::get('/penukaran-poin/edit/{id}' , [PenukaranPoinController::class,'edit'])->name('editpenukaran-poin');

Route::post('/penukaran-poin/edit/{id}', [PenukaranPoinController::class,'update'])->name('updatepenukaran-poin');

Route::get('/penukaran-poin/{id}' , [PenukaranPoinController::class,'destroy'])->name('destroypenukaran-poin');

Route::get('/pdf-penukaran-poin', [PenukaranPoinController::class, 'exportpdf'])->name('pdfpenukaranpoin');

// Route Controller Poin

Route::get('/poin', [PoinController::class, 'index'])->name('poin');

Route::get('/poin/add' , [PoinController::class,'create'])->name('addpoin');

Route::post('/poin/add', [PoinController::class,'store'])->name('insertpoin');

Route::get('/poin/edit/{id}' , [PoinController::class,'edit'])->name('editpoin');

Route::post('/poin/edit/{id}', [PoinController::class,'update'])->name('updatepoin');

Route::get('/poin/{id}' , [PoinController::class,'destroy'])->name('destroypoin');

Route::get('/pdf-poin', [PoinController::class, 'exportpdf'])->name('pdfpoin');

// Route Controller Saran

Route::get('/saran', [SaranController::class, 'index'])->name('saran');

Route::get('/saran/add' , [SaranController::class,'create'])->name('addsaran');

Route::post('/saran/add', [SaranController::class,'store'])->name('insertsaran');

Route::get('/saran/edit/{id}' , [SaranController::class,'edit'])->name('editsaran');

Route::post('/saran/edit/{id}', [SaranController::class,'update'])->name('updatesaran');

Route::get('/saran/{id}' , [SaranController::class,'destroy'])->name('destroysaran');

Route::get('/pdf-saran', [SaranController::class, 'exportpdf'])->name('pdfsaran');


