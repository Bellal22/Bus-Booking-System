<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Parental\HasParent;

class Passenger extends User
{
    use HasFactory,
        HasParent,
        SoftDeletes;
}
