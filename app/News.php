<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'titleNl', 'bodyNl', 'titleFr', 'bodyFr', 'titleEn', 'bodyEn',
    ];
}
