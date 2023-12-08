<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Options;
use Illuminate\Support\Facades\DB;
class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [ 'option_name' => 'Tidak sama sekali', 'value' => 0 ],
            [ 'option_name' => 'Beberapa hari', 'value' => 1 ],
            [ 'option_name' => 'Lebih dari setengah hari', 'value' => 2 ],
            [ 'option_name' => 'Hampir setiap hari', 'value' => 3 ],
            [ 'option_name' => 'Tidak sama sekali', 'value' => 0 ],
            [ 'option_name' => 'Sedikit', 'value' => 1 ],
            [ 'option_name' => 'Sering', 'value' => 2 ],
            [ 'option_name' => 'Banyak', 'value' => 3 ],
            [ 'option_name' => 'Selalu', 'value' => 4 ],
            [ 'option_name' => 'Tidak pernah', 'value' => 0 ],
            [ 'option_name' => 'Kadang-kadang', 'value' => 1 ],
            [ 'option_name' => 'Sebagian waktu', 'value' => 2 ],
            [ 'option_name' => 'Hampir setiap waktu', 'value' => 3 ],
            [ 'option_name' => 'Kurang dari kebanyakan orang', 'value' => 0 ],
            [ 'option_name' => 'Sama seperti kebanyakan orang', 'value' => 1 ],
            [ 'option_name' => 'Lebih dari kebanyakan orang', 'value' => 2 ],
            [ 'option_name' => 'Di tubuh saya sepanjang waktu', 'value' => 3 ],
            [ 'option_name' => 'Pada umumnya, saya tidak sadar akan sensasi atau perubahan tubuh', 'value' => 0 ],
            [ 'option_name' => 'Kadang-kadang sadar', 'value' => 1 ],
            [ 'option_name' => 'Sering sadar', 'value' => 2 ],
            [ 'option_name' => 'Selalu sadar', 'value' => 3 ],
            [ 'option_name' => 'Tanpa masalah', 'value' => 0 ],
            [ 'option_name' => 'Sebagian besar waktu', 'value' => 1 ],
            [ 'option_name' => 'Saya mencoba menahan pikiran tentang penyakit tetapi sering tidak dapat melakukannya', 'value' => 2 ],
            [ 'option_name' => 'Pikiran tentang penyakit begitu kuat sehingga saya tidak lagi mencoba menahannya', 'value' => 3 ],
            [ 'option_name' => 'Tidak pernah', 'value' => 0 ],
            [ 'option_name' => 'Kadang-kadang', 'value' => 1 ],
            [ 'option_name' => 'Sering', 'value' => 2 ],
            [ 'option_name' => 'Selalu', 'value' => 3 ],
            [ 'option_name' => 'Merasa lega selamanya', 'value' => 0 ],
            [ 'option_name' => 'Awalnya merasa lega tetapi kekhawatiran kadang-kadang kembali', 'value' => 1 ],
            [ 'option_name' => 'Awalnya merasa lega tetapi kekhawatiran selalu kembali', 'value' => 2 ],
            [ 'option_name' => 'Tidak merasa lega jika dokter memberi tahu saya bahwa tidak ada yang salah', 'value' => 3 ],
            [ 'option_name' => 'Jarang', 'value' => 0 ],
            [ 'option_name' => 'Sering', 'value' => 1 ],
            [ 'option_name' => 'Selalu', 'value' => 2 ],
            [ 'option_name' => 'Jika saya memiliki sensasi atau perubahan tubuh, saya harus tahu apa artinya', 'value' => 3 ],
            [ 'option_name' => 'Sangat rendah', 'value' => 0 ],
            [ 'option_name' => 'Cukup rendah', 'value' => 1 ],
            [ 'option_name' => 'Sedang', 'value' => 2 ],
            [ 'option_name' => 'Tinggi', 'value' => 3 ],
            [ 'option_name' => 'biasanya', 'value' => 3 ],
            [ 'option_name' => 'Tidak merasa sulit untuk berpikir tentang hal-hal lain', 'value' => 0 ],
            [ 'option_name' => 'Kadang-kadang merasa sulit untuk berpikir tentang hal-hal lain', 'value' => 1 ],
            [ 'option_name' => 'Sering merasa sulit untuk berpikir tentang hal-hal lain', 'value' => 2 ],
            [ 'option_name' => 'Selalu merasa sulit untuk berpikir tentang hal-hal lain', 'value' => 3 ],
            [ 'option_name' => 'Tidak cukup khawatir tentang kesehatan saya', 'value' => 0 ],
            [ 'option_name' => 'Memiliki sikap normal terhadap kesehatan saya', 'value' => 1 ],
            [ 'option_name' => 'Terlalu banyak khawatir tentang kesehatan saya', 'value' => 2 ],
            [ 'option_name' => 'Seorang hipokondriak', 'value' => 3 ],
            [ 'option_name' => 'Masih bisa menikmati banyak hal dalam hidup saya', 'value' => 0 ],
            [ 'option_name' => 'Masih bisa menikmati sedikit hal dalam hidup saya', 'value' => 1 ],
            [ 'option_name' => 'Hampir tidak bisa menikmati banyak hal dalam hidup saya', 'value' => 2 ],
            [ 'option_name' => 'Tidak dapat sama sekali menikmati hidup', 'value' => 3 ],
            [ 'option_name' => 'Bagus', 'value' => 0 ],
            [ 'option_name' => 'Sedang', 'value' => 1 ],
            [ 'option_name' => 'Kecil', 'value' => 2 ],
            [ 'option_name' => 'Tidak ada peluang', 'value' => 3 ],
            [ 'option_name' => 'Beberapa aspek', 'value' => 0 ],
        ];
        DB::table('options')->insert($data);
    }
}