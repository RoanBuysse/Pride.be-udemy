<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Resources\NewsCategory as NewsCategoryResource;



class News extends JsonResource
{
     /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        if(LaravelLocalization::getCurrentLocale()=='nl')
        {
        return [
        'id' => $this->id,
        'title' => $this->titleNl,
        'body' => $this->bodyNl,
        'photo_id' => $this->photo_id,
        'photo'=> $this->photo,
        // 'category'=> (string)$this->category->pluck('nameNl'),
        'category'=> collect($this->category->first()),
        // 'category'=> $this->whenPivotLoaded('news_news_category', function()
        // {
        //     return $this->pivot->id;
        // }),
    //    dd($this->category),
        'created' => $this->created_at
        ];
        }

        if(LaravelLocalization::getCurrentLocale()=='en')
        {
        return [
        'id' => $this->id,
        'title' => $this->titleEn,
        'body' => $this->bodyEn,
        'photo_id' => $this->photo_id,
        'photo'=> new PhotoResource($this->photo),
        'created' => $this->created_at
        ];
        }

        if(LaravelLocalization::getCurrentLocale()=='fr')
        {
        return [
        'id' => $this->id,
        'title' => $this->titleFr,
        'body' => $this->bodyFr,
        'photo_id' => $this->photo_id,
        'photo'=> new PhotoResource($this->photo),
        'created' => $this->created_at
        ];
        }
        // return [
        //     'id' => $this->id,
        //     'bodyNl' => $this->bodyNl,
        //     'titleNl' => $this->titleNl,
        //     'bodyNl' => $this->bodyNl,
        //     'titleFr' => $this->titleFr,
        //     'bodyFr' => $this->bodyFr,
        //     'titleEn' => $this->titleEn,
        //     'bodyEn' => $this->bodyEn,
        //     'photo_id' => $this->photo_id
        // ];
    }
    public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://traversymedia.com')
        ];
    }
}