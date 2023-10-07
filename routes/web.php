<?php

use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Client\ClientController;
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

Route::get('/', [ClientController::class, 'clientIndex'])->name('client.index');


# Client Routes
Route::prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'clientIndex'])->name('client.index');
    Route::post('/uhid-show', [ClientController::class, 'clientUhidShow'])->name('client.uhid-show');
    Route::get('/uhid-download/{id}', [ClientController::class, 'downloadUhid'])->name('client.uhid-download');
});


# Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/import-uhid-form', [AdminSettingsController::class, 'adminImportUhidForm'])->name('admin.import-uhid-form');
    Route::post('/store-uhid', [AdminSettingsController::class, 'adminStoreUhid'])->name('admin.store-uhid');
});
