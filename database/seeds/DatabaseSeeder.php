<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(Status::class);
        $this->call(Meal::class);
        $this->call(Role::class);
        $this->call(User::class);
        $this->call(Reservation::class);
        
    }
}
