<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->save();
        
        $role_writer = new Role();
        $role_writer->name = 'Writer';
        $role_writer->save();

        $role_subscriber = new Role();
        $role_subscriber->name = 'Subscriber';
        $role_subscriber->save();
    }
}
