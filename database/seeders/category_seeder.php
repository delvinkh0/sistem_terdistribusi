<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('category')->truncate();

        // Seed the database with sample data
        DB::table('category')->insert([
            [
                'categoryName' => 'Kecemasan',
            ],
            [
                'categoryName' => 'Depresi',
            ],
            [
                'categoryName' => 'Stress',
            ],
            [
                'categoryName' => 'Kecemasan Penampilan',
            ],
            [
                'categoryName' => 'Kecemasan Kesehatan',
            ],
            [
                'categoryName' => 'Kecemasan Sosial',
            ],
            // Add more category data as needed
        ]);
    }
}
