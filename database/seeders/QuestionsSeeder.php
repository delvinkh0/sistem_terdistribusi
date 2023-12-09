<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Questions;
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
                'question_name' => 'Merasa gugup, cemas, atau tegang',
            ],
            [
                'test_id' => 1,
                'question_name' => 'Tidak dapat berhenti atau mengendalikan kekhawatiran',
            ],
            [
                'test_id' => 1,
                'question_name' => 'Terlalu khawatir tentang berbagai hal',
            ],
            [
                'test_id' => 1,
                'question_name' => 'Kesulitan untuk bersantai',
            ],
            [
                'test_id' => 1,
                'question_name' => 'Sangat gelisah sehingga sulit untuk diam',
            ],
            [
                'test_id' => 1,
                'question_name' => 'Mudah tersinggung atau mudah marah',
            ],
            [
                'test_id' => 1,
                'question_name' => 'Merasa takut seolah-olah sesuatu yang mengerikan mungkin terjadi',
            ],
            [
                'test_id' => 2,
                'question_name' => 'Minat atau kesenangan sedikit dalam melakukan hal-hal',
            ],
            [
                'test_id' => 2,
                'question_name' => 'Merasa sedih, depresi, atau putus asa',
            ],
            [
                'test_id' => 2,
                'question_name' => 'Kesulitan tidur atau tetap tidur, atau tidur terlalu banyak',
            ],
            [
                'test_id' => 2,
                'question_name' => 'Merasa lelah atau memiliki sedikit energi',
            ],
            [
                'test_id' => 2,
                'question_name' => 'Selera makan yang buruk atau makan berlebihan',
            ],
            [
                'test_id' => 2,
                'question_name' => 'Merasa buruk tentang diri sendiri – atau bahwa Anda adalah seorang gagal atau telah mengecewakan diri sendiri atau keluarga Anda',
            ],
            [
                'test_id' => 2,
                'question_name' => 'Kesulitan berkonsentrasi pada hal-hal, seperti membaca koran atau menonton televisi',
            ],
            [
                'test_id' => 2,
                'question_name' => 'Bergerak atau berbicara begitu lambat sehingga orang lain bisa melihat? Atau sebaliknya – begitu gelisah atau gelisah sehingga Anda bergerak banyak lebih dari biasanya',
            ],
            [
                'test_id' => 2,
                'question_name' => 'Pikiran bahwa Anda akan lebih baik mati atau menyakiti diri sendiri dengan cara tertentu',
            ],
            [
                'test_id' => 6,
                'question_name' => 'Saya membandingkan aspek penampilan saya dengan orang lain.',
            ],
            [
                'test_id' => 6,
                'question_name' => 'Saya memeriksa penampilan saya (misalnya, di cermin, dengan menyentuh dengan jari, atau dengan mengambil foto diri saya).',
            ],
            [
                'test_id' => 6,
                'question_name' => 'Saya menghindari situasi atau orang karena penampilan saya.',
            ],
            [
                'test_id' => 6,
                'question_name' => 'Saya merenung tentang peristiwa masa lalu atau alasan untuk menjelaskan mengapa saya terlihat seperti ini.',
            ],
            [
                'test_id' => 6,
                'question_name' => 'Saya BERPIKIR tentang cara menyamarkan atau mengubah penampilan saya.',
            ],
            [
                'test_id' => 6,
                'question_name' => 'Saya fokus pada bagaimana saya merasa saya terlihat, bukan pada lingkungan sekitar saya.',
            ],
            [
                'test_id' => 6,
                'question_name' => 'Saya menghindari permukaan reflektif, foto, atau video diri saya.',
            ],
            [
                'test_id' => 6,
                'question_name' => 'Saya membahas penampilan saya dengan orang lain atau bertanya kepada mereka tentang hal itu.',
            ],
            [
                'test_id' => 6,
                'question_name' => 'Saya mencoba menyamarkan atau mengubah aspek penampilan saya.',
            ],
            [
                'test_id' => 6,
                'question_name' => 'Saya mencoba mencegah orang melihat aspek penampilan saya dalam situasi tertentu (misalnya, dengan mengubah postur saya, menghindari cahaya terang).',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Saya khawatir tentang kesehatan saya',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Dibandingkan dengan orang lain seumur saya, saya sadar akan nyeri dan rasa sakit',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Pernyataan mana yang paling baik menggambarkan kesadaran Anda terhadap sensasi tubuh atau perubahan?',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Saya dapat menahan pikiran tentang penyakit',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Saya takut akan memiliki penyakit serius',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Saya memiliki gambaran (gambar mental) tentang diri saya sakit',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Saya kesulitan melepaskan pikiran tentang kesehatan saya',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Jika dokter memberi tahu saya bahwa tidak ada yang salah, saya',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Ketika saya mendengar tentang penyakit, saya berpikir bahwa saya menderitanya sendiri',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Jika saya memiliki sensasi atau perubahan tubuh yang tidak dapat dijelaskan, saya bertanya-tanya apa artinya',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Saya biasanya merasa risiko saya untuk mengembangkan penyakit serius',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Saya berpikir saya memiliki penyakit serius',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Jika saya memperhatikan sensasi tubuh yang tidak dapat dijelaskan, saya',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Keluarga atau teman-teman saya mungkin mengatakan bahwa saya',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Jika saya memiliki penyakit serius, saya masih dapat menikmati banyak hal dalam hidup saya',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Jika saya mengembangkan penyakit serius, saya pikir kemungkinan bahwa obat modern akan dapat menyembuhkan saya adalah',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Penyakit serius akan merusak hidup saya dalam',
            ],
            [
                'test_id' => 7,
                'question_name' => 'Jika saya memiliki penyakit serius, saya akan merasa bahwa saya',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya merasa rileks bahkan dalam situasi sosial yang tidak biasa.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya mencoba menghindari situasi yang memaksa saya menjadi sangat bersosialisasi.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Mudah bagi saya untuk bersantai ketika saya bersama orang asing.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya tidak memiliki keinginan khusus untuk menghindari orang.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya sering merasa terganggu oleh acara sosial.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Biasanya saya merasa tenang dan nyaman dalam acara sosial.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya biasanya merasa nyaman saat berbicara dengan seseorang dari jenis kelamin yang berlawanan.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya mencoba menghindari berbicara dengan orang kecuali saya mengenal mereka dengan baik.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Jika ada kesempatan untuk bertemu orang baru, saya sering mengambilnya.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya sering merasa gugup atau tegang dalam pertemuan santai di mana kedua jenis kelamin hadir.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Biasanya saya gugup dengan orang kecuali saya mengenal mereka dengan baik.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Biasanya saya merasa rileks ketika saya bersama sekelompok orang.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya sering ingin menjauh dari orang.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Biasanya saya merasa tidak nyaman ketika saya berada dalam kelompok orang yang tidak saya kenal.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Biasanya saya merasa rileks ketika saya bertemu seseorang untuk pertama kalinya.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Di kenalkan kepada orang membuat saya tegang dan gugup.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Meskipun ruangan penuh dengan orang asing, saya mungkin masuk.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya akan menghindari berjalan dan bergabung dengan kelompok besar orang.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Ketika atasan saya ingin berbicara dengan saya, saya berbicara dengan senang hati.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Seringkali saya merasa gugup ketika saya bersama sekelompok orang.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya cenderung menjauh dari orang.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya tidak keberatan berbicara dengan orang di pesta atau pertemuan sosial.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya jarang merasa nyaman dalam kelompok besar orang.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Seringkali saya berpikir alasan untuk menghindari undangan sosial.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Terkadang saya bertanggung jawab untuk memperkenalkan orang satu sama lain.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya mencoba menghindari acara sosial formal.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Biasanya saya pergi ke setiap undangan sosial yang saya miliki.',
            ],
            [
                'test_id' => 8,
                'question_name' => 'Saya merasa mudah untuk bersantai dengan orang lain.',
            ],
        ];
        Questions::insert($data);
    }
}
