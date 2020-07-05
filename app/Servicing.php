<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicing extends Model
{
    public function persons()
    {
        return $this->belongsToMany(Person::class, 'people_servicings');
    }

    public function serials()
    {
        return $this->belongsToMany(Serial::class, 'serials_servicings');
    }
}
