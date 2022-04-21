<?php

namespace Database\Seeders;

use App\Models\OrdersDetail;
use Illuminate\Database\Seeder;

class OrdersDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrdersDetail::factory()
            ->count(50)
            ->create();
    }
}
