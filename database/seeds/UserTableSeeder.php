<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'Admin name';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('123123Aa');
        $admin->role_id = 1;
        $admin->save();

        $member = new User();
        $member->name = 'Member name';
        $member->email = 'member@example.com';
        $member->password = bcrypt('123123Aa');
        $member->role_id = 2;
        $member->save();

        $guest = new User();
        $guest->name = 'Guest name';
        $guest->email = 'guest@example.com';
        $guest->password = bcrypt('123123Aa');
        $guest->role_id = 3;
        $guest->save();
    }
}
