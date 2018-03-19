<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventsCategory extends Model
{
    public function events()
    {
        return $this->belongsToMany(Events::class);  
    }
}
