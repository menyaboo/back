<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishSupplementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dish_supplement')->truncate();

        DB::table('dish_supplement')->insert([
            ['supplement_id' => 1, 'dish_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 1, 'dish_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 1, 'dish_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 1, 'dish_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['supplement_id' => 2, 'dish_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 2, 'dish_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 2, 'dish_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 2, 'dish_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['supplement_id' => 3, 'dish_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 3, 'dish_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 3, 'dish_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 3, 'dish_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['supplement_id' => 1, 'dish_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 1, 'dish_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 1, 'dish_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 1, 'dish_id' => 8, 'created_at' => now(), 'updated_at' => now()],

            ['supplement_id' => 2, 'dish_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 2, 'dish_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 2, 'dish_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 2, 'dish_id' => 8, 'created_at' => now(), 'updated_at' => now()],

            ['supplement_id' => 3, 'dish_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 3, 'dish_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 3, 'dish_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['supplement_id' => 3, 'dish_id' => 8, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
