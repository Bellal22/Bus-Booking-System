<?php

namespace App\Http\Controllers\Api\Passengers;

use App\Http\Controllers\Controller;
use App\Interfaces\BusRepositoryInterface;
use App\Models\Trip;
use Illuminate\Http\Request;

class BusController extends Controller
{
    private BusRepositoryInterface $busRepository;

    public function __construct(BusRepositoryInterface $busRepository)
    {
        $this->busRepository = $busRepository;
    }

}
