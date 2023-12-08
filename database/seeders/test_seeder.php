<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class test_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('test')->truncate();

        // Seed the database with sample users
        DB::table('test')->insert([
            [
                'testName' => 'Generalised Anxiety Disorder Assessment (GAD-7)',
                'testDescription' => 'Tes ini mengukur tingkat kecemasan umum dengan 7 pertanyaan.',
            ],
            [
                'testName' => 'Patient Health Questionnaire – Depression (PHQ-9)',
                'testDescription' => 'Tes ini mengukur tingkat depresi dengan 9 pertanyaan.',
            ],
            [
                'testName' => 'DASS (Depression and Anxiety Stress Scale)',
                'testDescription' => 'Tes komprehensif yang mengukur depresi, kecemasan, dan stres.',
            ],
            [
                'testName' => 'Depression Anxiety Stress Scales 21 (DASS-21)',
                'testDescription' => 'Versi lebih pendek dari DASS, fokus pada depresi, kecemasan, dan stres.',
            ],
            [
                'testName' => 'Depression Anxiety Stress Scales – Youth Version (DASS-Y)',
                'testDescription' => 'Tes khusus untuk anak dan remaja yang mengukur depresi, kecemasan, dan stres.',
            ],
            [
                'testName' => 'Appearance Anxiety Inventory (AAI)',
                'testDescription' => 'Tes ini mengukur kecemasan terkait penampilan fisik dan citra tubuh..',
            ],
            [
                'testName' => 'Short Health Anxiety Inventory (SHAI)',
                'testDescription' => 'Tes ini mengukur kecemasan terkait kesehatan, membantu individu menilai kecenderungan untuk merasa cemas tentang kondisi kesehatan.',
            ],
            [
                'testName' => 'Social Avoidance and Distress Scale (SADS)',
                'testDescription' => 'Tes ini mengukur tingkat ketakutan dan kecemasan sosial dalam situasi sosial.',
            ],
            // Add more users as needed
        ]);
    }
}
