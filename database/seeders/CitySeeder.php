<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->truncate();

        DB::table('cities')->insert([
            [ 'name' => 'Томск', 'created_at' => now(), 'updated_at' => now()],
            [ 'name' => 'Сочи', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
