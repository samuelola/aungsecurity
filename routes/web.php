<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\TenantDashboardController;
use App\Http\Controllers\TenantUserController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\WalletController;


$domain = parse_url(config('app.url'), PHP_URL_HOST);

Route::get('/refresh-csrf', function () {
    return response()->json(['csrf_token' => csrf_token()]);
})->middleware('refresh_token');

Route::controller(MainController::class)->group(function () {

      Route::get('/', 'index')->name('home');
});

Route::controller(TenantController::class)->group(function () {

      Route::get('/register', 'create')->name('tenant_create');
      Route::post('/registerr', 'store')->name('tenant_store');
});



Route::domain('{tenant}.' . $domain)
     ->middleware('tenant')->group(function () {

      Route::controller(TenantUserController::class)->group(function () {
         Route::get('/estate_register', 'showRegistrationForm')->name('tenant_user_reg');
         Route::post('/estate_registerr', 'storeRegister')->name('tenant_user_store_reg');
         Route::get('/estate_login','showLoginForm')->name('tenant_user_login');
         Route::post('/estate_loginn', 'userStore')->name('tenant_user_submit'); // login post
      
       });

       Route::middleware(['tenant.auth', 'role:user'])->group(function () {

            Route::post('/estate_logout', [TenantUserController::class, 'logout'])->name('tenant.logout');
            Route::controller(TenantDashboardController::class)->group(function () {
             Route::get('/estate_dashboard', 'index')->name('tenant_user_dashboard');
            });

            Route::controller(ResidentController::class)->group(function () {

              Route::get('/resident_transaction', 'residentTransaction')->name('resident_transaction');
            });

            Route::controller(WalletController::class)->group(function () {
                  
                  Route::get('/fundwallet', 'fundWallet')->name('fundwallet');
                  Route::post('/savefundWallet', 'saveFundWallet')->name('savefundWallet');
                  Route::get('/wallet', 'allWallet')->name('allwallet');
            });

       });

       Route::middleware(['tenant.auth', 'role:admin'])->group(function () {

            Route::post('/admin_estate_logout', [TenantUserController::class, 'adminLogout'])->name('admin_tenant.logout');
            Route::controller(TenantDashboardController::class)->group(function () {
            Route::get('/admin_estate_dashboard', 'adminIndex')->name('tenant_admin_dashboard');
            });

            Route::controller(ResidentController::class)->group(function () {

              Route::get('/admin_resident_transaction', 'adminTransaction')->name('admin_transaction');
            });

            

       });

       

       

       


       
        
});
