<?php

use App\Role as AppRole;
use Illuminate\Database\Seeder;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Supervisor',
            'Admin',
            'user'
            
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();

        foreach($data as $d)
        {
            AppRole::create(['name' => $d]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
