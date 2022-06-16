<?php

namespace App\Repositories\Passenger;

use App\Interfaces\AdminTripRepositoryInterface;
use App\Interfaces\PassengerTripRepositoryInterface;
use App\Models\Trip;

class TripRepository implements PassengerTripRepositoryInterface
{
    /**
     * @param $origin_id
     * @param $destination_id
     * @return mixed
     */
    public function getTripByOriginDestination($origin_id, $destination_id): mixed
    {
        return  Trip::whereHas('routes',function ($query)use($origin_id, $destination_id){
            return $query->whereIn('station_id',[$origin_id, $destination_id]);
        })->simplePaginate();
    }

    /**
     * @param  \App\Models\Trip  $trip
     * @return mixed
     */
    public function checkTripHasAvailableSeats(Trip $trip)
    {
        // TODO: Implement checkTripHasAvailableSeats() method.
    }

    /**
     * @param  \App\Models\Trip  $trip
     * @return mixed
     */
    public function ReserveTrip(Trip $trip)
    {
        // TODO: Implement ReserveTrip() method.
    }
}
