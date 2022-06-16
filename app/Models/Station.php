<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use App\Http\Filters\StationFilter;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Station extends Model implements TranslatableContract
{
    use HasFactory,
        Translatable,
        Filterable;

    public $translatedAttributes = ['title'];

    /**
     * The model filter name.
     *
     * @var string
     */
    protected $filter = StationFilter::class;


}
