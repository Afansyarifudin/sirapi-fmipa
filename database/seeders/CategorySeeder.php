<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Dosen',
            'slug' => 'Kategori-Dosen',
        ]);

        Category::create([
            'name' => 'Kepegawaian',
            'slug' => 'Kategori-Kepegawaian',
        ]);

        Category::create([
            'name' => 'Umum',
            'slug' => 'Kategori-Umum',
        ]);

        Category::create([
            'name' => 'Kerjasama',
            'slug' => 'Kategori-Kerjasama',
        ]);
    }
}
