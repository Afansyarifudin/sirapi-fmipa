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
            'name' => 'admin admin',
            'email' => 'admin@admin.test',
            'password' => bcrypt('12345678')
        ]);

        $admin -> assignRole('admin');

        // create operator seeder
        $operator = User::create([
            'name' => 'operator operator',
            'email' => 'operator@operator.test',
            'password' => bcrypt('12345678')
        ]);

        $operator -> assignRole('operator');

        // create dosen seeder
        $dosen = User::create([
            'name' => 'dosen dosen',
            'email' => 'dosen@dosen.test',
            'password' => bcrypt('12345678')
        ]);

        $dosen -> assignRole('dosen');

    }
}
