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
        $user = User::where('email', 'test@example.com')->first();

        $product = ProductOrder::create([
            'name' => 'Pack Photoshop',
            'price' => 59.99
        ]);

        $user->orders()->create([
            'amount' => 99,
            'status' => 'paid',
            'orderable_id' => $product->id,
            'orderable_type' => ProductOrder::class
        ]);
    }
}
