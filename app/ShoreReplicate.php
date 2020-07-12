<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoreReplicate extends Model
{
    public $timestamps = false;

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
