<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'ISAAC',
                'middle_name' => '',
                'last_name' => 'ARCILLA',
                'suffix_name' => NULL,
                'email' => 'isaacdarcilla@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dbRCf3eOeY22LgUtrMPtP.gpAiJ73pr3KPIrVyY5KlYcSsYx/2Pme',
                'remember_token' => NULL,
                'created_at' => '2021-09-11 23:04:30',
                'updated_at' => '2021-09-11 23:04:30',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}