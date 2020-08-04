<?php

use App\Meal as AppMeal;
use Illuminate\Database\Seeder;

class Meal extends Seeder
{
    
    public function run()
    {
        $data = [
            'Nasi Ayam',
            'Nasi Kander',
            'Nasi USA',
            'Nasi Goren',
            
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('meals')->truncate();

        foreach($data as $d)
        {
            AppMeal::create(['name' => $d]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
