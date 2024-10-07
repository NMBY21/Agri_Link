<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\SuperadminProductController;
use App\Http\Controllers\SuperadminImageProductController;
use App\Http\Controllers\SuperadminUserController;
use App\Http\Controllers\SuperadminTransactionController;
use App\Http\Controllers\CustomerProductController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\LanguageController;



Route::get('/set-language/{lang}', [LanguageController::class, 'setLanguage'])->name('set-language');

Route::group(['prefix' => '{locale}', 'middleware' => 'setLocale'], function () {
    
});
// Guest Routes
Route::get('/', [HomeController::class, 'index'])->name('dashboard.guest');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product.guest');
Route::get('/education', [HomeController::class, 'education'])->name('education.guest');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.guest');

// Login Filter Session
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');
});

// Superadmin Routes
Route::get('/superadmin/login', [AuthController::class, 'superadminlogin'])->name('login.superadmin');
Route::group(['middleware' => ['auth', 'role:superadmin']], function() {

    // Superadmin Dashboard
    Route::get('/superadmin/dashboard', [SuperadminController::class, 'index'])->name('superadmin.dashboard');
    Route::get('/dashboard', [SuperadminController::class, 'index'])->name('dashboard');
    Route::get('/customers', [SuperadminController::class, 'customerData'])->name('customers.data');

    // Superadmin Product Routes
    Route::get('/superadmin/product', [SuperadminProductController::class, 'index'])->name('product.superadmin');
    Route::post('/superadmin/product', [SuperadminProductController::class, 'store'])->name('post.product.superadmin');
    Route::post('/superadmin/product/edit/{id}', [SuperadminProductController::class, 'update'])->name('update.product.superadmin');
    Route::delete('/superadmin/product/delete/{id}', [SuperadminProductController::class, 'destroy'])->name('delete.product.superadmin');

    // Superadmin Product Images Routes
    Route::get('/superadmin/product/image/{id}', [SuperadminImageProductController::class, 'show'])->name('product.image.superadmin');
    Route::post('/superadmin/product/image/{id}', [SuperadminImageProductController::class, 'store'])->name('post.product.image.superadmin');
    Route::post('/superadmin/product/image/edit/{id}', [SuperadminImageProductController::class, 'update'])->name('update.product.image.superadmin');
    Route::delete('/superadmin/product/image/delete/{id}', [SuperadminImageProductController::class, 'destroy'])->name('delete.product.image.superadmin');

    // Superadmin Customer (User) Management Routes
    Route::get('/superadmin/customer', [SuperadminUserController::class, 'index'])->name('user.superadmin');
    Route::post('/superadmin/customer', [SuperadminUserController::class, 'store'])->name('post.user.superadmin');
    Route::get('/superadmin/customers', [SuperadminController::class, 'customerData'])->name('superadmin.customers');

    Route::post('/superadmin/customer/edit/{id}', [SuperadminUserController::class, 'update'])->name('update.user.superadmin');
    Route::delete('/superadmin/customer/delete/{id}', [SuperadminUserController::class, 'destroy'])->name('delete.user.superadmin');

    // Superadmin Transaction Routes
    Route::get('/superadmin/progress', [SuperadminTransactionController::class, 'indexprogress'])->name('transaction.progress.superadmin');
    Route::post('/superadmin/progress/confirm/{id}', [SuperadminTransactionController::class, 'confirmprogress'])->name('confirm.transaction.progress.superadmin');
    Route::post('/superadmin/progress/confirm/cancel/{id}', [SuperadminTransactionController::class, 'cancelprogress'])->name('cancel.transaction.progress.superadmin');
    
    Route::get('/superadmin/delivery', [SuperadminTransactionController::class, 'indexdelivery'])->name('transaction.delivery.superadmin');
    Route::post('/superadmin/delivery/confirm/{id}', [SuperadminTransactionController::class, 'confirmdelivery'])->name('confirm.transaction.delivery.superadmin');
    Route::post('/superadmin/delivery/confirm/cancel/{id}', [SuperadminTransactionController::class, 'canceldelivery'])->name('cancel.transaction.delivery.superadmin');

Route::get('/superadmin/success', [SuperadminTransactionController::class, 'indexsuccess'])->name('transaction.success.superadmin');
    Route::get('/superadmin/failed', [SuperadminTransactionController::class, 'indexfailed'])->name('transaction.failed.superadmin');
});

// Customer Routes
Route::group(['middleware' => ['auth', 'role:customer']], function() {

    // Customer Dashboard
    Route::get('/customer/dashboard', [AuthController::class, 'index'])->name('customer.dashboard');
    

    // Customer Product Routes
    Route::get('/customer/product/{id}', [CustomerProductController::class, 'show'])->name('product.customer');
    Route::post('/customer/order', [CustomerProductController::class, 'store'])->name('order.product.customer');

    // Customer Education and Contact Routes
    Route::get('/customer/education', [CustomerController::class, 'education'])->name('education.customer');
    Route::get('/customer/contact', [CustomerController::class, 'contact'])->name('contact.customer');

    // Customer Order History
    Route::get('/customer/history', [CustomerController::class, 'history'])->name('order.customer');

    // Customer Profile
    Route::get('/customer/profile', [CustomerProfileController::class, 'index'])->name('profile.customer');
    Route::post('/customer/profile', [CustomerProfileController::class, 'store'])->name('update.profile.customer');

    // Customer Payment
    Route::post('/customer/payment/transfer', [CustomerProductController::class, 'transfer'])->name('transfer.product.customer');
    Route::post('/customer/payment/cod', [CustomerProductController::class, 'cod'])->name('cod.product.customer');
});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Include additional authentication routes
require __DIR__.'/auth.php';
