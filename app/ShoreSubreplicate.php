<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoreSubreplicate extends Model
{
    public $timestamps = false;

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
