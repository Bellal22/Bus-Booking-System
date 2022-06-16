<?php

namespace Tests\Feature;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PassengerReserveSeatTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_reserve_trip()
    {
        $user = User::factory()->createOne();
        $token = $user->createTokenForDevice();
        $trip = Trip::whereHas('seats')->whereHas('routes')->first();
        $response = $this->withHeaders(['Authorization' => 'Bearer '.$token])
            ->json('POST', '/api/passengers/reserve', [
                'trip_id'=> $trip->id,
                'origin_id'=> $trip->routes->first()->station_id,
                'destination_id'=> $trip->routes()->latest()->first()->station_id,
                'seat_id'=> $trip->seats()->latest()->first()->id,
            ]);

        $this->assertAuthenticated();

        $response->assertStatus(200);
    }
}
