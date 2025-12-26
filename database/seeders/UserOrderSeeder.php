<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;   // ⭐ بسیار مهم
use App\Models\User;
use App\Models\Order;

class UserOrderSeeder extends Seeder
{
    public function run()
    {
        $ali = User::create(['name' => 'Ali']);
        $reza = User::create(['name' => 'Reza']);

        Order::insert([
            ['user_id' => $ali->id, 'amount' => 400000],
            ['user_id' => $ali->id, 'amount' => 700000],
            ['user_id' => $reza->id, 'amount' => 300000],
        ]);
    }
}
