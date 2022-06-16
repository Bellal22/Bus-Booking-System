<?php

namespace App\Models;

use App\Http\Filters\BusFilter;
use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory,
        Filterable;

    protected $fillable = ['licence_number'];

    const DEFAULT_SEATS = 12;

    /**
     * The model filter name.
     *
     * @var string
     */
    protected $filter = BusFilter::class;

    /**
     * The model default attributes.
     *
     * @var array
     */

    protected $attributes = [
        'seats_no' => self::DEFAULT_SEATS,
    ];


}
