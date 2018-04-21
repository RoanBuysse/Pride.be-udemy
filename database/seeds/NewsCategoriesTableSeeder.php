<?php

use Illuminate\Database\Seeder;
use App\NewsCategory;

class NewsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsCategory_one = new NewsCategory();
        $newsCategory_one->slug_nl = 'Plezier';
        $newsCategory_one->nameNl = 'Plezier';

        $newsCategory_one->slug_fr = 'Amusement';
        $newsCategory_one->nameFr = 'Amusement';

        $newsCategory_one->slug_en = 'Fun';
        $newsCategory_one->nameEn = 'Fun';
        $newsCategory_one->save();

        $newsCategory_two = new NewsCategory();
        $newsCategory_two->slug_nl = 'Hallo';
        $newsCategory_two->nameNl = 'Hallo';

        $newsCategory_two->slug_fr = 'Bonjour';
        $newsCategory_two->nameFr = 'Bonjour';

        $newsCategory_two->slug_en = 'Hello';
        $newsCategory_two->nameEn = 'Hello';
        $newsCategory_two->save();
    }
}
