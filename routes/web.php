<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

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
Route::get('/', [DeviceController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/ligar/{id}', [DeviceController::class, 'powerOn'])->name('ligar');
Route::post('/desligar/{id}', [DeviceController::class, 'powerOff'])->name('desligar');

require __DIR__.'/auth.php';
