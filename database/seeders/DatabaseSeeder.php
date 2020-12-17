<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountiesSeeder::class,
            CommunitySeeder::class,
            locationSeeder::class,
            MaterialSupplierSeeder::class,
            MaterialConsumptionSeeder::class,
            SuppliersSeeder::class,
            UserSeeder::class
        ]);
    }
}
