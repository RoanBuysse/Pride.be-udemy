<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Resources\EventsCategory as EventsCategoryResource;
use App\Http\Resources\Organisations as OrganisationsResource;



class Events extends JsonResource
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
        'category'=> collect($this->category->first()),
        'organisation'=> collect($this->organisation->first()),
        'location' => $this->location,
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
        'photo'=> $this->photo,
        'category'=> collect($this->category->first()),
        'organisation'=> collect($this->organisation->first()),
        'location' => $this->location,
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
        'photo'=> $this->photo,
        'category'=> collect($this->category->first()),
        'organisation'=> collect($this->organisation->first()),
        'location' => $this->location,
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