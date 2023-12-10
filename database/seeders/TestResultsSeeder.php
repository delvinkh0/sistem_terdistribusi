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
                'max_score' => 21,
                'test_id' => 1
            ],
            [
                'result_name' => 'Ringan (5-9)',
                'result_description' => 'Skor 5-9 menandakan tingkat kecemasan yang ringan. Meskipun gejala mungkin ada, tetapi belum mencapai tingkat yang signifikan.',
                'result_solution' => 'Menggunakan teknik manajemen stres seperti meditasi, pernapasan dalam, atau aktivitas relaksasi. Berbicara dengan teman atau keluarga juga bisa memberikan dukungan emosional.',
                'first_limit' => 5,
                'end_limit' => 9,
                'max_score' => 21,
                'test_id' => 1
            ],
            [
                'result_name' => 'Sedang (10-14)',
                'result_description' => 'Skor 10-14 menunjukkan tingkat kecemasan sedang. Anda mungkin mengalami gejala yang cukup signifikan yang dapat mempengaruhi keseharian anda.',
                'result_solution' => 'Konsultasi dengan profesional kesehatan mental, seperti psikolog atau psikiater, untuk mendapatkan panduan lebih lanjut. Terapi kognitif perilaku (CBT) bisa menjadi pilihan yang efektif.',
                'first_limit' => 10,
                'end_limit' => 14,
                'max_score' => 21,
                'test_id' => 1
            ],
            [
                'result_name' => 'Parah (15+)',
                'result_description' => 'Skor 15 atau lebih menandakan tingkat kecemasan yang parah. Gejala mungkin sangat mengganggu dan memerlukan intervensi serius.',
                'result_solution' => 'Penting untuk mencari bantuan profesional secepat mungkin. Terapi intensif, mungkin termasuk kombinasi terapi dan obat-obatan, dapat direkomendasikan oleh profesional kesehatan mental. Dukungan sosial juga penting dalam proses pemulihan.',
                'first_limit' => 15,
                'end_limit' => 21,
                'max_score' => 21,
                'test_id' => 1
            ],
            [
                'result_name' => 'Minimal (0-4)',
                'result_description' => 'Skor 0-4 menandakan tingkat depresi yang minimal atau bahkan tidak ada. Ini menunjukkan bahwa Anda mungkin tidak mengalami gejala depresi atau gejala yang ada sangat ringan dan tidak mengganggu aktivitas sehari-hari Anda.',
                'result_solution' => 'Penting untuk mempertahankan keseimbangan hidup yang sehat. Ini bisa termasuk menjaga pola tidur yang teratur, mengikuti rutinitas olahraga, dan mengelola stres dengan cara yang sehat. Melakukan kegiatan yang Anda nikmati dan menjaga hubungan sosial yang positif juga dapat membantu menjaga kesehatan mental Anda.',
                'first_limit' => 0,
                'end_limit' => 4,
                'max_score' => 27,
                'test_id' => 2
            ],
            [
                'result_name' => 'Ringan (5-9)',
                'result_description' => 'Skor 5-9 menunjukkan depresi pada tingkat ringan. Anda mungkin mengalami beberapa gejala depresi, tetapi masih dapat menjalani aktivitas sehari-hari dengan relatif normal.',
                'result_solution' => 'Fokus pada self-care, seperti menjaga rutinitas tidur dan olahraga teratur. Berbicara dengan teman atau keluarga dapat memberikan dukungan emosional. Jika diperlukan, konsultasi dengan profesional kesehatan mental dapat membantu.',
                'first_limit' => 5,
                'end_limit' => 9,
                'max_score' => 27,
                'test_id' => 2
            ],
            [
                'result_name' => 'Sedang (10-14)',
                'result_description' => 'Skor 10-14 menunjukkan tingkat depresi yang sedang. Gejala depresi mungkin mulai mengganggu fungsi sehari-hari, dan perhatian lebih lanjut diperlukan.',
                'result_solution' => 'Konsultasi dengan profesional kesehatan mental dianjurkan. Terapi kognitif perilaku (CBT) dan dukungan obat-obatan dapat menjadi pilihan perawatan. Mendukung sistem dukungan sosial juga penting.',
                'first_limit' => 10,
                'end_limit' => 14,
                'max_score' => 27,
                'test_id' => 2
            ],
            [
                'result_name' => 'Sedang hingga Berat (15-19)',
                'result_description' => 'Skor 15-19 menunjukkan depresi pada tingkat sedang hingga berat. Gejala depresi mungkin sudah signifikan dan dapat mempengaruhi fungsi sosial dan pekerjaan.',
                'result_solution' => 'Konsultasi segera dengan profesional kesehatan mental diperlukan. Terapi intensif, termasuk mungkin kombinasi terapi dan obat-obatan, dapat direkomendasikan. Dukungan keluarga dan teman sangat penting.',
                'first_limit' => 15,
                'end_limit' => 19,
                'max_score' => 27,
                'test_id' => 2
            ],
            [
                'result_name' => 'Berat (20-27)',
                'result_description' => 'Skor 20-27 menunjukkan depresi pada tingkat berat. Gejala depresi mungkin sangat mengganggu aktivitas sehari-hari, dan risiko untuk komplikasi kesehatan mental dan fisik dapat meningkat.',
                'result_solution' => 'Perlukan bantuan segera dari profesional kesehatan mental. Terapi intensif dan mungkin penggunaan obat-obatan harus dipertimbangkan. Dukungan keluarga dan sosial sangat krusial dalam proses pemulihan.',
                'first_limit' => 20,
                'end_limit' => 27,
                'max_score' => 27,
                'test_id' => 2
            ],
            [
                'result_name' => 'Rendah (0 - 5)',
                'result_description' => 'Individu dalam rentang ini umumnya memiliki persepsi yang sehat tentang penampilan mereka dan mengalami kecemasan minimal terkait dengan bagaimana mereka terlihat. Mereka kemungkinan nyaman dan percaya diri dengan penampilan mereka sendiri dan tidak menghabiskan waktu berlebihan untuk khawatir tentang penampilan fisik mereka.',
                'result_solution' => 'Untuk kelompok ini, menjaga citra diri yang positif adalah kunci. Melakukan aktivitas fisik teratur dan moderat, mengikuti diet seimbang, dan mempraktikkan teknik mindfulness atau relaksasi dapat membantu menjaga citra tubuh yang sehat. Menghindari pembicaraan negatif tentang diri sendiri dan berada di lingkungan sosial yang mendukung juga dapat berkontribusi dalam mempertahankan tingkat kecemasan penampilan yang rendah.',
                'first_limit' => 0,
                'end_limit' => 5,
                'max_score' => 40,
                'test_id' => 6
            ],
            [
                'result_name' => 'Menengah (6 - 15)',
                'result_description' => 'Rentang ini menunjukkan kekhawatiran yang moderat tentang penampilan. Individu mungkin menghabiskan lebih banyak waktu dari rata-rata untuk khawatir tentang bagaimana mereka terlihat dan mungkin sesekali menghindari beberapa aktivitas atau situasi sosial karena kekhawatiran tentang penampilan mereka.',
                'result_solution' => 'Strategi kognitif-perilaku bisa sangat efektif di sini. Mendorong pembicaraan positif tentang diri sendiri, menantang keyakinan negatif tentang penampilan, dan secara bertahap menghadapi situasi yang ditakuti terkait penampilan dapat membantu mengurangi kecemasan. Teknik mindfulness dan pengurangan stres juga mungkin bermanfaat. Jika kecemasan mulai mengganggu kehidupan sehari-hari, mencari bimbingan dari profesional kesehatan mental bisa membantu.',
                'first_limit' => 6,
                'end_limit' => 15,
                'max_score' => 40,
                'test_id' => 6
            ],
            [
                'result_name' => 'Tinggi (16 - 25)',
                'result_description' => 'Individu dengan skor dalam rentang ini kemungkinan memiliki kekhawatiran yang signifikan tentang penampilan mereka. Tingkat kecemasan ini dapat menyebabkan penghindaran banyak situasi sosial dan dapat memiliki dampak yang nyata pada kualitas hidup.',
                'result_solution' => 'Konseling atau terapi profesional, terutama terapi kognitif-perilaku (CBT), dapat sangat efektif dalam mengatasi kekhawatiran ini. Tekniknya mungkin termasuk terapi eksposur, di mana individu secara bertahap menghadapi situasi yang mereka takuti, dan restrukturisasi kognitif, yang melibatkan menantang dan mengubah kepercayaan yang tidak membantu tentang penampilan. Membangun sistem dukungan dari teman, keluarga, atau kelompok dukungan juga dapat memberikan dukungan emosional.',
                'first_limit' => 16,
                'end_limit' => 25,
                'max_score' => 40,
                'test_id' => 6
            ],
            [
                'result_name' => 'Sangat Tinggi atau Ekstrem (26 – 40)',
                'result_description' => 'Ini adalah tingkat kecemasan penampilan yang paling parah. Seringkali melibatkan preokupasi intens dengan penampilan, tekanan emosional yang signifikan, dan mungkin bersamaan dengan kondisi kesehatan mental seperti gangguan dismorfik tubuh.',
                'result_solution' => 'Dalam kasus ini, intervensi kesehatan mental profesional sangat disarankan. Ini mungkin termasuk bentuk terapi khusus seperti CBT, mungkin dikombinasikan dengan obat-obatan jika dianggap tepat oleh penyedia layanan kesehatan. Teknik yang berfokus pada peningkatan harga diri, mengurangi pemikiran obsesif tentang penampilan, dan meningkatkan keterampilan sosial dapat menjadi bagian dari pengobatan. Penting bagi individu pada level ini untuk mencari dukungan berkelanjutan dan tidak mengisolasi diri mereka sendiri.',
                'first_limit' => 26,
                'end_limit' => 40,
                'max_score' => 40,
                'test_id' => 6
            ],
            [
                'result_name' => 'Kecemasan Kesehatan Rendah (0-14)',
                'result_description' => 'menunjukkan tingkat kecemasan kesehatan yang rendah. Individu ini mungkin memiliki tingkat kekhawatiran yang normal terkait kesehatan.',
                'result_solution' => 'Pemantauan diri dan perhatian terhadap kesehatan dapat tetap dilakukan, namun tidak ada kebutuhan mendesak untuk intervensi. Fokus pada gaya hidup sehat dan perawatan diri dapat membantu menjaga kesehatan secara keseluruhan.',
                'first_limit' => 0,
                'end_limit' => 14,
                'max_score' => 42,
                'test_id' => 7
            ],
            [
                'result_name' => 'Kecemasan Kesehatan Sedang (15-28)',
                'result_description' => 'menunjukkan tingkat kecemasan kesehatan yang sedang. Individu ini mungkin mulai merasa khawatir dan cemas terkait kesehatan mereka.',
                'result_solution' => 'Konsultasi dengan dokter atau profesional kesehatan mungkin diperlukan untuk menilai kekhawatiran spesifik. Terapi kognitif perilaku (CBT) bisa membantu mengatasi kecemasan kesehatan dan mengembangkan pola pikir yang lebih positif.',
                'first_limit' => 15,
                'end_limit' => 28,
                'max_score' => 42,
                'test_id' => 7
            ],
            [
                'result_name' => 'Kecemasan Kesehatan Tinggi (29-42)',
                'result_description' => 'menunjukkan tingkat kecemasan kesehatan yang tinggi. Individu ini mungkin mengalami kecemasan yang signifikan terkait kesehatan, yang dapat memengaruhi kesejahteraan mereka secara keseluruhan.',
                'result_solution' => 'Perlu mendapatkan bantuan profesional segera. Konsultasi dengan dokter dan psikolog dapat membantu menilai dan mengatasi kecemasan kesehatan. Terapi kognitif perilaku (CBT) dan dukungan sosial mungkin diperlukan untuk membantu mengelola kekhawatiran.',
                'first_limit' => 29,
                'end_limit' => 42,
                'max_score' => 42,
                'test_id' => 7
            ],
            [
                'result_name' => 'Kecemasan Sosial Rendah – 0 atau 1',
                'result_description' => 'Individu dengan skor 0 atau 1 pada SADS mengalami tingkat kecemasan sosial yang rendah. Mereka mungkin merasa nyaman dan percaya diri dalam situasi sosial.',
                'result_solution' => 'Pemeliharaan keterlibatan sosial dan pengembangan hubungan interpersonal yang positif sangat dianjurkan. Fokus pada pengembangan keterampilan sosial dan pembangunan hubungan positif dapat membantu mempertahankan tingkat kecemasan yang rendah.',
                'first_limit' => 0,
                'end_limit' => 1,
                'max_score' => 28,
                'test_id' => 8
            ],
            [
                'result_name' => 'Kecemasan Sosial Rata-rata – 2 hingga 11',
                'result_description' => 'Skor 2-11 pada SADS menunjukkan tingkat kecemasan sosial yang rata-rata. Individu ini mungkin mengalami beberapa tingkat ketidaknyamanan atau kecemasan dalam situasi sosial tertentu.',
                'result_solution' => 'Terapi kognitif perilaku (CBT) atau pelatihan keterampilan sosial dapat membantu individu mengatasi ketidaknyamanan sosial. Berbicara dengan teman atau keluarga tentang perasaan tersebut juga dapat memberikan dukungan.',
                'first_limit' => 2,
                'end_limit' => 11,
                'max_score' => 28,
                'test_id' => 8
            ],
            [
                'result_name' => 'Kecemasan Sosial Tinggi – 12 ke atas',
                'result_description' => 'Skor 12 ke atas pada SADS menunjukkan tingkat kecemasan sosial yang tinggi. Individu ini mungkin menghindari situasi sosial dan merasakan tingkat ketidaknyamanan yang signifikan.',
                'result_solution' => 'Konsultasi dengan profesional kesehatan mental segera dianjurkan. Terapi intensif, seperti CBT khusus untuk kecemasan sosial, dapat membantu individu mengatasi rasa takut dan ketidaknyamanan dalam situasi sosial. Dukungan sosial dan partisipasi dalam kelompok dukungan juga dapat membantu dalam mengelola kecemasan sosial yang tinggi.',
                'first_limit' => 12,
                'end_limit' => 28,
                'max_score' => 28,
                'test_id' => 8
            ],


        ];
        TestResults::insert($data);
    }
}
