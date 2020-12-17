<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('communities')->insert([
            ['community_name' => 'Zagreb', 'county_id' => 1],
            ['community_name' => 'Rijeka', 'county_id' => 1],
            ['community_name' => 'Split', 'county_id' => 1]
     
        ]);
    }
}
