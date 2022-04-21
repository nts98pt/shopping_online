<?php

namespace Database\Seeders;

use App\Models\MethodPay;
use Illuminate\Database\Seeder;

class MethodPaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MethodPay::factory()
            ->count(50)
            ->create();
    }
}
