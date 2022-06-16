<?php

namespace App\Http\Controllers\Api\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admins\TripRequest;
use App\Http\Resources\Api\Admins\TripResource;
use App\Interfaces\AdminTripRepositoryInterface;
use App\Interfaces\BusRepositoryInterface;
use App\Models\Bus;
use App\Models\Station;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    private AdminTripRepositoryInterface $tripRepository;
    private BusRepositoryInterface $busRepository;

    public function __construct(AdminTripRepositoryInterface $tripRepository , BusRepositoryInterface $busRepository)
    {
        $this->tripRepository = $tripRepository;
        $this->busRepository = $busRepository;
    }

    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return TripResource::collection($this->tripRepository->getAllTrips());
    }

    public function store(TripRequest $request)
    {
        DB::beginTransaction();
        try {
            $trip = $this->tripRepository->createTrip($request->bus_id);
            $this->busRepository->createSeats(Bus::find($request->bus_id),$trip);
            $this->tripRepository->createTripRoutes($request->routes,$trip);
            DB::commit();
            return new TripResource($trip);
        }catch(\Throwable $throwable)
        {
            DB::rollBack();
            return response()->json(['message' => $throwable->getMessage()],422);
        }
    }

}
