<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_code' => '1000',
            'title' => 'Chicken',
        ]);

        DB::table('categories')->insert([
            'category_code' => '2000',
            'title' => 'Rice',
        ]);

        DB::table('categories')->insert([
            'category_code' => '3000',
            'title' => 'Noodle',
        ]);

        DB::table('categories')->insert([
            'category_code' => '4000',
            'title' => 'Side dish',
        ]);

        DB::table('categories')->insert([
            'category_code' => '5000',
            'title' => 'Dessert',
        ]);

        DB::table('categories')->insert([
            'category_code' => '6000',
            'title' => 'Beverage',
        ]);
    }
}