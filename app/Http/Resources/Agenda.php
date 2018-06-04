<?php

namespace App\Http\Resources;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use Illuminate\Http\Resources\Json\JsonResource;

class Agenda extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    { // return parent::toArray($request);
       
        return [
        'id' => $this->id,
        'user_id' => $this->user_id,
        'events_id' => $this->events_id,
        ];
    }
    public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://traversymedia.com')
        ];
    }
}