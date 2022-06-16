<?php

namespace App\Providers;

use App\Interfaces\AdminTripRepositoryInterface;
use App\Interfaces\PassengerTripRepositoryInterface;
use App\Repositories\Admin\TripRepository as AdminTripRepository;
use App\Repositories\Passenger\TripRepository as PassengerTripRepository;
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
        $this->app->bind(AdminTripRepositoryInterface::class, AdminTripRepository::class);
        $this->app->bind(PassengerTripRepositoryInterface::class, PassengerTripRepository::class);
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
