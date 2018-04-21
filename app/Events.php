<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'date', 'time', 'organisor', 'titleNl','CategorieNl', 'bodyNl', 'titleFr', 'bodyFr','CategorieFr', 'titleEn', 'bodyEn', 'CategorieEn', 'photo_id',
    ];


    public function category()
    {
        return $this->belongsToMany(Eventscategory::class, 'events_events_category');
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }
}
