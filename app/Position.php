<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function shore()
    {
        return $this->belongsTo(Shore::class);
    }

    public function shoreLevel()
    {
        return $this->belongsTo(ShoreLevel::class);
    }

    public function shoreExposure()
    {
        return $this->belongsTo(ShoreExposure::class);
    }    

    public function serials()
    {
        return $this->hasMany(Serial::class);
    }
}
