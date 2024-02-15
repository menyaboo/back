<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supplements')->truncate();

        DB::table('supplements')->insert([
            ['name' => 'Тапиока', 'cost' => 40, 'category_supplement_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Кокосовые кусочки', 'cost' => 50, 'category_supplement_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Джусболлы', 'cost' => 60, 'category_supplement_id' => 1,'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Крем', 'cost' => 60, 'category_supplement_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Орео', 'cost' => 60, 'category_supplement_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Фруктоза', 'cost' => 60, 'category_supplement_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'кокосовое', 'cost' => 60, 'category_supplement_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'миндальное', 'cost' => 80, 'category_supplement_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'банановое', 'cost' => 80, 'category_supplement_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'шоколадное', 'cost' => 100, 'category_supplement_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ваниль', 'cost' => 10, 'category_supplement_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'фисташка', 'cost' => 10, 'category_supplement_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'груша', 'cost' => 10, 'category_supplement_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'черника', 'cost' => 10, 'category_supplement_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'солёная карамель', 'cost' => 10, 'category_supplement_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'лесной орех', 'cost' => 10, 'category_supplement_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
