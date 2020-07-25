<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function logger()
    {
        return $this->belongsTo(Serial::class);
    }

    public function servicing()
    {
        return $this->belongsTo(Servicing::class);
    }

}
