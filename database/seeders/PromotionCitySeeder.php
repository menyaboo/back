<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city_promotion')->truncate();

        DB::table('city_promotion')->insert([
            [
                'promotion_id' => 1,
                'city_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'promotion_id' => 1,
                'city_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'promotion_id' => 2,
                'city_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
