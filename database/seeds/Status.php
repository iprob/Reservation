<?php

use App\Status as AppStatus;
use Illuminate\Database\Seeder;

class Status extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Open',
            'Reserve',
            'Complete',
            'Cancel',
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('statuses')->truncate();

        foreach($data as $d)
        {
            AppStatus::create(['name' => $d]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
