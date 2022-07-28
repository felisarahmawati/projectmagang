<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\SuperadminController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Admin
Route::get('/admin/index', [AdminController::class, 'index'])->middleware('role:admin')->name('admin.index');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/profile/profil', [AdminController::class, 'profile'])->middleware('auth');
Route::get('/admin/data/order', [AdminController::class, 'order'])->middleware('auth');
Route::get('/admin/data/order=barang', [AdminController::class, 'barang'])->middleware('auth');
Route::get('/admin/home', [AdminController::class, 'home'])->middleware('auth');
Route::get('/admin/data/order=bangunan', [AdminController::class, 'bangunan'])->middleware('auth');
Route::get('/admin/data/order=pickup', [AdminController::class, 'pickup'])->middleware('auth');
Route::get('/admin/data/payment', [AdminController::class, 'payment'])->middleware('auth');
Route::get('/admin/vendor', [AdminController::class, 'vendor'])->middleware('auth');
Route::get('/admin/vendor/trans', [AdminController::class, 'trans'])->middleware('auth');
Route::get('/admin/vendor/data-pick-up', [AdminController::class, 'data_pickup'])->middleware('auth');
Route::get('/admin/vendor/data_trans=selesai', [AdminController::class, 'trans_selesai'])->middleware('auth');
Route::get('/admin/vendor/data_trans=berlangsung', [AdminController::class, 'trans_berlangsung'])->middleware('auth');
Route::get('/admin/setting', [AdminController::class, 'setting'])->middleware('auth');
Route::get('/admin/data/pengaturan-user', [AdminController::class, 'pengaturanuser'])->middleware('auth');

//admin profile
// Route::get('/admin/profile/edit_profil', [AdminController::class, 'edit'])->middleware('auth');

//User
Route::get('/user/index', [UserController::class, 'index'])->middleware('role:user')->name('user.index');
Route::get('/user/layanan', [LayananController::class, 'index'])->middleware('auth');
Route::get('/user/tentang', [TentangController::class, 'index'])->middleware('auth');
Route::get('/user/kontak', [KontakController::class, 'index'])->middleware('auth');

//User-detail
Route::get('/user/detail/barang/layanan_barang', function () {
    return view('/user/detail/barang/layanan_barang',[
        "title" => "barang"
    ]);
});

Route::get('/user/detail/barang/barang', function () {
    return view('/user/detail/barang/barang',[
        "title" => "detail barang"
    ]);
});

Route::get('/user/detail/barang/paket', function () {
    return view('/user/detail/barang/paket',[
        "title" => "detail paket"
    ]);
});

Route::get('/user/detail/kendaraan', function () {
    return view('/user/detail/kendaraan',[
        "title" => "kendaraan"
    ]);
});

Route::get('/user/detail/bangunan', function () {
    return view('/user/detail/bangunan',[
        "title" => "bangunan"
    ]);
});

//user-pemesanan
Route::get('/user/pemesanan/info_pembayaran', function () {
    return view('/user/pemesanan/info_pembayaran',[
        "title" => "pembayaran"
    ]);
});

//user-pemesanan-history
Route::get('/user/pemesanan/History/Last_Progress', function () {
    return view('/user/pemesanan/History/Last_Progress',[
        "title" => "history"
    ]);
});

//user-pemesanan-pemesanan
Route::get('/user/pemesanan/History/On_Progress', function () {
    return view('/user/pemesanan/History/On_Progress',[
        "title" => "pesanan"
    ]);
});

Route::get('/user/pemesanan/History/On_Progress', function () {
    return view('/user/pemesanan/History/On_Progress',[
        "title" => "history"
    ]);
});

Route::get('/user/pemesanan/struk', function () {
    return view('/user/pemesanan/struk',[
        "title" => "Struk"
    ]);
});

Route::get('/user/pemesanan/konfirm_pembayaran', function () {
    return view('/user/pemesanan/konfirm_pembayaran',[
        "title" => "Konfirmasi Pembayaran"
    ]);
});

