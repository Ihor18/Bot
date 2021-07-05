<?php

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

Route::get('/', [\App\Http\Controllers\AdvertisePageController::class,'index'])->name('main');

Auth::routes();

Route::get('/webhook',[\App\Http\Controllers\TelegramController::class,'webhook']);
Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index'])->name('admin');
Route::post('/admin/store',[\App\Http\Controllers\AdminController::class,'store'])->name('admin.store');
Route::post('/35aUojv1YQPOssPEpn5i3q6vjdhh7hl7djVWDIAVhFDRMAwZ1tj0Og2v4PWyj4PZ/webhook', [\App\Http\Controllers\TelegramController::class,'index']);
