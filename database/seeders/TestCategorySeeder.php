<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TestCategory;
class TestCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            ['id' => 1, 'test_id' => 1, 'category_id' => 1],
            ['id' => 2, 'test_id' => 2, 'category_id' => 2],
            ['id' => 3, 'test_id' => 3, 'category_id' => 1],
            ['id' => 4, 'test_id' => 3, 'category_id' => 2],
            ['id' => 5, 'test_id' => 3, 'category_id' => 3],
            ['id' => 6, 'test_id' => 4, 'category_id' => 1],
            ['id' => 7, 'test_id' => 4, 'category_id' => 2],
            ['id' => 8, 'test_id' => 4, 'category_id' => 3],
            ['id' => 9, 'test_id' => 5, 'category_id' => 1],
            ['id' => 10, 'test_id' => 5, 'category_id' => 2],
            ['id' => 11, 'test_id' => 5, 'category_id' => 3],
            ['id' => 12, 'test_id' => 6, 'category_id' => 4],
            ['id' => 13, 'test_id' => 7, 'category_id' => 5],
            ['id' => 14, 'test_id' => 8, 'category_id' => 6],
        ];
        TestCategory::insert($data);
    }
}
