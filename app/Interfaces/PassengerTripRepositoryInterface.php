<?php

namespace App\Interfaces;

use App\Models\Station;
use App\Models\Trip;
use phpDocumentor\Reflection\Types\Collection;

interface PassengerTripRepositoryInterface
{
    public function getTripByOriginDestination(int|string $origin_id, int|string $destination_id) : mixed;
    public function checkTripHasAvailableSeats(Trip $trip);
    public function ReserveTrip(array $ticketRecord);
}
