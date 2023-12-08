<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'category_name' => 'Kecemasan',
            ],
            [
                'category_name' => 'Depresi',
            ],
            [
                'category_name' => 'Stress',
            ],
            [
                'category_name' => 'Kecemasan Penampilan',
            ],
            [
                'category_name' => 'Kecemasan Kesehatan',
            ],
            [
                'category_name' => 'Kecemasan Sosial',
            ],
        ];

        Category::insert($data);
    }
}
