<?php
 namespace App;

 use Illuminate\Support\Facades\App;
 use Illuminate\Database\Eloquent\Model;
 use App\Support\Translateable;

 class Post extends Model
 {
     use Translateable;

     protected $fillable = ['published'];
     
     public function translation($language = null)
     {
         if ($language == null) {
             $language = App::getLocale();
         }
         return $this->hasMany('App\PostTranslation')->where('language', '=', $language);
     }
 }