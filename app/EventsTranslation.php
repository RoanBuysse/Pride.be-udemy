<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NewsTranslation;

class EventsTranslation extends Model
{
    protected $fillable = ['language', 'title', 'body', 'locatie', 'organisator', 'category', 'contact', 'events_id'];


    
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
