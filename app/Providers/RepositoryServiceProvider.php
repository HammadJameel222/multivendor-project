<?php

namespace App\Providers;

use App\Interfaces\Auth\LoginInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(LoginInterface::class, function () {
            if (false) {
                return new \App\Repositories\Admin\Auth\LoginRepository;
            }
            else
            {
                return new \App\Repositories\User\Auth\LoginRepository;
            }
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
