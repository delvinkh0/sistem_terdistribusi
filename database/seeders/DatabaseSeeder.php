<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TestSeeder;
use Database\Seeders\CategorySeeder;

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
            
        ]);
    }
}
