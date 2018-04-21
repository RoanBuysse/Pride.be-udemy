<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news_one = new News();
        $news_one->titleNl = 'Title of first new item';
        $news_one->bodyNl = 'Body of first news item';

        $news_one->titleFr = 'Title of first new item';
        $news_one->bodyFr = 'Body of first news item';

        $news_one->titleEn = 'Title of first new item';
        $news_one->bodyEn = 'Body of first news item';
        $news_one->save();
        
        $news_two = new News();
        $news_two->titleNl = 'Title of second new item';
        $news_two->bodyNl = 'Body of second news item';
        
        $news_two->titleFr = 'Title of second new item';
        $news_two->bodyFr = 'Body of second news item';
        
        $news_two->titleEn = 'Title of second new item';
        $news_two->bodyEn = 'Body of second news item';
        $news_two->save();
    }
}
