<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // New Arrow Function
        Gate::define('admin', fn (User $user) =>  $user->isAdmin);
        Gate::define('auth', fn (User $user) =>   !$user->isAdmin);

        // Old Arrow Function
        // Gate::define('admin', function (User $user) {
        //     return $user->isAdmin;
        // });
    }
}
