<?php

namespace App\Models;

use App\Http\Requests\Api\Passengers\TicketRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * get trip related to this seat.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
    /**
     * get bus related to this seat.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
    /**
     * get tickets related to this seat.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
