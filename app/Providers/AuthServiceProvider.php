<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('super', function ($user) {
            return $user->role_id == 1;
        });
        Gate::define('aplikasi', function ($user) {
            return $user->role_id == 2;
        });
        Gate::define('jaringan', function ($user) {
            return $user->role_id == 3;
        });
        Gate::define('opd', function ($user) {
            return $user->role_id == 4;
        });
        Gate::define('desa', function ($user) {
            return $user->role_id == 5;
        });
        Gate::define('tenagateknis', function ($user) {
            return $user->role_id == 6;
        });
        Gate::define('user', function ($user) {
            return $user->role_id == 7;
        });
    }
}
