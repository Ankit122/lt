<?php

use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
    
        DB::table('hotels')->insert([
            'name' =>str_random(4),
            
        ]);
        }
    }
}
