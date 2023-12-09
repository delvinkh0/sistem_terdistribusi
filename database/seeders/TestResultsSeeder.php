<?php

namespace Database\Seeders;

use App\Models\TestResults;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'result_name' => 'Tidak Ada-Minimal (0-4)',
                'result_description' => 'Hasil skor 0-4 pada GAD-7 menunjukkan tingkat kecemasan yang sangat rendah atau bahkan tidak ada. Ini menunjukkan bahwa secara umum, anda tidak mengalami gejala kecemasan yang signifikan.',
                'result_solution' => 'Tetap menjaga pola hidup sehat, seperti olahraga teratur, tidur yang cukup, dan menjaga keseimbangan hidup secara umum. Fokus pada praktik self-care dapat membantu mencegah perkembangan kecemasan.',
                'first_limit' => 0,
                'end_limit' => 4,
                'test_id' => 1
            ],
            [
                'result_name' => 'Ringan (5-9)',
                'result_description' => 'Skor 5-9 menandakan tingkat kecemasan yang ringan. Meskipun gejala mungkin ada, tetapi belum mencapai tingkat yang signifikan.',
                'result_solution' => 'Menggunakan teknik manajemen stres seperti meditasi, pernapasan dalam, atau aktivitas relaksasi. Berbicara dengan teman atau keluarga juga bisa memberikan dukungan emosional.',
                'first_limit' => 5,
                'end_limit' => 9,
                'test_id' => 1
            ],
            [
                'result_name' => 'Sedang (10-14)',
                'result_description' => 'Skor 10-14 menunjukkan tingkat kecemasan sedang. Anda mungkin mengalami gejala yang cukup signifikan yang dapat mempengaruhi keseharian anda.',
                'result_solution' => 'Konsultasi dengan profesional kesehatan mental, seperti psikolog atau psikiater, untuk mendapatkan panduan lebih lanjut. Terapi kognitif perilaku (CBT) bisa menjadi pilihan yang efektif.',
                'first_limit' => 10,
                'end_limit' => 14,
                'test_id' => 1
            ],
            [
                'result_name' => 'Parah (15+)',
                'result_description' => 'Skor 15 atau lebih menandakan tingkat kecemasan yang parah. Gejala mungkin sangat mengganggu dan memerlukan intervensi serius.',
                'result_solution' => 'Penting untuk mencari bantuan profesional secepat mungkin. Terapi intensif, mungkin termasuk kombinasi terapi dan obat-obatan, dapat direkomendasikan oleh profesional kesehatan mental. Dukungan sosial juga penting dalam proses pemulihan.',
                'first_limit' => 15,
                'end_limit' => 21,
                'test_id' => 1
            ],
        ];
        TestResults::insert($data);
    }
}
