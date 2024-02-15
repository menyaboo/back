<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->truncate();

        DB::table('promotions')->insert([
            [
                'name' => 'Скидка студентам',
                'description' => 'Дарим 10% скидки при предъявлении студенческого, зачетки или личного кабинета на сайте ВУЗа',
                'background' => 'green_frame.svg',
                'image' => 'picture.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Скидка студентам',
                'description' => 'Дарим 10% скидки при предъявлении студенческого, зачетки или личного кабинета на сайте ВУЗа',
                'background' => 'pink_frame.svg',
                'image' => 'picture.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Скидка студентам',
                'description' => 'Дарим 10% скидки при предъявлении студенческого, зачетки или личного кабинета на сайте ВУЗа',
                'background' => 'green_frame.svg',
                'image' => 'picture.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
