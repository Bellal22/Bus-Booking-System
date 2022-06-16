<?php

namespace App\Http\Controllers\Api\Passengers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Passengers\TicketRequest;
use App\Http\Resources\Api\Admins\TripResource;
use App\Http\Resources\Api\Passengers\TicketResource;
use App\Interfaces\BusRepositoryInterface;
use App\Interfaces\PassengerTripRepositoryInterface;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    private PassengerTripRepositoryInterface $tripRepository;

    public function __construct(PassengerTripRepositoryInterface $tripRepository)
    {
        $this->tripRepository = $tripRepository;
    }

    public function getTripByOriginDestination()
    {
        $trips = $this->tripRepository->getTripByOriginDestination(request()->query('origin_id') ,request()->query('destination_id'));
        return TripResource::collection($trips);
    }

    public function ReserveTrip(TicketRequest $request)
    {
        $ticket = $this->tripRepository->ReserveTrip($request->validated());
        return new TicketResource($ticket);
    }

}
