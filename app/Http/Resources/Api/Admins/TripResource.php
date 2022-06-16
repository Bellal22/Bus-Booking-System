<?php

namespace App\Http\Resources\Api\Admins;

use Illuminate\Http\Resources\Json\JsonResource;

class TripResource extends JsonResource
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
            'bus' => $this->bus->only('id','licence_number'),
            'routes' => $this->routes->map(function($route){
                return [
                        'id' => $route->id,
                        'station_name' => $route->station->title,
                        'order' => $route->order
                    ];
            })
        ];
    }
}
