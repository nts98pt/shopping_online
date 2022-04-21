<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            AddressCustomerSeeder::class,
            AdminPermissionSeeder::class,
            MethodPaySeeder::class,
            OrdersDetailSeeder::class,
            OrderSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
