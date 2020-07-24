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

    public function logs()
    {
        return $this->hasMany(Log::class);
    }

    public function servicings()
    {
        //
    }
}
