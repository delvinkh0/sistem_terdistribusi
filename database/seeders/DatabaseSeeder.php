<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TestSeeder;
use Database\Seeders\OptionsSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\QuestionsSeeder;
use Database\Seeders\TestCategorySeeder;
use Database\Seeders\OptionsQuestionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            TestSeeder::class,
            QuestionsSeeder::class,
            OptionsSeeder::class,
            OptionsQuestionsSeeder::class,
            TestCategorySeeder::class,
            TestResultsSeeder::class,
        ]);
    }
}
