<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
   
    protected $fillable = [
        'organiser'
   ];
   public function news()
   {
       $this->belongsTo(News::class);
   }

   public function Events()
   {
       $this->belongsTo(Events::class);
   }
}
