<?php

namespace Database\Seeders;

use App\Models\isinovel;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class isinovelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Omniscient Reader Viewpoint',
                'isinovel' => 'Bercerita tentang seorang pria bernama Kim Dokja karyawan biasa belum menikah. Sejak SMA dia selalu membaca komik berjudul Wasy of Survival. Komik itu telah di bacanya selama 10 tahun sejak dia SMA hingga dia sekarang telah bekerja. Anehnya komik itu yang telah terbit sebanyak 3149 chapter tidak ada satu pun yang membacanya. Hingga komik yang dibacanya itu akhirnya hiatus alias tamat. Saat itu dia membaca ending komik di dalam kereta ketika pulang kerja. Tiba-tiba ada kejadian yang mirip seperti plot awal cerita, dunia yang tertulis di dalam komik menjadi kenyataan. Dia menjadi kaget karena Kim Dokja sangat tahu betul itu adalah plot ceritanya. Ada monster kecil muncul di kreta memiliki ilmu sihir dan bisa meledakan kepala penumpang.Di kota kecil yang tersembunyi di antara pegunungan, hiduplah seorang seniman bernama Amelia. Dia tinggal di sebuah atap yang diubahnya menjadi studio seni kecil. Setiap hari, Amelia menghabiskan waktu berjam-jam menciptakan lukisan indah yang menceritakan kisah-kisah yang hanya ada dalam imajinasinya.

                Suatu hari, ketika Amelia sedang asyik menggambar pemandangan pegunungan yang megah, sebuah kotak misterius tiba-tiba muncul di depan pintu studionya. Kotak itu terbuat dari kayu tua dengan ukiran yang rumit. Tertulis di atasnya, "Buka hanya jika kau berani melihat ke dalam duniamu sendiri."
                
                Tidak dapat menahan rasa ingin tahunya, Amelia membuka kotak itu. Saat kotak terbuka, cahaya keemasan menerangi seluruh studio. Amelia tersentak kaget melihat bayangan dari lukisannya muncul di depannya. Dengan berdebar-debar, dia menyadari bahwa dia telah membuka pintu ke dunia dalam lukisannya.
                
                Amelia terdampar di dalam dunia imajinasinya yang penuh warna dan hidup. Karakter-karakter dari lukisannya berjalan di sekelilingnya, mengucapkan terima kasih karena telah membawa mereka ke kehidupan nyata. Awalnya, Amelia senang dapat berinteraksi dengan karya seninya, tetapi segera dia menyadari bahwa kehadiran mereka mulai merusak keseimbangan antara dunia nyata dan dunianya.
                
                Dalam usahanya untuk memperbaiki segala kerusakan yang telah dia ciptakan, Amelia bertemu dengan tokoh-tokoh yang hidup di dalam lukisannya. Mereka membantunya menyusun rencana untuk mengembalikan keharmonisan dunia-dunia tersebut. Selama perjalanan mereka, Amelia belajar tentang kekuatan kreasi dan tanggung jawab yang melekat pada setiap karya seni.
                
                Namun, kekuatan gelap yang ada di dalam lukisan juga mulai bangkit. Sebuah bayangan besar dengan mata bercahaya merah melanda dunia-dunia Amelia, mencoba menghancurkan segalanya. Dengan keberanian dan imajinasinya sebagai senjatanya, Amelia bersama karakter-karakternya berjuang melawan kekuatan gelap tersebut.
                
                Dalam pertempuran epik, Amelia menyadari bahwa untuk mengalahkan bayangan yang mencoba menghancurkan karya seninya, dia harus menerima dan memahami bagian gelap di dalam dirinya sendiri. Dengan menerima kelemahannya, Amelia mampu mengubah kekuatan gelap tersebut menjadi kekuatan yang dapat melindungi dunia-dunia yang telah dia ciptakan.
                
                Saat bayangan besar itu akhirnya menghilang, dunia-dunia Amelia kembali ke kedamaian. Namun, kali ini, karakter-karakternya tidak kembali ke lukisan. Mereka memilih untuk tinggal di dunia nyata, mengejar kehidupan yang mereka temukan di luar imajinasi. Amelia, sambil melihat mereka pergi, merasa puas karena telah belajar bahwa seni bukan hanya tentang menciptakan keindahan, tetapi juga tentang memberikan hidup pada imajinasi.
                
                Ketika Amelia kembali ke studionya, dia menutup kotak misterius itu dengan hati-hati. Meskipun petualangan itu berakhir, kini dia memiliki pemahaman yang lebih dalam tentang kekuatan imajinasi dan tanggung jawab yang melekat pada setiap seniman. Dengan itu, Amelia kembali kepada kanvasnya, siap untuk menciptakan lebih banyak cerita yang menginspirasi dan membawa kehidupan pada dunia imajinasinya.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        isinovel::truncate();
        isinovel::insert($data);
    }
}
