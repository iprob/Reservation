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

        $supervisor->roles()->attach(Role::whereName('Supervisor')->first());

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
