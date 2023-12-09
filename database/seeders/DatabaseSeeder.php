<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TestSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\OptionsQuestions;
use Database\Seeders\OptionsSeeder;
use Database\Seeders\QuestionsSeeder;

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
            OptionsQuestions::class
        ]);
    }
}
