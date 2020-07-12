<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoggerType extends Model
{
    public function serials()
    {
        return $this->hasMany(Serial::class);
    }
}
