<?php

namespace Database\Seeders;

use App\Models\Arsip;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // Arsip::factory(100)->create();


        $this->call(CategorySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

    }
}
