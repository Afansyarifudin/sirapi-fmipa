<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create admin seeder
        $admin = User::create([
            'name' => 'afan admin',
            'email' => 'afan@admin.test',
            'password' => bcrypt('12345678')
        ]);

        $admin -> assignRole('admin');

        // create operator seeder
        $operator = User::create([
            'name' => 'afan operator',
            'email' => 'afan@operator.test',
            'password' => bcrypt('12345678')
        ]);

        $operator -> assignRole('operator');

        // create dosen seeder
        $dosen = User::create([
            'name' => 'afan dosen',
            'email' => 'afan@dosen.test',
            'password' => bcrypt('12345678')
        ]);

        $dosen -> assignRole('dosen');

    }
}
