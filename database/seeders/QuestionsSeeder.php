<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'test_id' => 1,
                'questionName' => 'Merasa gugup, cemas, atau tegang',
            ],
            [
                'test_id' => 1,
                'questionName' => 'Tidak dapat berhenti atau mengendalikan kekhawatiran',
            ],
            [
                'test_id' => 1,
                'questionName' => 'Terlalu khawatir tentang berbagai hal',
            ],
            [
                'test_id' => 1,
                'questionName' => 'Kesulitan untuk bersantai',
            ],
            [
                'test_id' => 1,
                'questionName' => 'Sangat gelisah sehingga sulit untuk diam',
            ],
            [
                'test_id' => 1,
                'questionName' => 'Mudah tersinggung atau mudah marah',
            ],
            [
                'test_id' => 1,
                'questionName' => 'Merasa takut seolah-olah sesuatu yang mengerikan mungkin terjadi',
            ],
            [
                'test_id' => 2,
                'questionName' => 'Minat atau kesenangan sedikit dalam melakukan hal-hal',
            ],
            [
                'test_id' => 2,
                'questionName' => 'Merasa sedih, depresi, atau putus asa',
            ],
            [
                'test_id' => 2,
                'questionName' => 'Kesulitan tidur atau tetap tidur, atau tidur terlalu banyak',
            ],
            [
                'test_id' => 2,
                'questionName' => 'Merasa lelah atau memiliki sedikit energi',
            ],
            [
                'test_id' => 2,
                'questionName' => 'Selera makan yang buruk atau makan berlebihan',
            ],
            [
                'test_id' => 2,
                'questionName' => 'Merasa buruk tentang diri sendiri – atau bahwa Anda adalah seorang gagal atau telah mengecewakan diri sendiri atau keluarga Anda',
            ],
            [
                'test_id' => 2,
                'questionName' => 'Kesulitan berkonsentrasi pada hal-hal, seperti membaca koran atau menonton televisi',
            ],
            [
                'test_id' => 2,
                'questionName' => 'Bergerak atau berbicara begitu lambat sehingga orang lain bisa melihat? Atau sebaliknya – begitu gelisah atau gelisah sehingga Anda bergerak banyak lebih dari biasanya',
            ],
            [
                'test_id' => 2,
                'questionName' => 'Pikiran bahwa Anda akan lebih baik mati atau menyakiti diri sendiri dengan cara tertentu',
            ],
            [
                'test_id' => 6,
                'questionName' => 'Saya membandingkan aspek penampilan saya dengan orang lain.',
            ],
            [
                'test_id' => 6,
                'questionName' => 'Saya memeriksa penampilan saya (misalnya, di cermin, dengan menyentuh dengan jari, atau dengan mengambil foto diri saya).',
            ],
            [
                'test_id' => 6,
                'questionName' => 'Saya menghindari situasi atau orang karena penampilan saya.',
            ],
            [
                'test_id' => 6,
                'questionName' => 'Saya merenung tentang peristiwa masa lalu atau alasan untuk menjelaskan mengapa saya terlihat seperti ini.',
            ],
            [
                'test_id' => 6,
                'questionName' => 'Saya BERPIKIR tentang cara menyamarkan atau mengubah penampilan saya.',
            ],
            [
                'test_id' => 6,
                'questionName' => 'Saya fokus pada bagaimana saya merasa saya terlihat, bukan pada lingkungan sekitar saya.',
            ],
            [
                'test_id' => 6,
                'questionName' => 'Saya menghindari permukaan reflektif, foto, atau video diri saya.',
            ],
            [
                'test_id' => 6,
                'questionName' => 'Saya membahas penampilan saya dengan orang lain atau bertanya kepada mereka tentang hal itu.',
            ],
            [
                'test_id' => 6,
                'questionName' => 'Saya mencoba menyamarkan atau mengubah aspek penampilan saya.',
            ],
            [
                'test_id' => 6,
                'questionName' => 'Saya mencoba mencegah orang melihat aspek penampilan saya dalam situasi tertentu (misalnya, dengan mengubah postur saya, menghindari cahaya terang).',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Saya khawatir tentang kesehatan saya',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Dibandingkan dengan orang lain seumur saya, saya sadar akan nyeri dan rasa sakit',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Pernyataan mana yang paling baik menggambarkan kesadaran Anda terhadap sensasi tubuh atau perubahan?',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Saya dapat menahan pikiran tentang penyakit',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Saya takut akan memiliki penyakit serius',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Saya memiliki gambaran (gambar mental) tentang diri saya sakit',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Saya kesulitan melepaskan pikiran tentang kesehatan saya',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Jika dokter memberi tahu saya bahwa tidak ada yang salah, saya',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Ketika saya mendengar tentang penyakit, saya berpikir bahwa saya menderitanya sendiri',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Jika saya memiliki sensasi atau perubahan tubuh yang tidak dapat dijelaskan, saya bertanya-tanya apa artinya',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Saya biasanya merasa risiko saya untuk mengembangkan penyakit serius',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Saya berpikir saya memiliki penyakit serius',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Jika saya memperhatikan sensasi tubuh yang tidak dapat dijelaskan, saya',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Keluarga atau teman-teman saya mungkin mengatakan bahwa saya',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Jika saya memiliki penyakit serius, saya masih dapat menikmati banyak hal dalam hidup saya',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Jika saya mengembangkan penyakit serius, saya pikir kemungkinan bahwa obat modern akan dapat menyembuhkan saya adalah',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Penyakit serius akan merusak hidup saya dalam',
            ],
            [
                'test_id' => 7,
                'questionName' => 'Jika saya memiliki penyakit serius, saya akan merasa bahwa saya',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya merasa rileks bahkan dalam situasi sosial yang tidak biasa.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya mencoba menghindari situasi yang memaksa saya menjadi sangat bersosialisasi.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Mudah bagi saya untuk bersantai ketika saya bersama orang asing.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya tidak memiliki keinginan khusus untuk menghindari orang.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya sering merasa terganggu oleh acara sosial.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Biasanya saya merasa tenang dan nyaman dalam acara sosial.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya biasanya merasa nyaman saat berbicara dengan seseorang dari jenis kelamin yang berlawanan.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya mencoba menghindari berbicara dengan orang kecuali saya mengenal mereka dengan baik.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Jika ada kesempatan untuk bertemu orang baru, saya sering mengambilnya.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya sering merasa gugup atau tegang dalam pertemuan santai di mana kedua jenis kelamin hadir.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Biasanya saya gugup dengan orang kecuali saya mengenal mereka dengan baik.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Biasanya saya merasa rileks ketika saya bersama sekelompok orang.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya sering ingin menjauh dari orang.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Biasanya saya merasa tidak nyaman ketika saya berada dalam kelompok orang yang tidak saya kenal.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Biasanya saya merasa rileks ketika saya bertemu seseorang untuk pertama kalinya.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Di kenalkan kepada orang membuat saya tegang dan gugup.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Meskipun ruangan penuh dengan orang asing, saya mungkin masuk.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya akan menghindari berjalan dan bergabung dengan kelompok besar orang.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Ketika atasan saya ingin berbicara dengan saya, saya berbicara dengan senang hati.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Seringkali saya merasa gugup ketika saya bersama sekelompok orang.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya cenderung menjauh dari orang.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya tidak keberatan berbicara dengan orang di pesta atau pertemuan sosial.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya jarang merasa nyaman dalam kelompok besar orang.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Seringkali saya berpikir alasan untuk menghindari undangan sosial.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Terkadang saya bertanggung jawab untuk memperkenalkan orang satu sama lain.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya mencoba menghindari acara sosial formal.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Biasanya saya pergi ke setiap undangan sosial yang saya miliki.',
            ],
            [
                'test_id' => 8,
                'questionName' => 'Saya merasa mudah untuk bersantai dengan orang lain.',
            ],
        ];
        DB::table('questions')->insert($data);
    }
}
