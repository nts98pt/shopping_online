<?php

namespace Database\Seeders;

use App\Models\AdminPermission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminPermission::factory()
            ->count(50)
            ->create();
    }
}
