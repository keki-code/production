<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties')->insert([
            ['county_name' => 'pozesko-slavonska'],
            ['county_name' => 'osjecko-baranjska'],
            ['county_name' => 'brodsko-posavska']
     
        ]);
    }
}
