<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillable=['nameNl', 'nameFr', 'nameEn', 'slug_nl', 'slug_fr', 'slug_en'];
    public function news()
    {
        return $this->belongsToMany(News::class, 'news_news_category');  
    }
}
