<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class News extends Resource
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
        return [
            'id' => $this->id,
            'titleNl' => $this->titleNl,
            'bodyNl' => $this->bodyNl,
            'titleFr' => $this->titleFr,
            'bodyFr' => $this->bodyFr,
            'titleEn' => $this->titleEn,
            'bodyEn' => $this->bodyEn,
            'photo_id' => $this->photo_id
        ];
    }
    public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://traversymedia.com')
        ];
    }
}