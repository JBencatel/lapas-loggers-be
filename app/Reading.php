<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    public function log()
    {
        return $this->belongsTo(Log::class);
    }
}
