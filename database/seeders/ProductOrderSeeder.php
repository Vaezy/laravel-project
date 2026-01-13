<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductOrder;
use App\Models\Order;
use App\Models\User;

class ProductOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductOrder::create([
            'name'  => 'Pack Photoshop',
            'price' => 59.99,
        ]);
    }
}
