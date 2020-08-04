<?php

use App\Role;
use App\User as AppUser;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('role_user')->truncate();
        DB::table('users')->truncate();

        $supervisor = AppUser::create([
            'name' => 'Supervisor',
            'email' => 'supervisor@sam.com',
            'password' => bcrypt('Supervisor123'),
        ]);

        $admin = AppUser::create([
            'name' => 'Admin',
            'email' => 'admin@sam.com',
            'password' => bcrypt('password'),
        ]);

        $user = AppUser::create([
            'name' => 'User',
            'email' => 'user@sam.com',
            'password' => bcrypt('password'),
        ]);

        $supervisor->roles()->attach(Role::whereName('Supervisor')->first());
        $admin->roles()->attach(Role::whereName('Admin')->first());
        $user->roles()->attach(Role::whereName('User')->first());

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
