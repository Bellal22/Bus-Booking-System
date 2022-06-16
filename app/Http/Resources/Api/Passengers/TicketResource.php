<?php

namespace App\Http\Resources\Api\Passengers;

use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'username' => $this->user->name,
            'trip_id' => $this->trip_id,
            'Bus' => $this->bus,
            'seat_id' => $this->seat_id,
            'origin' => $this->origin,
            'destination' => $this->destination,
        ];
    }
}
