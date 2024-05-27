<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController as AuthController;
use App\Http\Controllers\Api\DeviceController;
use App\Http\Controllers\Api\DeviceLogController;
use App\Http\Controllers\Api\DashboardController;
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

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth:sanctum');

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
