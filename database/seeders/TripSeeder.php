<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Seat;
use App\Models\Station;
use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bus = Bus::factory()->createOne();
        $trip = Trip::create(['bus_id' => $bus->id]);
        for ($seats = 0 ; $seats < Bus::DEFAULT_SEATS; $seats++)
        {
            Seat::create([
                'bus_id' => $bus->id,
                'trip_id' => $trip->id,
            ]);
        }
        $routes = Station::limit(5)->pluck('id');
        foreach ($routes as $key => $route)
        {
            $trip->routes()->create([
                'station_id' => $route,
                'order' => $key
            ]);
        }
    }
}
