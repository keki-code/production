<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            ['location_name' => 'Požega', 'community_id' => 1],
            ['location_name' => 'Osijek', 'community_id' => 1],
            ['location_name' => 'Slavonski Brod', 'community_id' => 1]
     
        ]);
    }
}
