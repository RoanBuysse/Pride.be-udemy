<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_one = new User();
        $users_one->role_id = '1';
        $users_one->name = '12:18:51';
        $users_one->city = 'Gent';
        $users_one->country = 'Belgium';
        $users_one->language = 'Nl';
        $users_one->email = 'roan.buysse@gmail.com';
        $users_one->password = bcrypt('J6kiqh72');
        $users_one->save();
    }
}
