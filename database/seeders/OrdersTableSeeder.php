<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for( $i=1;$i<=5;$i++){
            DB::table('orders')->insert([
                'id' => $i,
                'user_id' => rand(1,3),
                'product_id' =>rand(1,3),
            ]);
        }
    }
}
