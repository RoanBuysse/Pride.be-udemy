<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'date', 'time', 'organisor', 'titleNl','CategorieNl', 'bodyNl', 'titleFr', 'bodyFr','CategorieFr', 'titleEn', 'bodyEn', 'CategorieEn',
    ];


    public function category()
    {
        return $this->belongsToMany(Eventscategory::class, 'events_events_category');
    }
}
