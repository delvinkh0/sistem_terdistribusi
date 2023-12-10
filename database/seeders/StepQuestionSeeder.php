<?php

namespace Database\Seeders;

use App\Models\StepQuestion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StepQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'step_id' => 1,
                'step_question' => 'Bagaimana perasaanmu setelah sesi ini?',
                'placeholder' => 'Contoh: tenang, rileks, dll'
            ],
            [
                'step_id' => 2,
                'step_question' => 'Apakah napasmu cenderung panjang atau pendek?',
                'placeholder' => 'Contoh: panjang, pendek, dll'
            ],
            [
                'step_id' => 2,
                'step_question' => 'Apakah napasmu cenderung berat atau ringan?',
                'placeholder' => 'Contoh: berat, ringan, dll'
            ],
            [
                'step_id' => 2,
                'step_question' => 'Apakah napasmu cenderung cepat atau lambat?',
                'placeholder' => 'Contoh: cepat, lambat, dll'
            ],
            [
                'step_id' => 2,
                'step_question' => 'Apakah napasmu cenderung panas atau dingin?',
                'placeholder' => 'Contoh: panas, dingin, dll'
            ],
            [
                'step_id' => 3,
                'step_question' => 'Kira - kira berapa lama jeda antara napas keluar dan napas masuk?',
                'placeholder' => 'Contoh: 1 detik, 2 detik, dll'
            ],
            [
                'step_id' => 4,
                'step_question' => 'Melalui apa napas masukmu?',
                'placeholder' => 'Contoh: hidung, mulut, dll'
            ],
            [
                'step_id' => 4,
                'step_question' => 'Melalui apa napas keluarmu?',
                'placeholder' => 'Contoh: hidung, mulut, dll'
            ],
            [
                'step_id' => 5,
                'step_question' => 'Bagaimana napas yang ada di dada?',
                'placeholder' => 'Contoh: kembang kempis, cukup tenang, dll'
            ],
            [
                'step_id' => 5,
                'step_question' => 'Bagaimana napas yang ada di perut?',
                'placeholder' => 'Contoh: kembang kempis, cukup tenang, dll'
            ],
            [
                'step_id' => 6,
                'step_question' => 'Bagaimana napas yang ada di seluruh tubuh?',
                'placeholder' => 'Contoh: Cukup tenang, napas ada secara merata dll'
            ],
        ];
        StepQuestion::insert($data);
    }
}
