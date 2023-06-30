<?php

use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\TravelPackageController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\homeController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/detail/{slug}', [detailController::class, 'index'])->name('detail');
// Route::get('/checkout', [checkoutController::class, 'index'])->name('checkout');
// Route::get('/checkout/success', [checkoutController::class, 'success'])->name('checkout-success');
Route::post('/checkout/{id}', [checkoutController::class, 'process'])
    ->name('checkout-process')
    ->middleware(['auth','verified']);

Route::get('/checkout/{id}', [checkoutController::class, 'index'])
    ->name('checkout')
    ->middleware(['auth','verified']);

Route::post('/checkout/create/{detail_id}', [checkoutController::class, 'create'])
    ->name('checkout-create')
    ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}', [checkoutController::class, 'remove'])
    ->name('checkout-remove')
    ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}', [checkoutController::class, 'success'])
    ->name('checkout-success')
    ->middleware(['auth','verified']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin'
])->group(function () {
    Route::get('/dashboard',[dashboardController::class, 'index'])->name('dashboard');
    Route::resource('travel-package', TravelPackageController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('transaction', TransactionController::class);
});
// Auth::routes(['verify' => true]);
