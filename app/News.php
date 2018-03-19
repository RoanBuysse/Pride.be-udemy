<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'titleNl', 'bodyNl', 'titleFr', 'bodyFr', 'titleEn', 'bodyEn',
    ];

    public function category()
    {
        return $this->belogsToMany(Newscategory::class);
    }
}
