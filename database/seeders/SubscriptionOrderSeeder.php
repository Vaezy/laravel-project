<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionOrder;
use App\Models\User;

class SubscriptionOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->first();

        $subscription = SubscriptionOrder::create([
            'name' => 'CDT',
            'price' => 15,
            'duration_months' => 12
        ]);

        $user->orders()->create([
            'amount' => 15,
            'status' => 'paid',
            'orderable_id' => $subscription->id,
            'orderable_type' => SubscriptionOrder::class
        ]);
    }
}
