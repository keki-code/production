<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            ['supplier_name' => 'Spinvalis', 'supplier_transportation_form' => 'kamion', 'supplier_produce_coast' => '55555', 'supplier_material_type' => 'celik'],
            ['supplier_name' => 'Magma', 'supplier_transportation_form' => 'brod', 'supplier_produce_coast' => '44444', 'supplier_material_type' => 'plastika'],
            ['supplier_name' => 'Plamen', 'supplier_transportation_form' => 'vlak', 'supplier_produce_coast' => '11111', 'supplier_material_type' => 'cement']
        ]);
    }
}
