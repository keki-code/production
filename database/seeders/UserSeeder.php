<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
                'unit_oib' => Str::random(5) . ' ' . Str::random(5),
                'unit_name' => 'unit_name',
                'location_id' => 1,
                'material_supplier_id' => 1,
                'material_consumption_id' => 1,
                'supplier_id' => 1       
            ]
        ]); 
    }
}
