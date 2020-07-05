<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    public function servicings()
    {
        return $this->belongsToMany(Servicing::class, 'serials_servicings');
    }
}
