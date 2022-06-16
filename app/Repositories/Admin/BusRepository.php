<?php

namespace App\Repositories\Admin;

use App\Interfaces\BusRepositoryInterface;
use App\Models\Bus;
use App\Models\Seat;
use App\Models\Trip;

class BusRepository implements BusRepositoryInterface
{
    /**
     * @param  \App\Models\Bus  $bus
     * @param  \App\Models\Trip  $trip
     * @return void
     */
    public function createSeats(Bus $bus, Trip $trip): void
    {
        for ($seats = 0 ; $seats < Bus::DEFAULT_SEATS; $seats++)
        {
            Seat::create([
               'bus_id' => $bus->id,
               'trip_id' => $trip->id,
            ]);
        }
    }
}
