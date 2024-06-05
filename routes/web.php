<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Auth\AuthController;
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
Route::get('/about', [StaticWebController::class, 'aboutPage'])->name('static-web.about');

Route::get('/login', [AuthController::class, 'showLogin'])->name('loginView');
Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');
Route::post('/logout', [AuthController::class, 'logOut'])->name('logout');


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

Route::prefix('admin')->name('Admin.')->middleware('admin')->group(function () {
    # dashboard route
    Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('dashboard');

    Route::get('/import-uhid-form', [AdminSettingsController::class, 'adminImportUhidForm'])->name('import-uhid-form');
    Route::post('/download-uhid-sample-csv', [AdminSettingsController::class, 'downloadSampleCSV'])->name('downloadSampleCSV');
    Route::post('/download-uhid-sample-csv-for-delete', [AdminSettingsController::class, 'downloadSampleCSVForDelete'])->name('downloadSampleCSVForDelete');

    Route::post('/store-uhid', [AdminSettingsController::class, 'adminStoreUhid'])->name('store-uhid');

    Route::get('/delete-uhid-form', [AdminSettingsController::class, 'adminDeleteUhidForm'])->name('delete-uhid-form');
    Route::post('/delete-uhid', [AdminSettingsController::class, 'adminDeleteUhid'])->name('delete-uhid');

    Route::get('/client-registration', [AdminClientController::class, 'registerClientView'])->name('registerClientView');
    Route::get('/add-client-policy', [AdminClientController::class, 'addClientPolicyView'])->name('addClientPolicyView');
    
});

Route::prefix('client')->name('Client.')->group(function () {
    # dashboard route
    Route::get('/dashboard', [ClientController::class, 'showDashboard'])->name('dashboard');

    # Policy route
    Route::get('/policy', [ClientController::class, 'showPolicy'])->name('policy');

    # Policy route
    Route::get('/policy-table-json', [ClientController::class, 'clientPolicyTableJson'])->name('clientPolicyTableJson');
});


#Testing    
Route::view('/test-view', 'welcome');

// // Import the admin routes file
// Route::prefix('admin')->namespace('Admin')->group(base_path('routes/panel/admin.php'));

// // Import the client routes file
// Route::prefix('client')->namespace('Client')->group(base_path('routes/panel/client.php'));
