<?php

namespace Database\Seeders;
use App\Models\Test;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'test_name' => 'Generalised Anxiety Disorder Assessment (GAD-7)',
                'test_description' => 'Tes ini mengukur tingkat kecemasan umum dengan 7 pertanyaan.',
            ],
            [
                'test_name' => 'Patient Health Questionnaire – Depression (PHQ-9)',
                'test_description' => 'Tes ini mengukur tingkat depresi dengan 9 pertanyaan.',
            ],
            [
                'test_name' => 'DASS (Depression and Anxiety Stress Scale)',
                'test_description' => 'Tes komprehensif yang mengukur depresi, kecemasan, dan stres.',
            ],
            [
                'test_name' => 'Depression Anxiety Stress Scales 21 (DASS-21)',
                'test_description' => 'Versi lebih pendek dari DASS, fokus pada depresi, kecemasan, dan stres.',
            ],
            [
                'test_name' => 'Depression Anxiety Stress Scales – Youth Version (DASS-Y)',
                'test_description' => 'Tes khusus untuk anak dan remaja yang mengukur depresi, kecemasan, dan stres.',
            ],
            [
                'test_name' => 'Appearance Anxiety Inventory (AAI)',
                'test_description' => 'Tes ini mengukur kecemasan terkait penampilan fisik dan citra tubuh..',
            ],
            [
                'test_name' => 'Short Health Anxiety Inventory (SHAI)',
                'test_description' => 'Tes ini mengukur kecemasan terkait kesehatan, membantu individu menilai kecenderungan untuk merasa cemas tentang kondisi kesehatan.',
            ],
            [
                'test_name' => 'Social Avoidance and Distress Scale (SADS)',
                'test_description' => 'Tes ini mengukur tingkat ketakutan dan kecemasan sosial dalam situasi sosial.',
            ],
        ];
        Test::insert($data);
    }
}
