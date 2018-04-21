<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'titleNl', 'bodyNl', 'titleFr', 'bodyFr', 'titleEn', 'bodyEn', 'photo_id',
    ];

    public function category()
    {
        return $this->belongsToMany(Newscategory::class, 'news_news_category');
    }

    public function photo()
    {
        return $this->belongTo(Photo::class);
    }
}
