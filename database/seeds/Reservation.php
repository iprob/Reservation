<?php

use App\Reservation as AppReservation;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Reservation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = 
        [
            [
                'name' => 'Meet',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => Carbon::now()->format('h:i:s'),
                'user_id' => 3,
                'status_id' => 2,
                'note' => 'Meeting with Boss',
                'phone' => '+60123456789',

            ],

            [
                'name' => 'Date',
                'date' => Carbon::now()->format('Y-m-d'),
                'time' => Carbon::now()->format('h:i:s'),
                'user_id' => 3,
                'status_id' => 1,
                'note' => 'Date with girlfriend',
                'phone' => '+60123456789',

            ],
            
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('reservations')->truncate();

        foreach($data as $d)
        {
            AppReservation::create($d);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
