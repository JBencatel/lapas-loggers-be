<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function servicings()
    {
        return $this->belongsToMany(Servicing::class, 'people_servicings');
    }
}
