<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\repositories\AuthRepository;
use App\interfaces\AuthInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AuthInterface::class, AuthRepository::class);
    }
}
