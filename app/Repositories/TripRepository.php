<?php

namespace App\Repositories;

use App\Interfaces\AdminTripRepositoryInterface;
use App\Models\Station;
use App\Models\Trip;

class TripRepository implements AdminTripRepositoryInterface
{
    /**
     * @param  array  $tripRecord
     * @return mixed
     */
    public function createTrip($bus_id)
    {
        return Trip::create([
            'bus_id' => $bus_id
        ]);
    }

    /**
     * @return mixed
     */
    public function getAllTrips()
    {
        return Trip::with('routes','bus')->simplePaginate();
    }

    /**
     * @param  array  $routes
     * @param  Trip $trip
     *
     * @return mixed
     */
    public function createTripRoutes(array $routes , Trip $trip) :void
    {
        foreach ($routes as $key => $route)
        {
            $trip->routes()->create([
                'station_id' => $route,
                'order' => $key
            ]);
        }
    }
}
