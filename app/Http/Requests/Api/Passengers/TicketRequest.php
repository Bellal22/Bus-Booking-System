<?php

namespace App\Http\Requests\Api\Passengers;

use App\Models\Route;
use App\Models\Seat;
use App\Models\Station;
use App\Models\Trip;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $seats = $this->getAvailableSeats();

        return [
            'trip_id' => 'required|exists:trips,id',
            'origin_id' => 'required|exists:stations,id',
            'destination_id' => 'required|exists:stations,id',
            'seat_id' => ['required','exists:seats,id',Rule::in($seats)],
        ];
    }

    /**
     * @return mixed
     */
    private function getAvailableSeats() :array
    {
        $route = Route::where('trip_id', $this->trip_id)->where('station_id', $this->destination_id)->first();
        if ($route) {
            $restricted_stations = Route::where('trip_id', $this->trip_id)->where('order', '>=',
                $route->order)->pluck('station_id');
        }
        $seats = Seat::whereDoesntHave('tickets', function ($query) use ($restricted_stations) {
            return $query->where('trip_id', $this->trip_id)->whereIn('destination_id', $restricted_stations);
        })->pluck('id')->toArray();

        return $seats;
    }
}
