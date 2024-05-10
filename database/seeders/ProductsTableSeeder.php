<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product 1',
            'detail' => 'Detail 1',
            'price' => '12000',
            'image' => '',
        ]);
        Product::create([
            'name' => 'Product 2',
            'detail' => 'Detail 2',
            'price' => '10000',
            'image' => '',
        ]);
        Product::create([
            'name' => 'Product 3',
            'detail' => 'Detail 3',
            'price' => '13000',
            'image' => '',
        ]);
        Product::create([
            'name' => 'Product 4',
            'detail' => 'Detail 4',
            'price' => '18000',
            'image' => '',
        ]);
        Product::create([
            'name' => 'Product 5',
            'detail' => 'Detail 5',
            'price' => '15000',
            'image' => '',
        ]);
    }
}