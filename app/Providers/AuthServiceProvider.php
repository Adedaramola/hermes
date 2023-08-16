<?php

declare(strict_types=1);

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Store;
use App\Policies\StorePolicy;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

final class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Store::class => StorePolicy::class
    ];

    public function register(): void
    {
        $this->app->bind(StatefulGuard::class, fn () => Auth::guard('web'));
    }

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

    }
}
