<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\AuthenticateSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoreSettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function (): void {
    Route::controller(AuthenticateSessionController::class)->group(function (): void {
        Route::get('/login', 'index')->name('login');
    });
});

Route::get('/', DashboardController::class)->name('dashboard');
Route::get('/settings', [StoreSettingsController::class, 'index'])->name('settings');
