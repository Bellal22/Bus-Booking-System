<?php

namespace App\Http\Filters;

class BusFilter extends BaseFilters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = [
        'id',
        'licence_number',
    ];

    /**
     * Filter the query by a given licence_number.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function licenceNumber($value)
    {
        if ($value) {
            return $this->builder->where('licence_number','like',"%$value%");
        }

        return $this->builder;
    }
    /**
     * Filter the query by a given id.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function id($value)
    {
        if ($value) {
            return $this->builder->where('id',$value);
        }

        return $this->builder;
    }
}
