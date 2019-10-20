<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\interfaces\AuthInterface;
use App\Repository\AuthServiceRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AuthInterface::class, AuthServiceRepository::class);
    }
}
