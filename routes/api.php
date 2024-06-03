<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController as AuthController;
use App\Http\Controllers\Api\DeviceController;
use App\Http\Controllers\Api\DeviceLogController;
use App\Http\Controllers\Api\DashboardController;;
use App\Http\Controllers\Api\SaklarController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'create')->name('login');
});

// Route::get('/', function () {
//     return view('/pages/dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(DeviceLogController::class)->group(function () {
    Route::get('/devicelog/{id}', 'show')->name('devicelog.show');
    Route::post('/devicelog', 'store')->name('devicelog.store');
})->middleware(['auth', 'verified'])->name('device');

Route::controller(DeviceController::class)->group(function () {
    Route::get('/device', 'index')->name('device');
    Route::post('/device', 'store')->name('device.store');
    Route::get('/device/{id}',  'show')->name('device.show');
    Route::put('/device/{id}',  'update')->name('device.update');
    Route::delete('/device/{id}', 'destroy')->name('device.destroy');
})->middleware(['auth', 'verified'])->name('device');

Route::controller(SaklarController::class)->group(function () {
    Route::get('/saklar', 'index')->name('saklar');
})->middleware(['auth', 'verified'])->name('saklar');


require __DIR__.'/auth.php';
