<?php

namespace App\Repositories\Passenger;

use App\Interfaces\AdminTripRepositoryInterface;
use App\Interfaces\PassengerTripRepositoryInterface;
use App\Models\Ticket;
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
        return Trip::whereHas('routes',function ($query)use($origin_id, $destination_id){
            return $query->whereIn('station_id',[$origin_id, $destination_id]);
        })->with(['seats'=>function ($query) use($destination_id){
            return $query->whereDoesntHave('tickets',function ($query) use($destination_id){
                return $query->where('destination_id',$destination_id);
            });
        }])->simplePaginate();
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
     * @param  array $ticketRecord
     * @return \App\Models\Ticket
     */
    public function ReserveTrip(array $ticketRecord)
    {
        return Ticket::create([
            'user_id' => auth()->id(),
            'trip_id' => $ticketRecord['trip_id'],
            'origin_id' => $ticketRecord['origin_id'],
            'destination_id' => $ticketRecord['destination_id'],
            'seat_id' => $ticketRecord['seat_id'],
            'bus_id' => Trip::find($ticketRecord['trip_id'])->bus->id
        ]);
    }
}
