<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Coupon\ClientCouponController;
use App\Http\Controllers\StaticWeb\StaticWebController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [StaticWebController::class, 'indexAction'])->name('static-web.index');
Route::get('/fire', [StaticWebController::class, 'firePageView'])->name('static-web.fire');
Route::get('/why-mutual-global', [StaticWebController::class, 'whyMutualGlobalPageView'])->name('static-web.why-mutual-global');
Route::get('/terms', [StaticWebController::class, 'termsPageView'])->name('static-web.terms');
Route::get('/privacy_policy', [StaticWebController::class, 'privacyPolicyPageView'])->name('static-web.privacy_policy');

# Client Routes
Route::prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'clientIndex'])->name('client.index');
    Route::post('/uhid-show', [ClientController::class, 'clientUhidShowMgib'])->name('client.uhid-show');
    Route::get('/uhid-download/{id}', [ClientController::class, 'downloadUhidMgib'])->name('client.uhid-download');
});

# Health Card Coupon Routes

Route::prefix('Coupon')->group(function () {
    Route::get('/', [ClientCouponController::class, 'couponIndex'])->name('coupon.index');
    Route::post('/get-coupon', [ClientCouponController::class, 'GetCouponIndex'])->name('getCoupon');
    
});

# Admin Routes

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminAuthController::class, 'loginView'])->name('admin.loginView');
    Route::post('/login', [LoginController::class, 'doLogin'])->name('admin.doLogin');
    Route::middleware('admin')->group(function () {
        Route::get('/import-uhid-form', [AdminSettingsController::class, 'adminImportUhidForm'])->name('admin.import-uhid-form');
        Route::post('/download-uhid-sample-csv', [AdminSettingsController::class, 'downloadSampleCSV'])->name('admin.downloadSampleCSV');
        Route::post('/download-uhid-sample-csv-for-delete', [AdminSettingsController::class, 'downloadSampleCSVForDelete'])->name('admin.downloadSampleCSVForDelete');
        
        Route::post('/store-uhid', [AdminSettingsController::class, 'adminStoreUhid'])->name('admin.store-uhid');

        Route::get('/delete-uhid-form', [AdminSettingsController::class, 'adminDeleteUhidForm'])->name('admin.delete-uhid-form');
        Route::post('/delete-uhid', [AdminSettingsController::class, 'adminDeleteUhid'])->name('admin.delete-uhid');
    });
});

Route::get('/logout', [LoginController::class, 'logOut'])->name('logOut');


#Testing    
Route::view('/test-view', 'welcome');
