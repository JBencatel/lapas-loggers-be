<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicing extends Model
{

    public function shore()
    {
        return $this->belongsTo(Shore::class);
    }

    public function participants()
    {
        return $this->belongsToMany(Person::class, 'people_servicings');
    }

    public function getParticipantsAttribute()
    {
        return $this->participants()->allRelatedIds();
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
