<?php

use Illuminate\Database\Seeder;
use App\Events;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events_one = new Events();
        $events_one->date = '2018-04-21';
        $events_one->time = '12:18:51';
        $events_one->organisor = 'lol';

        $events_one->titleNl = 'Title of first new item';
        $events_one->bodyNl = 'Body of first events item';

        $events_one->titleFr = 'Title of first new item';
        $events_one->bodyFr = 'Body of first events item';

        $events_one->titleEn = 'Title of first new item';
        $events_one->bodyEn = 'Body of first events item';
        $events_one->save();
        
        $events_two = new Events();
        $events_two->date = '2018-04-21';
        $events_two->time = '12:18:51';
        $events_two->organisor = 'lol';

        $events_two->titleNl = 'Title of second new item';
        $events_two->bodyNl = 'Body of second events item';
        
        $events_two->titleFr = 'Title of second new item';
        $events_two->bodyFr = 'Body of second events item';
        
        $events_two->titleEn = 'Title of second new item';
        $events_two->bodyEn = 'Body of second events item';
        $events_two->save();
    }
}
