<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->role = 'admin';
        $role_admin->description = 'An administrator User';
        $role_admin->save();

        $role_member = new Role();
        $role_member->role = 'member';
        $role_member->description = 'A member User';
        $role_member->save();

        $role_guest = new Role();
        $role_guest->role = 'guest';
        $role_guest->description = 'A Guest User';
        $role_guest->save();
    }
}
