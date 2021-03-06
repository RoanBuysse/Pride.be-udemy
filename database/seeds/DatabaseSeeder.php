<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EventsCategoriesTableSeeder::class);
        $this->call(NewsCategoriesTableSeeder::class);

    }
}
