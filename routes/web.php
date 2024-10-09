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

// Authenticated Routes (Common to all roles)
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');

});

// Superadmin Routes (Role-based access for Superadmin)
Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('/superadmin/dashboard', [SuperadminController::class, 'index'])->name('superadmin.dashboard');
    Route::get('/dashboard', [SuperadminController::class, 'index'])->name('dashboard');
    Route::get('/customers', [SuperadminController::class, 'customerData'])->name('customers.data');

    // Superadmin Product Routes
    Route::get('/superadmin/product', [SuperadminProductController::class, 'index'])->name('product.superadmin');
    Route::post('/superadmin/product', [SuperadminProductController::class, 'store'])->name('post.product.superadmin');
    Route::post('/superadmin/product/edit/{id}', [SuperadminProductController::class, 'update'])->name('update.product.superadmin');
    Route::delete('/superadmin/product/delete/{id}', [SuperadminProductController::class, 'destroy'])->name('delete.product.superadmin');

    // Superadmin Customer Routes
    Route::get('/superadmin/customer', [SuperadminUserController::class, 'index'])->name('user.superadmin');
    Route::post('/superadmin/customer', [SuperadminUserController::class, 'store'])->name('post.user.superadmin');
    Route::post('/superadmin/customer/edit/{id}', [SuperadminUserController::class, 'update'])->name('update.user.superadmin');
    Route::delete('/superadmin/customer/delete/{id}', [SuperadminUserController::class, 'destroy'])->name('delete.user.superadmin');

    // Superadmin Transaction Routes
    Route::get('/superadmin/progress', [SuperadminTransactionController::class, 'indexprogress'])->name('transaction.progress.superadmin');
    Route::get('/superadmin/delivery', [SuperadminTransactionController::class, 'indexdelivery'])->name('transaction.delivery.superadmin');
});

// Customer Routes (Role-based access for Customer)
Route::group(['middleware' => ['auth', 'role:customer']], function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('dashboard.customer');

    // Customer Product Routes
    Route::get('/customer/product/{id}', [CustomerProductController::class, 'show'])->name('product.customer');
    Route::post('/customer/order', [CustomerProductController::class, 'store'])->name('order.product.customer');

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
