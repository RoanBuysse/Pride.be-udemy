<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'date', 'time', 'organisor', 'titleNl','CategorieNl', 'bodyNl', 'titleFr', 'bodyFr','CategorieFr', 'titleEn', 'bodyEn', 'CategorieEn',
    ];
}
