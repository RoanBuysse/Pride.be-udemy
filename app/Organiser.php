<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organiser extends Model
{
    protected $fillable=['name', 'slug'];
    public function news()
    {
        return $this->belongsToMany(Events::class, 'organiser_organiser');  
    }
}
