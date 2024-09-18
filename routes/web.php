<?php

use Illuminate\Support\Facades\Route;

// Guest
use App\Http\Controllers\HomeController;

// Auth
use App\Http\Controllers\AuthController;

// Customer
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerProductController;
use App\Http\Controllers\CustomerProfileController;

// Superadmin
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\SuperadminProductController;
use App\Http\Controllers\SuperadminImageProductController;
use App\Http\Controllers\SuperadminUserController;
use App\Http\Controllers\SuperadminTransactionController;

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

//Guest
Route::get('/', [HomeController::class, 'index'])->name('dashboard.guest');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product.guest');
Route::get('/education', [HomeController::class, 'education'])->name('education.guest');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.guest');

//Login Filter Session
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');
});

//Superadmin
Route::get('/superadmin/login/', [AuthController::class, 'superadminlogin'])->name('login.superadmin');
Route::group(['middleware' => ['auth', 'role:superadmin']], function() {
    Route::get('/superadmin/dashboard', [SuperadminController::class, 'index'])->name('dashboard.superadmin');
    Route::get('/superadmin/product', [SuperadminProductController::class, 'index'])->name('product.superadmin');
    Route::post('/superadmin/product', [SuperadminProductController::class, 'store'])->name('post.product.superadmin');
    Route::post('/superadmin/product/edit/{id}', [SuperadminProductController::class, 'update'])->name('update.product.superadmin');
    Route::delete('/superadmin/product/delete/{id}', [SuperadminProductController::class, 'destroy'])->name('delete.product.superadmin');
    Route::get('/superadmin/product/image/{id}', [SuperadminImageProductController::class, 'show'])->name('product.image.superadmin');
    Route::post('/superadmin/product/image/{id}', [SuperadminImageProductController::class, 'store'])->name('post.product.image.superadmin');
    Route::post('/superadmin/product/image/edit/{id}', [SuperadminImageProductController::class, 'update'])->name('update.product.image.superadmin');
    Route::delete('/superadmin/product/image/delete/{id}', [SuperadminImageProductController::class, 'destroy'])->name('delete.product.image.superadmin');
    Route::get('/superadmin/customer', [SuperadminUserController::class, 'index'])->name('user.superadmin');
    Route::post('/superadmin/customer', [SuperadminUserController::class, 'store'])->name('post.user.superadmin');
    Route::post('/superadmin/customer/edit/{id}', [SuperadminUserController::class, 'update'])->name('update.user.superadmin');
    Route::delete('/superadmin/customer/delete/{id}', [SuperadminUserController::class, 'destroy'])->name('delete.user.superadmin');
    Route::get('/superadmin/progress', [SuperadminTransactionController::class, 'indexprogress'])->name('transaction.progress.superadmin');
    Route::post('/superadmin/progress/confirm/{id}', [SuperadminTransactionController::class, 'confirmprogress'])->name('confirm.transaction.progress.superadmin');
    Route::post('/superadmin/progress/confirm/cancel/{id}', [SuperadminTransactionController::class, 'cancelprogress'])->name('cancel.transaction.progress.superadmin');
    Route::get('/superadmin/delivery', [SuperadminTransactionController::class, 'indexdelivery'])->name('transaction.delivery.superadmin');
    Route::post('/superadmin/delivery/confirm/{id}', [SuperadminTransactionController::class, 'confirmdelivery'])->name('confirm.transaction.delivery.superadmin');
    Route::post('/superadmin/delivery/confirm/cancel/{id}', [SuperadminTransactionController::class, 'canceldelivery'])->name('cancel.transaction.delivery.superadmin');
    Route::get('/superadmin/success', [SuperadminTransactionController::class, 'indexsuccess'])->name('transaction.success.superadmin');
    Route::get('/superadmin/failed', [SuperadminTransactionController::class, 'indexfailed'])->name('transaction.failed.superadmin');
});

//Customer
Route::group(['middleware' => ['auth', 'role:customer']], function() {
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('dashboard.customer');
    Route::get('/customer/product/{id}', [CustomerProductController::class, 'show'])->name('product.customer');
    Route::post('/customer/order', [CustomerProductController::class, 'store'])->name('order.product.customer');
    Route::get('/customer/education', [CustomerController::class, 'education'])->name('education.customer');
    Route::get('/customer/contact', [CustomerController::class, 'contact'])->name('contact.customer');
    Route::get('/customer/history', [CustomerController::class, 'history'])->name('order.customer');
    Route::get('/customer/profile', [CustomerProfileController::class, 'index'])->name('profile.customer');
    Route::post('/customer/profile', [CustomerProfileController::class, 'store'])->name('update.profile.customer');
    Route::post('/customer/payment/transfer', [CustomerProductController::class, 'transfer'])->name('transfer.product.customer');
    Route::post('/customer/payment/cod', [CustomerProductController::class, 'cod'])->name('cod.product.customer');
});



require __DIR__.'/auth.php';
