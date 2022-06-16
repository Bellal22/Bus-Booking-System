<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegisterRequest;
use App\Models\Admin;
use App\Models\Passenger;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Handle a Registration request to the application.
     *
     * @param \App\Http\Requests\Api\RegisterRequest $request
     * @throws \Illuminate\Validation\ValidationException
     * @return \Illuminate\Http\Resources\Json\JsonResource
     */
    public function register(RegisterRequest $request)
    {
        $user = match ($request->type) {
            User::ADMIN_TYPE => $this->createAdmin($request),
            User::PASSENGER_TYPE => $this->createPassenger($request),
            default => throw ValidationException::withMessages([trans('users.messages.typeNotSupported')]),
        };

        return $user->getResource()->additional([
            'token' => $user->createTokenForDevice(
                /*
                 * In Case we decide to change The Logic with different platforms [ Android , IOS etc..].
                 */
                $request->header('user-agent')
            ),
            'message' => trans('users.messages.created'),
        ]);
    }

    private function createAdmin(RegisterRequest $request)
    {
        $admin = new Admin();

        $admin
            ->forceFill($request->only('type'))
            ->forceFill(['email_verified_at' => Carbon::now()])
            ->fill($request->allWithHashedPassword())
            ->save();

        return $admin;
    }

    private function createPassenger(RegisterRequest $request)
    {
        $passenger = new Passenger();

        $passenger
            ->forceFill($request->only('type'))
            ->forceFill(['email_verified_at' => Carbon::now()])
            ->fill($request->allWithHashedPassword())
            ->save();

        return $passenger;
    }
}
