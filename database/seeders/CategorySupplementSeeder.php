<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySupplementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_supplements')->truncate();

        DB::table('category_supplements')->insert([
            ['name' => 'Добавка', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Молоко', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Сиропы', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
