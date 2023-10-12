<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this import

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('warehouses')->insert([
            'name' => 'Warehouse 1',
            // Add other columns and data as needed
        ]);
    }
}
