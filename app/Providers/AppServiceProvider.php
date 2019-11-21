<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\repositories\AuthRepository;
use App\repositories\GustosRepository;
use App\interfaces\AuthInterface;
use App\Interfaces\GustosInterface;



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
        $this->app->singleton(GustosInterface::class, GustosRepository::class);

    }
}
