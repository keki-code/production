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
            ['unit_oib' => '11111111111', 'unit_name' => 'Krešo', 'location_id' => 1, 'material_supplier_id' => 1, 'material_consumption_id' => 1, 'supplier_id' => 1],
            ['unit_oib' => '22222222222', 'unit_name' => 'Andrej', 'location_id' => 2, 'material_supplier_id' => 2, 'material_consumption_id' => 2, 'supplier_id' => 2],
            ['unit_oib' => '33333333333', 'unit_name' => 'Henrik', 'location_id' => 3, 'material_supplier_id' => 3, 'material_consumption_id' => 3, 'supplier_id' => 3],
            ['unit_oib' => Str::random(5) . ' ' . Str::random(5), 'unit_name' => 'unit_name', 'location_id' => 1, 'material_supplier_id' => 1, 'material_consumption_id' => 1, 'supplier_id' => 1]
        ]); 
    }
}
