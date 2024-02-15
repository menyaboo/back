<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->truncate();

        DB::table('dishes')->insert([
            [
                'name' => 'Strawberry Cloud',
                'image' => 'bd742628652cbf3555d04f978e55702a.png',
                'unit' => 'мл',
                'composition' => 'Жасмин, клубника, крем',
                'category_dish_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Purple Magic',
                'image' => '6d4947ac6150110970436fe1284a2839.png',
                'unit' => 'мл',
                'composition' => 'Таро, молоко, клубника, банан',
                'category_dish_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Peanut Banana',
                'image' => '64f9ccddabf874e775a8beacf4d6ae3e.png',
                'unit' => 'мл',
                'composition' => 'Пуэр, банановое молоко, банан, арахисовая паста, орео',
                'category_dish_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Milky Pear',
                'image' => '83ad4de2164d56f336f1786a72d28be6.png',
                'unit' => 'мл',
                'composition' => 'Жасмин, молоко, груша, крем',
                'category_dish_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Boba Power',
                'image' => 'e4d2a9a6ef5cd62d7e80027ab5e45d4f.png',
                'unit' => 'мл',
                'composition' => 'Пуэр, тапиока, карамель',
                'category_dish_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Green Round',
                'image' => 'e1067bed360f1228bf41cc50471c58a8.png',
                'unit' => 'мл',
                'composition' => 'Жасмин, тапиока, молоко, крем',
                'category_dish_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Velvet Kade',
                'image' => 'bfcde10d188562cae52ed8005ab87f07.png',
                'unit' => 'мл',
                'composition' => 'Каркаде, тапиока, вишня',
                'category_dish_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MOLOKO+',
                'image' => 'e1067bed360f1228bf41cc50471c58a8.png',
                'unit' => 'мл',
                'composition' => 'Молоко, карамель, крем, тапиока',
                'category_dish_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
