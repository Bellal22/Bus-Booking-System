<?php

namespace App\Http\Resources\Api\Admins;

use Illuminate\Http\Resources\Json\JsonResource;

class BusResource extends JsonResource
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
            'licence_number' => $this->licence_number,
            'seats_no' => $this->seats_no
        ];
    }
}
