<?php

namespace Database\Seeders;

use App\Models\Step;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'step_name' => 'Kesadaran Tubuh',
                'step_description' => 'Merasakan napas dari kepala sampai ujung kaki bawah'
            ],
            [
                'step_name' => ' Pernapasan Variatif',
                'step_description' => 'Perhatikan panjang atau pendek , berat atau ringan, cepat atau lambat, dan panas atau dingin napas'
            ],
            [
                'step_name' => 'Jeda dalam Pernapasan',
                'step_description' => 'Perhatikan jeda napas anda'
            ],
            [
                'step_name' => 'Sumber Napas Masuk dan Keluar',
                'step_description' => 'Perhatikan jalur masuk napas melalui apa dan jalur keluar napas melalui apa'
            ],
            [
                'step_name' => 'Observasi Napas di Dada dan Perut',
                'step_description' => 'Amati napas yang ada didada, napas diperut seperti apa'
            ],
            [
                'step_name' => 'Pernapasan dalam Keseluruhan Tubuh',
                'step_description' => 'Perhatikan napas secara keseluruhan tubuh seperti apa'
            ],
        ];
        Step::insert($data);
    }
}
