<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolumesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('volumes')->truncate();

        DB::table('volumes')->insert([
            ['meaning' => 375, 'cost' => 220, 'dish_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 500, 'cost' => 260, 'dish_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 650, 'cost' => 300, 'dish_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            ['meaning' => 375, 'cost' => 320, 'dish_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 500, 'cost' => 360, 'dish_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            ['meaning' => 375, 'cost' => 260, 'dish_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 500, 'cost' => 300, 'dish_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 650, 'cost' => 340, 'dish_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            ['meaning' => 375, 'cost' => 260, 'dish_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 500, 'cost' => 300, 'dish_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 650, 'cost' => 340, 'dish_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['meaning' => 375, 'cost' => 220, 'dish_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 500, 'cost' => 260, 'dish_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 650, 'cost' => 300, 'dish_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            ['meaning' => 375, 'cost' => 260, 'dish_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 500, 'cost' => 300, 'dish_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 650, 'cost' => 340, 'dish_id' => 6, 'created_at' => now(), 'updated_at' => now()],

            ['meaning' => 375, 'cost' => 260, 'dish_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 500, 'cost' => 300, 'dish_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 650, 'cost' => 340, 'dish_id' => 7, 'created_at' => now(), 'updated_at' => now()],

            ['meaning' => 375, 'cost' => 320, 'dish_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 500, 'cost' => 360, 'dish_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['meaning' => 650, 'cost' => 400, 'dish_id' => 8, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
