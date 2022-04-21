<?php

namespace Database\Seeders;

use App\Models\AddressCustomer;
use Illuminate\Database\Seeder;

class AddressCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AddressCustomer::factory()
            ->count(50)
            ->create();
    }
}
