<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('material_suppliers')->insert([
            ['material_supplier_type' => 'plastika', 'material_supplier_amount' => '10000', 'material_supplier_price' =>'3000000'],
            ['material_supplier_type' => 'bakar', 'material_supplier_amount' => '2000', 'material_supplier_price' =>'2000000'],
            ['material_supplier_type' => 'čelik', 'material_supplier_amount' => '35000', 'material_supplier_price' => '1000000']
        ]);
    }
}
