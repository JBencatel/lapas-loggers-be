<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicing extends Model
{
    public function servicings()
    {
        return $this->belongsToMany(Person::class, 'people_servicings');
    }
}
