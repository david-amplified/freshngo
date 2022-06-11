<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Baked Spagetti',
                "price"=>"23.00",
                "description"=>"Baked Spagetti",
                "category"=>"Pasta",
                "servingsize"=>"6",
                "gallery"=>"https://fng-offerings.s3.amazonaws.com/baked-spaghetti.jpg"
            ],
            [
                'name'=>'Veggie Fried Rice',
                "price"=>"24.00",
                "description"=>"Vegetarian meets Asian Happiness",
                "category"=>"Vegetarian",
                "servingsize"=>"4",
                "gallery"=>"https://fng-offerings.s3.amazonaws.com/fried-rice.jpg"
            ],
            [
                'name'=>'Homestyle Meatloaf',
                "price"=>"25.00",
                "description"=>"Just like you had on a cold winter's night",
                "category"=>"Beef",
                "servingsize"=>"6",
                "gallery"=>"https://fng-offerings.s3.amazonaws.com/meatloaf.jpg"
            ],
            [
                'name'=>'Garlic Honey Pork Chops',
                "price"=>"20.00",
                "description"=>"A fridge with much more feature",
                "category"=>"Pork",
                "servingsize"=>"5",
                "gallery"=>"https://fng-offerings.s3.amazonaws.com/pork-chops.jpg"
             ],
             [
                 'name'=>'Herb Butter Roasted Chicken',
                 "price"=>"26.00",
                 "description"=>"Nothing more to say",
                 "category"=>"Poultry",
                 "servingsize"=>"4",
                 "gallery"=>"https://fng-offerings.s3.amazonaws.com/roasted-chicken.jpg"
              ]
        ]);
    }
}
