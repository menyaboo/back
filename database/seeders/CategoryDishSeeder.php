<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryDishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_dishes')->truncate();

        DB::table('category_dishes')->insert([
            ['name' => 'Season’s special', 'image' => 'winter.svg'],
            ['name' => 'Plus', 'image' => 'milk.svg'],
            ['name' => 'Fruit', 'image' => 'strawberry.svg'],
            ['name' => 'Bubble', 'image' => 'bubble.svg'],
            ['name' => 'Coffee', 'image' => 'coffee.svg'],
            ['name' => 'Десерты', 'image' => 'dessert.svg'],
            ['name' => 'Завтраки', 'image' => 'dessert.svg'],
        ]);
    }
}
