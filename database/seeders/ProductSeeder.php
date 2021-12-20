<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Nike Air Max 95',
                'details' => 'The classic is back..',
                'description' => 'Mens Shoes',
                'sizes' => 5,
                'brand' => 'nike',
                'price' => 15495,
                'shipping' => 2499,
                'vat' => 20,
                'image_path' => 'storage/nike.png'
            ],

            [
                'name' => 'Nike Air Max 2021',
                'details' => 'Our innovative Air system delivers the best sensation youve ever felt.',
                'description' => 'Womens shoes',
                'sizes' => 5,
                'brand' => 'nike',
                'price' => 14495,
                'shipping' => 2000,
                'vat' => 20,
                'image_path' => 'storage/nike2.png'
            ],            
        ];

        foreach($products as $key => $value){
            Product::create($value);
        };        
    }
}