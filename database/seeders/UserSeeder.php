<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'id' => 1,
            'name' => 'Vardan',
            'email' => 'vav@vav.com',
            'password' => '$2y$10$wQFYMIR0.nl.9yoFnjnmJOC2Leqkpn9/zAtNKfRoJ3CN/Kt18.aPK',      
            'role_id' => '2',
            'email_verified_at' => date("Y-m-d H:i:s"),    
            ],
        
            [
                'id' => 2,
                'name' => 'Armen',
                'email' => 'vvav@vav.com',
                'password' => '$2y$10$wQFYMIR0.nl.9yoFnjnmJOC2Leqkpn9/zAtNKfRoJ3CN/Kt18.aPK',
                'role_id' => '2',     
                'email_verified_at' => date("Y-m-d H:i:s"),    
            ],

            [
                'id' => 3,
                'name' => 'Avag',
                'email' => 'vvavv@vav.com',
                'password' => '$2y$10$wQFYMIR0.nl.9yoFnjnmJOC2Leqkpn9/zAtNKfRoJ3CN/Kt18.aPK',
                'role_id' => '2',    
                'email_verified_at' => date("Y-m-d H:i:s"),      
            ],

            [
                'id' => 4,
                'name' => 'Karen',
                'email' => 'kar@vav.com',
                'password' => '$2y$10$wQFYMIR0.nl.9yoFnjnmJOC2Leqkpn9/zAtNKfRoJ3CN/Kt18.aPK',
                'role_id' => '2',     
                'email_verified_at' => date("Y-m-d H:i:s"),    
            ],

            [
                'id' => 5,
                'name' => 'Lavrent',
                'email' => 'lav@vav.com',
                'password' => '$2y$10$wQFYMIR0.nl.9yoFnjnmJOC2Leqkpn9/zAtNKfRoJ3CN/Kt18.aPK',
                'role_id' => '2',      
                'email_verified_at' => date("Y-m-d H:i:s"),    
            ],
    
            [
                'id' => 6,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$wQFYMIR0.nl.9yoFnjnmJOC2Leqkpn9/zAtNKfRoJ3CN/Kt18.aPK',
                'role_id' => '1',    
                'email_verified_at' => date("Y-m-d H:i:s"),     
            ]]);
    }
}
