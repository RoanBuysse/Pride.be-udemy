<?php

namespace App\Http\Resources;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsCategory extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    { // return parent::toArray($request);
        if(LaravelLocalization::getCurrentLocale()=='nl')
        {
        return [
        'id' => $this->id,
        'name' => $this->nameNl,
        'slug' => $this->slug_nl,
        'created' => $this->created_at
        ];
        }

        if(LaravelLocalization::getCurrentLocale()=='en')
        {
        return [
            'id' => $this->id,
            'name' => $this->nameEn,
            'slug' => $this->slugEn,
            'created' => $this->created_at
        ];
        }

        if(LaravelLocalization::getCurrentLocale()=='fr')
        {
        return [
            'id' => $this->id,
            'name' => $this->nameFr,
            'slug' => $this->slugFr,
            'created' => $this->created_at
        ];
        }
    }
    public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://traversymedia.com')
        ];
    }
}