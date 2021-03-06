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
        $role_admin->name = 'admin';
        $role_admin->description = 'An administator user';
        $role_admin->save();

        $role_user = new User();
        $role_user->name = 'user_role';
        $role_user->description = 'An ordinary user';
        $role_user->save();
    }
}
