<?php

namespace App\Http\Controllers\Api\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admins\BusRequest;
use App\Http\Resources\Api\Admins\BusResource;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $buses = Bus::filter()->simplePaginate();
        return BusResource::collection($buses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Http\Resources\Api\Admins\BusResource
     */
    public function store(BusRequest $request)
    {
        $bus = Bus::create($request->validated());
        return new BusResource($bus);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bus  $bus
     * @return \App\Http\Resources\Api\Admins\BusResource
     */
    public function show(Bus $bus)
    {
        return new BusResource($bus);
    }
}
