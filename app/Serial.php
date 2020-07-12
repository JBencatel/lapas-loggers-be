<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    public function loggerType()
    {
        return $this->belongsTo(LoggerType::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    
    public function servicings()
    {
        return $this->belongsToMany(Servicing::class, 'serials_servicings');
    }
}
