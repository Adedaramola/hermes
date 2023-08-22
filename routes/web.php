<?php

declare(strict_types=1);

use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Livewire\Pages\Auth\Login;
use App\Livewire\Pages\Dashboard;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => RedirectIfAuthenticated::class
], function ($router) {
    $router->get('/login', Login::class)->name('login');
});

Route::group([
    'middleware' => []
], function ($router) {
    $router->get('/', Dashboard::class)->name('dashboard');
});