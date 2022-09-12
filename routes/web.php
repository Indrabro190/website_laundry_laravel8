<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NamaPaketController;
use App\Http\Controllers\TipePaketController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/laundry', [LaundryController::class, 'index'])->name('laundry')->middleware('laundry');

Route::get('/detailtransaksi', [DetailController::class, 'detailtransaksi'])->name('detailtransaksi');


Route::get('/dashboard', [TransaksiController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboardgrafik', [TransaksiController::class, 'dashboardgrafik'])->name('dashboardgrafik');


// Route Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('datacustomer');
Route::get('/datacustomer', [CustomerController::class, 'datacustomer'])->name('datacustomer');
Route::get('/tambahcustomer', [CustomerController::class, 'tambahcustomer'])->name('tambahcustomer');
Route::get('/tampilkandatacustomer/{id}', [CustomerController::class, 'tampilkandatacustomer'])->name('tampilkandatacustomer');
Route::post('/customer/store', [CustomerController::class, 'store']);
Route::post('/customer/{id}/update', [CustomerController::class, 'update']);
Route::get('/customer/{id}/destroy', [CustomerController::class, 'destroy']);
Route::get('/detailcustomer/{id}', [CustomerController::class, 'detailcustomer'])->name('detailcustomer');
Route::get('/deletecustomer/{id}', [CustomerController::class, 'deletecustomer']);
Route::get('/deletepermanen/{id}', [CustomerController::class, 'deletepermanen']);

// login
Route::get('/', [AuthController::class, 'index'])->name('index');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/cek_login', [AuthController::class, 'cek_login'])->name('cek_login');

Route::group(['Middleware' => ['auth', 'Checklevel:admin']], function () {
    // Data Master User
    Route::get('/user', [UserController::class, 'index']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::post('/user/{id}/update', [UserController::class, 'update']);
    Route::get('/user/{id}/destroy', [UserController::class, 'destroy']);

    // Data Master TipePaket
    // Route::get('/tipepaket', [TipePaketController::class, 'index']);
    Route::get('/datatipepaket', [TipePaketController::class, 'datatipepaket'])->name('datatipepaket');
    Route::get('/detailtipepaket/{id}', [TipePaketController::class, 'detailtipepaket'])->name('detailtipepaket');
    Route::get('/tampilkandatatipepaket/{id}', [TipePaketController::class, 'tampilkandatatipepaket'])->name('tampilkandatatipepaket');
    Route::post('/tipepaket/store', [TipePaketController::class, 'store']);
    Route::post('/tipepaket/{id}/update', [TipePaketController::class, 'update']);
    Route::get('/tipepaket/{id}/destroy', [TipePaketController::class, 'destroy']);
    Route::get('/deletetipe/{id}', [TipePaketController::class, 'deletetipe']);

    // Data Master NamaPaket
    // Route::get('/paket', [NamaPaketController::class, 'index']);
    Route::post('/insertpaket', [NamaPaketController::class, 'insertpaket'])->name('insertpaket');
    Route::get('/datapaket', [NamaPaketController::class, 'datapaket'])->name('datapaket');
    Route::get('/detailpaket/{id}', [NamaPaketController::class, 'detailpaket'])->name('detailpaket');
    Route::get('/tampilkandatapaket/{id}', [NamaPaketController::class, 'tampilkandatapaket'])->name('tampilkandatapaket');
    Route::post('/paket/store', [NamaPaketController::class, 'store']);
    Route::post('/paket/{id}/update', [NamaPaketController::class, 'update']);
    Route::get('/paket/{id}/destroy', [NamaPaketController::class, 'destroy']);
    Route::get('/deletepaket/{id}', [NamaPaketController::class, 'deletepaket']);

    // Data Master Transaksi
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
    Route::post('/transaksi/store', [TransaksiController::class, 'store']);
    Route::post('/transaksi/{id}/update', [TransaksiController::class, 'update']);
    Route::get('/transaksi/{id}/destroy', [TransaksiController::class, 'destroy']);
    Route::get('/delete/{id}', [TransaksiController::class, 'delete']);
   
    // Data Master Cabang
    // Route::get('/cabang', [CabangController::class, 'index']);
    Route::get('/datacabang', [CabangController::class, 'datacabang']);
    Route::post('/cabang/store', [CabangController::class, 'store']);
    Route::post('/cabang/{id}/update', [CabangController::class, 'update']);
    Route::get('/cabang/{id}/destroy', [CabangController::class, 'destroy']);
});

Route::group(['Middleware' => ['auth', 'Checklevel:admin,customer']], function () {
    Route::get('/laundry', [LaundryController::class, 'index']);
});

// Register User
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register/store', [RegisterController::class, 'store']);
Route::post('/register/{id}/update', [RegisterController::class, 'update']);
Route::get('/register/{id}/destroy', [RegisterController::class, 'destroy']);

Route::get('/dataprofile', [UserController::class, 'dataprofile']);
Route::post('/user/store', [UserController::class, 'store']);
Route::post('/user/{id}/ubah', [UserController::class, 'ubah']);
Route::get('/user/{id}/destroy', [UserController::class, 'destroy']);
