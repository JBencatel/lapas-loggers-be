<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shore extends Model
{

    protected $fillable = ['name', 'code', 'country_id', 'fwunit_id', 'latitude', 'longitude'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function fieldWorkUnit()
    {
        return $this->belongsTo(FieldWorkUnit::class);
    }
}
