<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $fillable=['nameNl', 'nameFr', 'nameEn', 'slug_nl', 'slug_fr', 'slug_en'];
  
    public function events()
    {
        return $this->belongsToMany(Events::class, 'events_organisation');
    }
}
