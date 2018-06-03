<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = [
         'nameNl', 'nameEn', 'nameFr'
    ];
    public function news()
    {
        $this->belongsTo(News::class);
    }

    public function Events()
    {
        $this->belongsTo(Events::class);
    }
}
