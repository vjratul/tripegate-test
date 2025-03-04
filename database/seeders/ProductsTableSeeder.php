<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        
        for( $i=1;$i<=3;$i++){
            DB::table('products')->insert([
                'id' => $i,
                'price' => $faker->randomDigit,
              
            ]);
        }
       
    }
}
