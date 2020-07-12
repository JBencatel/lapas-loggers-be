<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FieldWorkUnit extends Model
{
    public function shores()
    {
        return $this->hasMany(Shore::class);
    }
}
