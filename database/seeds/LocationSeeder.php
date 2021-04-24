<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        DB::table('locations')->insert([
            'code_id' => 'klcc',
            'restaurant_name' => 'Suria KLCC, Kuala Lumpur',
        ]);

        DB::table('locations')->insert([
            'code_id' => 'ioi_putrajaya',
            'restaurant_name' => 'IOI City Mall, Putrajaya',
        ]);

        DB::table('locations')->insert([
            'code_id' => 'ioi_puchong',
            'restaurant_name' => 'IOI City Mall, Puchong',
        ]);

        DB::table('locations')->insert([
            'code_id' => 'wangsa_walk',
            'restaurant_name' => 'Wangsa Walk Mall, Wangsa Maju',
        ]);

        DB::table('locations')->insert([
            'code_id' => 'kb_mall',
            'restaurant_name' => 'KB Mall, Kota Bharu',
        ]);

        DB::table('locations')->insert([
            'code_id' => 'mesra_mall',
            'restaurant_name' => 'Mesra Mall, Kemaman',
        ]);

        DB::table('locations')->insert([
            'code_id' => 'sunway_pyramid',
            'restaurant_name' => 'Sunway Pyramid, Kuala Lumpur',
        ]);
    }
}
