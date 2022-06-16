<?php

namespace App\Interfaces;

use App\Models\Trip;

interface AdminTripRepositoryInterface
{
    public function getAllTrips();
    public function createTrip(int|string $bus_id);
    public function createTripRoutes(array $routes , Trip $trip);
}
