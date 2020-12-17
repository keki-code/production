<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialConsumptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('material_consumptions')->insert([
            ['material_consumption_type' => 'plastika', 'material_consumption_amount' => '10000'],
            ['material_consumption_type' => 'bakar', 'material_consumption_amount' => '2000'],
            ['material_consumption_type' => 'čelik', 'material_consumption_amount' => '35000']
        ]);
    }
}
