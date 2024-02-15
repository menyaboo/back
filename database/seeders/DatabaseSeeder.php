<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'admin',
            'login' => 'admin',
            'password' => Hash::make('12345678'),
        ]);

        $this->call([
            CategoryDishSeeder::class,
            CategorySupplementSeeder::class,
            SupplementSeeder::class,
            DishSeeder::class,
            DishSupplementSeeder::class,
            VolumesSeeder::class,
            CitySeeder::class,
            PromotionSeeder::class,
            PromotionCitySeeder::class,
        ]);
    }
}