Route::get('/user/pemesanan/pemesanan', function () {
    return view('/user/pemesanan/pemesanan',[
        "title" => "Pemesanan"
    ]);
});

//profile user
Route::get('/user/profileuser', function () {
    return view('/user/profileuser',[
        "title" => "Profile User"
    ]);
});

Route::get('/user/edit_profile', function () {
    return view('/user/edit_profile',[
        "title" => "Edit Profile"
    ]);
});


Route::get('/user/Alamat', function () {
    return view('/user/Alamat',[
        "title" => "Alamat"
    ]);
});

Route::get('/user/edit_alamat', function () {
    return view('/user/edit_alamat',[
        "title" => "Edit alamat"
    ]);
});

Route::get('/user/Tambah_alamat', function () {
    return view('/user/Tambah_alamat',[
        "title" => "Tambah Alamat"
    ]);
});

Route::get('/user/Notifikasi', function () {
    return view('/user/Notifikasi',[
        "title" => "Notifikasi"
    ]);
});

Route::get('/user/kebijakanprivasi', function () {
    return view('/user/kebijakanprivasi',[
        "title" => "Kebijakan Privasi"
    ]);
});

Route::get('/user/bantuan', function () {
    return view('/user/bantuan',[
        "title" => "Pusat Bantuan"
    ]);
});

//Superadmin
Route::get('/superadmin/index', [SuperadminController::class, 'index'])->middleware('role:superadmin')->name('superadmin.index');

Route::get('/superadmin/dashboard', function () {
    return view('superadmin/index');
});

Route::get('/superadmin/profil', function () {
    return view('superadmin/profil');
});

Route::get('/superadmin/data/alamat', function () {
    return view('superadmin/data/alamat');
});

Route::get('/superadmin/data/order', function () {
    return view('superadmin/data/order');
});

Route::get('/superadmin/data/payment', function () {
    return view('superadmin/data/payment');
});

Route::get('/superadmin/data/pengaturan-user', function () {
    return view('superadmin/data/pengaturan-user');
});

Route::get('/superadmin/vendor/laporan', function () {
    return view('superadmin/vendor/laporan');
});

Route::get('/superadmin/vendor/pickup', function () {
    return view('superadmin/vendor/pickup');
});

Route::get('/superadmin/vendor/transaksi', function () {
    return view('superadmin/vendor/transaksi');
});

Route::get('/superadmin/vendor/vendor', function () {
    return view('superadmin/vendor/vendor');
});

Route::get('/superadmin/setting/hapus', function () {
    return view('superadmin/setting/hapus');
});

Route::get('/superadmin/setting/tambah', function () {
    return view('superadmin/setting/tambah');
});

//Vendor
Route::get('/vendor/index', [VendorController::class, 'index'])->middleware('role:vendor')->name('vendor.index');

//Finance
Route::get('/finance/page', [FinanceController::class, 'index'])->middleware('role:finance')->name('finance.index');
Route::get('/finance/transaksi/transaksiuser', [FinanceController::class, 'transaksiuser'])->middleware('auth');
Route::get('/finance/transaksi/transaksivendor', [FinanceController::class, 'transaksivendor'])->middleware('auth');
Route::get('/finance/transaksi/detailtransaksiuser', [FinanceController::class, 'detailtransaksiuser'])->middleware('auth');
Route::get('/finance/transaksi/detailtransaksivendor', [FinanceController::class, 'detailtransaksivendor'])->middleware('auth');
Route::get('/finance/DataPenarikan/penarikan', [FinanceController::class, 'penarikan'])->middleware('auth');
Route::get('/finance/DataPenarikan/konfirmasi', [FinanceController::class, 'konfirmasi'])->middleware('auth');
Route::get('/finance/DataPenarikan/history', [FinanceController::class, 'history'])->middleware('auth');
Route::get('/finance/profilefinance', [FinanceController::class, 'profile'])->middleware('auth');