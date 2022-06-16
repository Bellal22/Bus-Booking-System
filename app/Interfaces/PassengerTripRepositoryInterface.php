<?php

namespace App\Interfaces;

use App\Models\Station;
use App\Models\Trip;

interface PassengerTripRepositoryInterface
{

    public function getTripByOriginDestination($origin_id,$destination_id);
    public function checkTripHasAvailableSeats(Trip $trip);
    public function ReserveTrip(Trip $trip);

}
