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
        $data = [
            ['test_id' => 1, 'category_id' => 1],
            ['test_id' => 2, 'category_id' => 2],
            ['test_id' => 3, 'category_id' => 1],
            ['test_id' => 3, 'category_id' => 2],
            ['test_id' => 3, 'category_id' => 3],
            ['test_id' => 4, 'category_id' => 1],
            ['test_id' => 4, 'category_id' => 2],
            ['test_id' => 4, 'category_id' => 3],
            ['test_id' => 5, 'category_id' => 1],
            ['test_id' => 5, 'category_id' => 2],
            ['test_id' => 5, 'category_id' => 3],
            ['test_id' => 6, 'category_id' => 4],
            ['test_id' => 7, 'category_id' => 5],
            ['test_id' => 8, 'category_id' => 6],
        ];
        TestCategory::insert($data);
    }
}
