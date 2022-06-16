<?php

namespace App\Interfaces;

use App\Models\Bus;
use App\Models\Trip;

interface BusRepositoryInterface
{
    public function createSeats(Bus $bus , Trip $trip) :void ;
}
