<?php

namespace App\Providers;

use App\Interfaces\AdminTripRepositoryInterface;
use App\Interfaces\TripRepositoryInterface;
use App\Repositories\TripRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AdminTripRepositoryInterface::class, TripRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
