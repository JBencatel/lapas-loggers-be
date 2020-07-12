<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shore extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function fieldWorkUnit()
    {
        return $this->belongsTo(FieldWorkUnit::class);
    }
}
