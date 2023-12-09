<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
