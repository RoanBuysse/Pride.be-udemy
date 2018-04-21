<?php

use Illuminate\Database\Seeder;
use App\EventsCategory;
class EventsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
            $eventsCategory_one = new EventsCategory();
            $eventsCategory_one->slug_nl = 'EPlezier';
            $eventsCategory_one->nameNl = 'EPlezier';
    
            $eventsCategory_one->slug_fr = 'EAmusement';
            $eventsCategory_one->nameFr = 'EAmusement';
    
            $eventsCategory_one->slug_en = 'EFun';
            $eventsCategory_one->nameEn = 'EFun';
            $eventsCategory_one->save();
    
            $eventsCategory_two = new EventsCategory();
            $eventsCategory_two->slug_nl = 'EHallo';
            $eventsCategory_two->nameNl = 'EHallo';
    
            $eventsCategory_two->slug_fr = 'EBonjour';
            $eventsCategory_two->nameFr = 'EBonjour';
    
            $eventsCategory_two->slug_en = 'EHello';
            $eventsCategory_two->nameEn = 'EHello';
            $eventsCategory_two->save();
    }
}
