<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions_with_test_id_one = [
            [
                'question_name' => 'Merasa cemas, gelisah, atau tegang',
                'test_id' => 1,
            ],
            [
                'question_name' => 'Tidak bisa berhenti atau mengendalikan kekhawatiran',
                'test_id' => 1,
            ],
            [
                'question_name' => 'Terlalu banyak mengkhawatirkan berbagai hal',
                'test_id' => 1,
            ]
        ];
    }
}
