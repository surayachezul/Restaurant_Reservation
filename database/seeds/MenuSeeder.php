<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Chicken categories

        DB::table('menus')->insert([
            'category_code' => '1001',
            'menu_image' => '/images_folder/ayam1.png',
            'menu_title' => 'KRAZY SPICY CHEESE FRIED CHICKEN BUMBUK',
            'menu_price' => 51,
        ]);

        DB::table('menus')->insert([
            'category_code' => '1002',
            'menu_image' => '/images_folder/ayam2.png',
            'menu_title' => 'ORIGINAL FRIED CHICKEN BUMBUK',
            'menu_price' => 51,
        ]);

        DB::table('menus')->insert([
            'category_code' => '1003',
            'menu_image' => '/images_folder/ayam3.png',
            'menu_title' => 'HONEY MUSTARD CHEESY BUMBUK',
            'menu_price' => 52,
        ]);

        DB::table('menus')->insert([
            'category_code' => '1004',
            'menu_image' => '/images_folder/ganjang_wingetes_drummetes.png',
            'menu_title' => 'GANJANG WING & DRUMMETES',
            'menu_price' => 10,
        ]);

        DB::table('menus')->insert([
            'category_code' => '1005',
            'menu_image' => '/images_folder/hangul_chicken.png',
            'menu_title' => 'HANGUL CHICKEN',
            'menu_price' => 10,
        ]);

        DB::table('menus')->insert([
            'category_code' => '1006',
            'menu_image' => '/images_folder/hangul_wingetes_drummetes.png',
            'menu_title' => 'HANGUL WINGETES & DURMMETE',
            'menu_price' => 10,
        ]);

        DB::table('menus')->insert([
            'category_code' => '1007',
            'menu_image' => '/images_folder/soygarlic_chicken.png',
            'menu_title' => 'SOYGARLIC CHICKEN',
            'menu_price' => 10,
        ]);

        DB::table('menus')->insert([
            'category_code' => '1008',
            'menu_image' => '/images_folder/yangyeom_chicken.png',
            'menu_title' => 'YANGYEOM CHICKEN',
            'menu_price' => 10,
        ]);

        // Rice categories

        DB::table('menus')->insert([
            'category_code' => '2001',
            'menu_image' => '/images_folder/bulgogi_beef_deopbap.png',
            'menu_title' => 'BULGOGI BEEF DEOPBAP',
            'menu_price' => 17,
        ]);

        DB::table('menus')->insert([
            'category_code' => '2002',
            'menu_image' => '/images_folder/bulgogi_chicken_deopbap.png',
            'menu_title' => 'BULGOGI CHICKEN DEOPBAP',
            'menu_price' => 16,
        ]);

        DB::table('menus')->insert([
            'category_code' => '2003',
            'menu_image' => '/images_folder/dakgalbi_chicken_deopbap.png',
            'menu_title' => 'DAKGALBI CHICKEN DEOPBAP',
            'menu_price' => 17,
        ]);

        DB::table('menus')->insert([
            'category_code' => '2004',
            'menu_image' => '/images_folder/doenjang_jiggae.png',
            'menu_title' => 'DOENJANG JIGGAE',
            'menu_price' => 17,
        ]);

        DB::table('menus')->insert([
            'category_code' => '2005',
            'menu_image' => '/images_folder/dolsot_bibimbap.png',
            'menu_title' => 'DOLSOT BIBIMBAP',
            'menu_price' => 17,
        ]);

        DB::table('menus')->insert([
            'category_code' => '2006',
            'menu_image' => '/images_folder/hangul_chicken_deopbap.png',
            'menu_title' => 'HANGUL CHICKEN DEOPBAP',
            'menu_price' => 16,
        ]);

        DB::table('menus')->insert([
            'category_code' => '2007',
            'menu_image' => '/images_folder/kimchi_bokkeumbap.png',
            'menu_title' => 'KIMCHI BOKKEUMBAP',
            'menu_price' => 16,
        ]);

        DB::table('menus')->insert([
            'category_code' => '2008',
            'menu_image' => '/images_folder/kimchi_jiggae.png',
            'menu_title' => 'KIMCHI JIGGAE',
            'menu_price' => 15,
        ]);

        DB::table('menus')->insert([
            'category_code' => '2009',
            'menu_image' => '/images_folder/soondubu_jiggae.png',
            'menu_title' => 'SOONDUBU JIGGAE',
            'menu_price' => 16,
        ]);

        // Noodles categories

        DB::table('menus')->insert([
            'category_code' => '3001',
            'menu_image' => '/images_folder/cheese_ramyun.png',
            'menu_title' => 'CHEESE RAMYUN',
            'menu_price' => 17,
        ]);

        DB::table('menus')->insert([
            'category_code' => '3002',
            'menu_image' => '/images_folder/hangul_chicken_ramyeon.png',
            'menu_title' => 'HANGUL CHICKEN RAMYEON',
            'menu_price' => 18,
        ]);

        DB::table('menus')->insert([
            'category_code' => '3003',
            'menu_image' => '/images_folder/jajjangmyun.png',
            'menu_title' => 'JAJJANGMYUN',
            'menu_price' => 16,
        ]);

        DB::table('menus')->insert([
            'category_code' => '3004',
            'menu_image' => '/images_folder/kimchi_ramyeon.png',
            'menu_title' => 'KIMCHI RAMYEON',
            'menu_price' => 16,
        ]);

        DB::table('menus')->insert([
            'category_code' => '3005',
            'menu_image' => '/images_folder/rabokki.png',
            'menu_title' => 'RABOKKI',
            'menu_price' => 15,
        ]);

        // Side dishes categories

        DB::table('menus')->insert([
            'category_code' => '4001',
            'menu_image' => '/images_folder/cheesy_bulgogi_fries.png',
            'menu_title' => 'CHEESY BULGOGI FRIES',
            'menu_price' => 12,
        ]);

        DB::table('menus')->insert([
            'category_code' => '4002',
            'menu_image' => '/images_folder/fried_squid.png',
            'menu_title' => 'FRIED SQUID',
            'menu_price' => 14,
        ]);

        DB::table('menus')->insert([
            'category_code' => '4003',
            'menu_image' => '/images_folder/kimchi_cheese.png',
            'menu_title' => 'KIMCHI CHEESE',
            'menu_price' => 16,
        ]);

        DB::table('menus')->insert([
            'category_code' => '4004',
            'menu_image' => '/images_folder/kimchi_topokki.png',
            'menu_title' => 'KIMCHI TOPOKKI',
            'menu_price' => 8,
        ]);

        DB::table('menus')->insert([
            'category_code' => '4005',
            'menu_image' => '/images_folder/soygarlic_cheese.png',
            'menu_title' => 'SOYGARLIC CHEESE',
            'menu_price' => 10,
        ]);

        DB::table('menus')->insert([
            'category_code' => '4006',
            'menu_image' => '/images_folder/soygarlic_topokki.png',
            'menu_title' => 'SOYGARLIC TOPOKKI',
            'menu_price' => 11,
        ]);

        DB::table('menus')->insert([
            'category_code' => '4007',
            'menu_image' => '/images_folder/tokkochi.png',
            'menu_title' => 'TOKOCHI',
            'menu_price' => 11,
        ]);

        DB::table('menus')->insert([
            'category_code' => '4008',
            'menu_image' => '/images_folder/topokki_cheese.png',
            'menu_title' => 'TOPOKKI CHEESE',
            'menu_price' => 12,
        ]);

        // Desserts categories

        DB::table('menus')->insert([
            'category_code' => '5001',
            'menu_image' => '/images_folder/bingsu1.png',
            'menu_title' => 'MANGO BINGSOO',
            'menu_price' => 24,
        ]);

        DB::table('menus')->insert([
            'category_code' => '5002',
            'menu_image' => '/images_folder/bingsu2.png',
            'menu_title' => 'WATERMELON BINGSOO',
            'menu_price' => 24,
        ]);

        DB::table('menus')->insert([
            'category_code' => '5003',
            'menu_image' => '/images_folder/bingsu3.png',
            'menu_title' => 'HONEYDEW BINGSOO',
            'menu_price' => 25,
        ]);

        // Beverages categories

        DB::table('menus')->insert([
            'category_code' => '6001',
            'menu_image' => '/images_folder/honeyjujube.png',
            'menu_title' => 'HONEY JUUBE',
            'menu_price' => 7,
        ]);

        DB::table('menus')->insert([
            'category_code' => '6002',
            'menu_image' => '/images_folder/honeyvera.png',
            'menu_title' => 'HONEY VERA',
            'menu_price' => 7,
        ]);

        DB::table('menus')->insert([
            'category_code' => '6003',
            'menu_image' => '/images_folder/honeylemon.png',
            'menu_title' => 'HONEY LEMON',
            'menu_price' => 7,
        ]);

        DB::table('menus')->insert([
            'category_code' => '6004',
            'menu_image' => '/images_folder/chocolate-iced.png',
            'menu_title' => 'CHOCOLATE ICE',
            'menu_price' => 8,
        ]);

        DB::table('menus')->insert([
            'category_code' => '6005',
            'menu_image' => '/images_folder/latte-iced.png',
            'menu_title' => 'LATTE ICE',
            'menu_price' => 8,
        ]);

        DB::table('menus')->insert([
            'category_code' => '6006',
            'menu_image' => '/images_folder/milkeuti.png',
            'menu_title' => 'MILK TEA',
            'menu_price' => 8,
        ]);

        
        DB::table('menus')->insert([
            'category_code' => '6007',
            'menu_image' => '/images_folder/americano-iced.png',
            'menu_title' => 'AMERICANO ICED',
            'menu_price' => 7,
        ]);

        DB::table('menus')->insert([
            'category_code' => '6008',
            'menu_image' => '/images_folder/drinkingwater.png',
            'menu_title' => 'DRINKING WATER',
            'menu_price' => 3,
        ]);

        DB::table('menus')->insert([
            'category_code' => '6009',
            'menu_image' => '/images_folder/topokki_cheese.png',
            'menu_title' => 'TOPOKKI CHEESE',
            'menu_price' => 12,
        ]);
    }
}
