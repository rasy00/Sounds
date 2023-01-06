<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
Route::get('/sounds/play/{slug}', function ($slug) {
    $data = [
        [
            "cover" => "../../assets/resources/photos/programs/2.png",
            "judul" => "SisTalk",
            "summ" => "Obrolan santai buat tentang apapun untuk semua pasangan suami istri ataupun buat semua pasangan yang menuju ke pernikahan.",
            "jumlahEpisode" => "6",
            "episodes"=>[
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/1.jpg",
                    "judul" => "Berantem Tapi Tetep Langgeng?? Ini Rahasianya! | Ft. Shendy Amanda",
                    "summ" => "Welcome to SisTalk, Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang berantem, adu mulut sama suami SETIAP HARI yaitu Shendy Amanda. Tapi walaupun berantem tiap hari ya tetep langgeng?? Simak sampe selesai ya, ini rahasianya! Selamat mendengarkan.....",
                    "durasi" => "29:16",
                    "rilis" => "26 Sep 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/1.mp3",
                    "next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep1/2.jpg",
                        "judul" => "Jauh dari suami?? Gak takut jadi Layangan Putus?? | Ft. Shandy Amanda",
                        "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 5 check ;)<br/>Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang awet muda, seorang Isteri, Ibu dan Content Creator juga, Shendy Amanda. Kali ini kita akan ngobrolin kisah Bintang Tamu kita yang memang jarak jauh dengan suaminya. Gimana Podme Friends kira2 takut gak sih jauh dari suami??<br/>Selamat mendengarkan.....Saranghaeyo.....",
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep1/1.jpg",
                        "judul" => "Berantem Tapi Tetep Langgeng?? Ini Rahasianya! | Ft. Shendy Amanda",
                        "summ" => "Welcome to SisTalk, Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang berantem, adu mulut sama suami SETIAP HARI yaitu Shendy Amanda. Tapi walaupun berantem tiap hari ya tetep langgeng?? Simak sampe selesai ya, ini rahasianya! Selamat mendengarkan.....",
                    ]
                    
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/2.jpg",
                    "judul" => "Jauh dari suami?? Gak takut jadi Layangan Putus?? | Ft. Shandy Amanda",
                    "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 5 check ;)<br/>Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang awet muda, seorang Isteri, Ibu dan Content Creator juga, Shendy Amanda. Kali ini kita akan ngobrolin kisah Bintang Tamu kita yang memang jarak jauh dengan suaminya. Gimana Podme Friends kira2 takut gak sih jauh dari suami??<br/>Selamat mendengarkan.....Saranghaeyo.....",
                    "durasi" => "32:26",
                    "rilis" => "12 Sep 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/2.mp3",
                    "next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep1/3.jpg",
                        "judul" => "Nikah Modal Cinta?? Gak Cukup!! | Ft. Nina Agung Tatyana",
                        "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 4 check ;)<br/>Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang luar biasa, sosok Psikolog yang sangat menginspirasi 'Nina Agung Tatyana'. Kali ini kita akan kulik dunia Psikologi dunia pernikahan seperti apa. Karena modal cinta aja gak cukup buat suatu pernikahan. Jadi buat kamu yang mau menikah ataupun baru menikah wajib dengerin sampe selesai ya<br/>Selamat mendengarkan....., Saranghaeyo.....",
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep1/1.jpg",
                        "judul" => "Berantem Tapi Tetep Langgeng?? Ini Rahasianya! | Ft. Shendy Amanda",
                        "summ" => "Welcome to SisTalk, Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang berantem, adu mulut sama suami SETIAP HARI yaitu Shendy Amanda. Tapi walaupun berantem tiap hari ya tetep langgeng?? Simak sampe selesai ya, ini rahasianya! Selamat mendengarkan.....",
                    ]
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/3.jpg",
                    "judul" => "Nikah Modal Cinta?? Gak Cukup!! | Ft. Nina Agung Tatyana",
                    "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 4 check ;)<br/>Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang luar biasa, sosok Psikolog yang sangat menginspirasi 'Nina Agung Tatyana'. Kali ini kita akan kulik dunia Psikologi dunia pernikahan seperti apa. Karena modal cinta aja gak cukup buat suatu pernikahan. Jadi buat kamu yang mau menikah ataupun baru menikah wajib dengerin sampe selesai ya<br/>Selamat mendengarkan....., Saranghaeyo.....",
                    "durasi" => "44:52",
                    "rilis" => "31 Aug 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/3.mp3",
                    "next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep1/4.jpg",
                        "judul" => "Kalau Adopsi Anak Gimana? | Ft. Lulu Elhasbu",
                        "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 3 check ;)<br/>Kali ini kita masih sharing bareng salah satu Bintang Tamu yang luar biasa, sosok influencer, spokesperson dan entrepreneur yang sangat menginspirasi. Yuk kita kulik kak Lulu Elhasbu tentang Adopsi Anak, hal yang sensitif tapi tidak menutup kemungkinan untuk dipertimbangkan. Selamat mendengarkan, Saranghaeyo.....",
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep1/2.jpg",
                        "judul" => "Jauh dari suami?? Gak takut jadi Layangan Putus?? | Ft. Shandy Amanda",
                        "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 5 check ;)<br/>Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang awet muda, seorang Isteri, Ibu dan Content Creator juga, Shendy Amanda. Kali ini kita akan ngobrolin kisah Bintang Tamu kita yang memang jarak jauh dengan suaminya. Gimana Podme Friends kira2 takut gak sih jauh dari suami??<br/>Selamat mendengarkan.....Saranghaeyo.....",
                    ]
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/4.jpg",
                    "judul" => "Kalau Adopsi Anak Gimana? | Ft. Lulu Elhasbu",
                    "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 3 check ;)<br/>Kali ini kita masih sharing bareng salah satu Bintang Tamu yang luar biasa, sosok influencer, spokesperson dan entrepreneur yang sangat menginspirasi. Yuk kita kulik kak Lulu Elhasbu tentang Adopsi Anak, hal yang sensitif tapi tidak menutup kemungkinan untuk dipertimbangkan. Selamat mendengarkan, Saranghaeyo.....",
                    "durasi" => "46:23",
                    "rilis" => "19 Aug 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/4.mp3"
                    ,"next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep1/5.jpg",
                        "judul" => "Orang Tuaku Panutanku | Ft. Lulu Elhasbu",
                        "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 2 check ;)<br/>Kali ini kita sharing bareng salah satu Bintang Tamu yang luar biasa, sosok Influencer, Spoken Person dan Enterpreneur yang sangat menginspirasi 'Lulu Elhasbu'<br/>Kak Lulu Elhasbu dan suami salah satu pasangan suami istri yang sangat menginspirasi<br/>Dan kali ini kita akan kulik seperti apa lika liku pernikahannya dan seperti apa cara kak Lulu Elhasbu menyikapinya<br/>Dijamin bisa menginspirasi",
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep1/3.jpg",
                        "judul" => "Nikah Modal Cinta?? Gak Cukup!! | Ft. Nina Agung Tatyana",
                        "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 4 check ;)<br/>Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang luar biasa, sosok Psikolog yang sangat menginspirasi 'Nina Agung Tatyana'. Kali ini kita akan kulik dunia Psikologi dunia pernikahan seperti apa. Karena modal cinta aja gak cukup buat suatu pernikahan. Jadi buat kamu yang mau menikah ataupun baru menikah wajib dengerin sampe selesai ya<br/>Selamat mendengarkan....., Saranghaeyo.....",
                    ]
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/5.jpg",
                    "judul" => "Orang Tuaku Panutanku | Ft. Lulu Elhasbu",
                    "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 2 check ;)<br/>Kali ini kita sharing bareng salah satu Bintang Tamu yang luar biasa, sosok Influencer, Spoken Person dan Enterpreneur yang sangat menginspirasi 'Lulu Elhasbu'<br/>Kak Lulu Elhasbu dan suami salah satu pasangan suami istri yang sangat menginspirasi<br/>Dan kali ini kita akan kulik seperti apa lika liku pernikahannya dan seperti apa cara kak Lulu Elhasbu menyikapinya<br/>Dijamin bisa menginspirasi",
                    "durasi" => "29:33",
                    "rilis" => "12 Aug 2022 ",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/5.mp3"
                    ,"next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep1/6.jpg",
                        "judul" => "Istri Jebak Suami",
                        "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, yeayy Episode 1 check <br/>Episode 1 kali ini kita mulai dengan menjebak suami yang menjadi narasumber di Sistalk, semua ini tanpa persiapan suami dan suami harus siap menjawab pertanyaan-pertanyaan istri<br/>Suami yang bekerja kantoran ini harus mampu menjawab apa yang menjadi uneg-uneg istri selama ini, siap siap yaa karena ini pasti relate banget sama kamu.<br/>Selamat mendengarkan, Saranghaeyo.....",
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep1/4.jpg",
                        "judul" => "Kalau Adopsi Anak Gimana? | Ft. Lulu Elhasbu",
                        "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 3 check ;)<br/>Kali ini kita masih sharing bareng salah satu Bintang Tamu yang luar biasa, sosok influencer, spokesperson dan entrepreneur yang sangat menginspirasi. Yuk kita kulik kak Lulu Elhasbu tentang Adopsi Anak, hal yang sensitif tapi tidak menutup kemungkinan untuk dipertimbangkan. Selamat mendengarkan, Saranghaeyo.....",
                    ]
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/6.jpg",
                    "judul" => "Istri Jebak Suami",
                    "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, yeayy Episode 1 check <br/>Episode 1 kali ini kita mulai dengan menjebak suami yang menjadi narasumber di Sistalk, semua ini tanpa persiapan suami dan suami harus siap menjawab pertanyaan-pertanyaan istri<br/>Suami yang bekerja kantoran ini harus mampu menjawab apa yang menjadi uneg-uneg istri selama ini, siap siap yaa karena ini pasti relate banget sama kamu.<br/>Selamat mendengarkan, Saranghaeyo.....",
                    "durasi" => "30:11",
                    "rilis" => "04 Aug 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/6.mp3"
                    ,"next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep1/6.jpg",
                        "judul" => "Istri Jebak Suami",
                        "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, yeayy Episode 1 check <br/>Episode 1 kali ini kita mulai dengan menjebak suami yang menjadi narasumber di Sistalk, semua ini tanpa persiapan suami dan suami harus siap menjawab pertanyaan-pertanyaan istri<br/>Suami yang bekerja kantoran ini harus mampu menjawab apa yang menjadi uneg-uneg istri selama ini, siap siap yaa karena ini pasti relate banget sama kamu.<br/>Selamat mendengarkan, Saranghaeyo.....",
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep1/5.jpg",
                        "judul" => "Orang Tuaku Panutanku | Ft. Lulu Elhasbu",
                        "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 2 check ;)<br/>Kali ini kita sharing bareng salah satu Bintang Tamu yang luar biasa, sosok Influencer, Spoken Person dan Enterpreneur yang sangat menginspirasi 'Lulu Elhasbu'<br/>Kak Lulu Elhasbu dan suami salah satu pasangan suami istri yang sangat menginspirasi<br/>Dan kali ini kita akan kulik seperti apa lika liku pernikahannya dan seperti apa cara kak Lulu Elhasbu menyikapinya<br/>Dijamin bisa menginspirasi",
                    ]
                ],
                
            ]
        ],
        [
            "cover" => "../../assets/resources/photos/programs/1.jpg",
            "judul" => "Ngobrol Asyik",
            "summ" => "Obrolan seru, santai dan asyik antara anchor berita Widya Saputra bersama tamu-tamunya yang sudah pasti keren dan tersohor.",
            "jumlahEpisode" => "18",
            "episodes"=>[
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/1.jpg",
                    "judul" => "Evan Loss Full Senyum",
                    "summ" => "Siapa yang pernah dengerin lagu Full Senyum Sayang? Evan Loss merupakan pencipta dan penyanyi lagu 'Full Senyum Sayang' yang kini viral di TikTok hingga reels Instagram. Seperti apa sosok Evan Loss dan perjalanan kariernya?",
                    "durasi" => "27:44",
                    "rilis" => "09 Sep 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/1.mp3",
                    "next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep2/2.jpg",
                        "judul" => "Merdeka Berekspresi Lewat Fashion | Ft. Okky Asokawati", 
                        "summ" => 'Jelang peringatan 77 tahun kemerdekaan Indonesia, apakah kita juga telah merdeka dalam hal berekspresi? Ngobras Spesial kali ini bakalan ngobrol seputar "Merdeka Berekespresi Lewat Fashion" bareng Okky Asokawati.',
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep2/1.jpg",
                        "judul" => "Evan Loss Full Senyum",
                        "summ" => "Siapa yang pernah dengerin lagu Full Senyum Sayang? Evan Loss merupakan pencipta dan penyanyi lagu 'Full Senyum Sayang' yang kini viral di TikTok hingga reels Instagram. Seperti apa sosok Evan Loss dan perjalanan kariernya?",
                    ]
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/2.jpg",
                    "judul" => "Merdeka Berekspresi Lewat Fashion | Ft. Okky Asokawati",
                    "summ" => 'Jelang peringatan 77 tahun kemerdekaan Indonesia, apakah kita juga telah merdeka dalam hal berekspresi? Ngobras Spesial kali ini bakalan ngobrol seputar "Merdeka Berekespresi Lewat Fashion" bareng Okky Asokawati.',
                    "durasi" => "24:15",
                    "rilis" => "15 Aug 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/2.mp3",
                    "next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep2/3.jpg",
                        "judul" => "Behind Story of Jessica Mila",
                        "summ" => 'Ngobras Spesial kedatangan aktris cantik Jessica Mila @jscmila. Film barunya bergenre horor "The Doll 3" baru saja tayang. Seperti apa cerita di balik filmnya ini dan fakta-fakta menarik tentang Jessica Mila?',
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep2/1.jpg",
                        "judul" => "Evan Loss Full Senyum",
                        "summ" => "Siapa yang pernah dengerin lagu Full Senyum Sayang? Evan Loss merupakan pencipta dan penyanyi lagu 'Full Senyum Sayang' yang kini viral di TikTok hingga reels Instagram. Seperti apa sosok Evan Loss dan perjalanan kariernya?",
                    ]
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/3.jpg",
                    "judul" => "Behind Story of Jessica Mila",
                    "summ" => 'Ngobras Spesial kedatangan aktris cantik Jessica Mila @jscmila. Film barunya bergenre horor "The Doll 3" baru saja tayang. Seperti apa cerita di balik filmnya ini dan fakta-fakta menarik tentang Jessica Mila?',
                    "durasi" => "18:04",
                    "rilis" => "31 Mei 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/3.mp3",
                    "next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep2/4.jpg",
                        "judul" => "Semangat Berkarya Dudy Oris",
                        "summ" => 'Masih ingat dengan Dudy Oris? Mantan vokalis Yovie n Nuno yang kini bersolo karier.</br>Di bulan Ramadan ini tak menghalangi Dudy untuk tetap berkarya. Seperti apa kegiatan Dudy Oris di bulan puasa ini dan karya-karya apa yang sudah tercipta?',
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep2/2.jpg",
                        "judul" => "Merdeka Berekspresi Lewat Fashion | Ft. Okky Asokawati",
                        "summ" => 'Jelang peringatan 77 tahun kemerdekaan Indonesia, apakah kita juga telah merdeka dalam hal berekspresi? Ngobras Spesial kali ini bakalan ngobrol seputar "Merdeka Berekespresi Lewat Fashion" bareng Okky Asokawati.',
                    ]
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/4.jpg",
                    "judul" => "Semangat Berkarya Dudy Oris",
                    "summ" => 'Masih ingat dengan Dudy Oris? Mantan vokalis Yovie n Nuno yang kini bersolo karier.</br>Di bulan Ramadan ini tak menghalangi Dudy untuk tetap berkarya. Seperti apa kegiatan Dudy Oris di bulan puasa ini dan karya-karya apa yang sudah tercipta?',
                    "durasi" => "22:25",
                    "rilis" => "20 Mei 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/4.mp3",
                    "next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep2/5.jpg",
                        "judul" => "Risman Bintang MotoGP Mandalika",
                        "summ" => 'Masih ingat dengan nama Risman saat perhelatan MotoGP Mandalika? Salah satu staf hotel di Mandalika, Lombok yang disebut namanya oleh pembalap Miguel Oliveira.<br/>Seperti apa sosoknya dan bagaimana cerita di balik MotoGP Mandalika?',
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep2/3.jpg",
                        "judul" => "Behind Story of Jessica Mila",
                        "summ" => 'Ngobras Spesial kedatangan aktris cantik Jessica Mila @jscmila. Film barunya bergenre horor "The Doll 3" baru saja tayang. Seperti apa cerita di balik filmnya ini dan fakta-fakta menarik tentang Jessica Mila?',
                    ]
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/5.jpg",
                    "judul" => "Risman Bintang MotoGP Mandalika",
                    "summ" => 'Masih ingat dengan nama Risman saat perhelatan MotoGP Mandalika? Salah satu staf hotel di Mandalika, Lombok yang disebut namanya oleh pembalap Miguel Oliveira.<br/>Seperti apa sosoknya dan bagaimana cerita di balik MotoGP Mandalika?',
                    "durasi" => "27:06",
                    "rilis" => "31 Mar 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/5.mp3",
                    "next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep2/6.jpg",
                        "judul" => "Model Indonesia di Paris Fashion Week | Ft. Rizal Rama",
                        "summ" => 'Belakangan ini, acara Paris Fashion Week 2022 ramai dibicarakan. Di tengah polemik tersebut, nama model Rizal Rama mencuat. Bagi kalian yang tidak tahu, ia adalah model asal Surabaya, Jawa Timur yang berhasil melenggang di Milan hingga ajang bergengsi di Paris itu.',
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep2/4.jpg",
                        "judul" => "Semangat Berkarya Dudy Oris",
                        "summ" => 'Masih ingat dengan Dudy Oris? Mantan vokalis Yovie n Nuno yang kini bersolo karier.</br>Di bulan Ramadan ini tak menghalangi Dudy untuk tetap berkarya. Seperti apa kegiatan Dudy Oris di bulan puasa ini dan karya-karya apa yang sudah tercipta?',
                    ]
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/6.jpg",
                    "judul" => "Model Indonesia di Paris Fashion Week | Ft. Rizal Rama",
                    "summ" => 'Belakangan ini, acara Paris Fashion Week 2022 ramai dibicarakan. Di tengah polemik tersebut, nama model Rizal Rama mencuat. Bagi kalian yang tidak tahu, ia adalah model asal Surabaya, Jawa Timur yang berhasil melenggang di Milan hingga ajang bergengsi di Paris itu.',
                    "durasi" => "34:20",
                    "rilis" => "25 Mar 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/6.mp3",
                    "next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep2/7.jpg",
                        "judul" => "Sarah Azhari It's My Life",
                        "summ" => 'Masih ingat dengan Sarah Azhari? Salah satu aktris yang namanya sempat bersinar di tahun 90-an. Sejumlah film layar lebar dan sinetron pernah ia bintangi. Selain akting, Sarah juga berkecimpung di dunia modelling dan juga tarik suara.<br/>Sudah lama tak terdengar kabarnya, rupanya Sarah kini menetap di Amerika. Seperti apa kegiatannya saat ini?',
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep2/5.jpg",
                        "judul" => "Risman Bintang MotoGP Mandalika",
                        "summ" => 'Masih ingat dengan nama Risman saat perhelatan MotoGP Mandalika? Salah satu staf hotel di Mandalika, Lombok yang disebut namanya oleh pembalap Miguel Oliveira.<br/>Seperti apa sosoknya dan bagaimana cerita di balik MotoGP Mandalika?',
                    ]
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/7.jpg",
                    "judul" => "Sarah Azhari It's My Life",
                    "summ" => 'Masih ingat dengan Sarah Azhari? Salah satu aktris yang namanya sempat bersinar di tahun 90-an. Sejumlah film layar lebar dan sinetron pernah ia bintangi. Selain akting, Sarah juga berkecimpung di dunia modelling dan juga tarik suara.<br/>Sudah lama tak terdengar kabarnya, rupanya Sarah kini menetap di Amerika. Seperti apa kegiatannya saat ini?',
                    "durasi" => "38:33",
                    "rilis" => "14 Mar 2022 ",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/7.mp3",
                    "next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep2/8.jpg",
                        "judul" => "New Chapter Geisha",
                        "summ" => 'Membuka lembaran baru dalam bermusik, grup band Geisha mengusung konsep dan warna yang berbeda dari sebelumnya. Citra itu dapat dirasakan dari lagu terbaru mereka yang berjudul Impas.',
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep2/6.jpg",
                        "judul" => "Model Indonesia di Paris Fashion Week | Ft. Rizal Rama",
                        "summ" => 'Belakangan ini, acara Paris Fashion Week 2022 ramai dibicarakan. Di tengah polemik tersebut, nama model Rizal Rama mencuat. Bagi kalian yang tidak tahu, ia adalah model asal Surabaya, Jawa Timur yang berhasil melenggang di Milan hingga ajang bergengsi di Paris itu.',
                    ]
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/8.jpg",
                    "judul" => "New Chapter Geisha",
                    "summ" => 'Membuka lembaran baru dalam bermusik, grup band Geisha mengusung konsep dan warna yang berbeda dari sebelumnya. Citra itu dapat dirasakan dari lagu terbaru mereka yang berjudul Impas.',
                    "durasi" => "39:39",
                    "rilis" => "01 Mar 2022",
                    "sound" => "../../../assets/resources/photos/programs/ep1/sounds/8.mp3",
                    "next" => [
                        "cover" => "../../../assets/resources/photos/programs/ep2/8.jpg",
                        "judul" => "New Chapter Geisha",
                        "summ" => 'Membuka lembaran baru dalam bermusik, grup band Geisha mengusung konsep dan warna yang berbeda dari sebelumnya. Citra itu dapat dirasakan dari lagu terbaru mereka yang berjudul Impas.',
                    ],
                    "prev" =>[
                        "cover" => "../../../assets/resources/photos/programs/ep2/7.jpg",
                        "judul" => "Sarah Azhari It's My Life",
                        "summ" => 'Masih ingat dengan Sarah Azhari? Salah satu aktris yang namanya sempat bersinar di tahun 90-an. Sejumlah film layar lebar dan sinetron pernah ia bintangi. Selain akting, Sarah juga berkecimpung di dunia modelling dan juga tarik suara.<br/>Sudah lama tak terdengar kabarnya, rupanya Sarah kini menetap di Amerika. Seperti apa kegiatannya saat ini?',
                    ]
                ],
                
            ]
        ],
        [
            "cover" => "../../assets/resources/photos/programs/3.jpg",
            "judul" => "The Editor",
            "summ" => "Informatif, tajam dan gamblang. Inilah The Editors, sebuah opini editorial dari meja redaksi Media Indonesia mengenai berita yang sedang hangat dan menjadi perhatian masyarakat.",
            "jumlahEpisode" => "24",
            "episodes"=>[
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/1.jpg",
                    "judul" => "Putri Candrawathi Memang Istimewa",
                    "summ" => "Terlepas dari pengakuan Ferdy Sambo yang mengaku bertanggung jawab atas peristiwa tersebut, dan juga aksinya yang menyeret gerbong puluhan anggota Polri mulai dari jenderal, perwira, dan bintara harus menelan pil pahit terkena sanksi, ada hal yang tak bisa dikesampingkan yaitu bagaimana perlakuan berbeda dari Polri terhadap tersangka Putri Candrawathi.",
                    "durasi" => "10:45",
                    "rilis" => "08 Sep 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/2.jpg",
                    "judul" => "Ganja Bisa Dilegalkan",
                    "summ" => 'Kegunaan tumbuhan ganja atau cannabis sativa, akhir-akhir ini, menjadi perbincangan hangat. Nah, belum lama ini, ada viral foto seorang ibu, Santi Warastuti, dengan anaknya yang mengidap lumpuh otak, atau cerebal palsy yang menuntut legalisasi ganja untuk medis. Tolong, anakku butuh ganja medis, begitu katanya. Sontak, harapan ibu itu menggugah rasa kemanusiaan, bagi siapa saja yang menyaksikannya. Yuk dengarkan pandangan editorial Media Indonesia di The Editors kali ini bersama Mas Soelistijono.',
                    "durasi" => "13:04",
                    "rilis" => "03 Aug 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/3.jpg",
                    "judul" => "Sambo, Ada Apa Denganmu?",
                    "summ" => 'Brigadir Joshua yang harus meregang nyawa akibat baku tembak dengan Bharada E di Rumah Dinas Kadiv Propam Polri Irjen Ferdy Sambo pada 8 Juli 2022. Uniknya, publik baru mengetahui adanya peristiwa tersebut pada Senin 11 Juli 2022. Baiklah suka tidak suka, mau tidak mau, kita harus mempercayai berbagai dalih dari kepolisian.<br/>Persoalannya sejumlah dalih yang dilakukan ternyata secara perlahan mulai membuat blunder, bahkan praktisi hukum Sandi Situngkir menilai perbedaan pernyataan kepolisian, justru menjadi sumber masalah dalam kasus tersebut.<br/>Terlepas dari kasus ini adanya pelecehan seksual atau tidak ada pelecehan seksual, nyawa seorang bhayangkara negara sudah hilang. Nyawa seorang Bhayangkara ditembak di rumah polisi, oleh polisi…',
                    "durasi" => "14:20",
                    "rilis" => "25 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/4.png",
                    "judul" => "Kampanye Koq Modal Migor Subsidi?",
                    "summ" => 'Ketua Umum Partai Amanat Nasional (PAN) Zulkifli Hasan (Zulhas) baru dilantik menjadi Menteri Perdagangan oleh Presiden Joko Widodo pada 15 Juni 2022. Zulhas mendapatkan tugas khusus untuk menangani kisruh minyak goreng yang telah berlangsung. Belakangan, nama Zulhas ramai diperbincangkan lantaran kegiatan PAN bagi-bagi minyak goreng bersubsidi sembari mengampanyekan anaknya untuk Pemilu mendatang. Bagaimana pandangan editorial Media Indonesia? Yuk dengarkan The Editors kali ini bersama Bang Henri Siagian.',
                    "durasi" => "16:07",
                    "rilis" => "22 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/5.jpg",
                    "judul" => "Pilpres 2024: Prabowo versus Newcomers",
                    "summ" => 'Dari sejumlah nama yang muncul dalam berbagai survei Capres untuk Pilpres 2024, nama Ketua Umum Partai Gerindra Prabowo Subianto masih bersinar. Jadi atau tidaknya Prabowo untuk nyapres, akan terjawab pada Rakernas Gerindra Agustus 2022 mendatang. Nah, seperti apa pandangan meja editorial Media Indonesia? Langsung aja yuk dengarkan The Editors kali ini bersama Mas Eko Suprihatno.',
                    "durasi" => "11:53",
                    "rilis" => "04 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/6.jpg",
                    "judul" => "PDIP Usung Puan Maharani, Kenapa tidak? ",
                    "summ" => 'Yang tak kalah menarik dalam politik menuju Pilpres 2024 adalah perebutan untuk mendapat golden ticket yang kini sudah dimiliki oleh PDI Perjuangan. Bukan rahasia lagi, tiket yang dipegang oleh Ketua Umum PDIP Megawati Soekarnoputri kini tengah diperebutkan oleh Gubernur Jawa Tengah Ganjar Pranowo dan Ketua DPR Puan Maharani. Yuk dengarkan pandangan meja redaksi Media Indonesia melalui The Editors kali ini bersama Soelistijono.',
                    "durasi" => "10:54",
                    "rilis" => "22 Jun 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/7.jpg",
                    "judul" => "Langkah Politik Partai NasDem",
                    "summ" => 'Rapat Kerja Nasional Partai NasDem, 15 juni sampai 17 Juni 2022, seperti memberi label kepada publik bahwa ajang ini menjadikan NasDem sebagai partai politik pertama di negeri ini yang tak malu-malu untuk mencari putra terbaik bangsa sebagai suksesor Joko Widodo. Yuk dengarkan pandangan meja redaksi Media Indonesia melalui The Editors kali ini bersama Eko Suprihatno.',
                    "durasi" => "12:01",
                    "rilis" => "22 Jun 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/8.jpg",
                    "judul" => "Sinyal Jokowi untuk Ganjar Pranowo?",
                    "summ" => 'Presiden Joko Widodo menghangatkan suasana jagat politik Tanah Air. Kedatangannya ke Rapat Kerja Nasional atau Rakernas V Projo atau Pro-Jokowi di Magelang, Jawa Tengah Sabtu 21 Mei 2022, disebut sebagai bentuk dukungan kepada salah satu kandidat suksesornya.',
                    "durasi" => "10:04",
                    "rilis" => "09 Jun 2022"
                ],
                
            ]
        ],
        [
            "cover" => "../../assets/resources/photos/programs/4.jpg",
            "judul" => "Eagle Forum",
            "summ" => "Eagle Institute Indonesia, ingin menyerap aspirasi publik dan berkontribusi pada perubahan yang terjadi pada saat ini dengan melibatkan berbagai stakeholder dari ranah seni kebudayaan, sosial, pendidikan, kebijakan, ekonomi, hukum, teknologi, maupun sains, untuk terlibat dalam pembahasan isu-isu populis yang muncul dan berkembang dewasa ini serta mencarikan solusi dari permasalahan secara bersama melalui Eagle Forum.",
            "jumlahEpisode" => "6",
            "episodes"=>[
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/1.jpg",
                    "judul" => "Budaya Digital: Menilik Budaya di Dunia Maya",
                    "summ" => "Saat internet mengaburkan batas-batas negara, identitas dan budaya bangsa menghadapi tantangan yang besar. Masyarakat Indonesia dihadapkan pada berbagai bentuk budaya yang tersaji dalam konten-konten di dunia maya.<br/>Oleh sebab itu penggunaan teknologi dan ruang digital yang kini menjadi kebiasaan di masyarakat, tidak hanya membutuhkan kecakapan tetapi juga perlu dibekali dengan literasi yang cukup.",
                    "durasi" => "93:47",
                    "rilis" => "06 Sep 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/2.jpg",
                    "judul" => "Hacker dan Problema Dunia Maya",
                    "summ" => 'Halo, Teman Eagle.<br/>Hari ini hampir seluruh masyarakat Indonesia menggunakan internet untuk melakukan berbagai aktivitas dalam kehidupan sehari-hari. Mulai dari belanja, bersosialisasi, belajar, bertransaksi hingga menyimpan catatan dan data lainnya. Sayangnya tidak semua masyarakat Indonesia memahami bahaya-bahaya yang ada di ruang siber terkait keamanan data dan privasi yang mereka simpan. Lahirnya hacker juga menjadi dilema tersendiri dalam perkembangan Era Digital seperti saat ini.',
                    "durasi" => "77:26",
                    "rilis" => "29 Aug 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/3.jpg",
                    "judul" => "Ruang Tanpa Batas Journalisme Netizen",
                    "summ" => 'Tahukah Teman Eagle? Berdasarkan data riset dari Microsoft, Indonesia dikatakan sebagai negara dengan tingkat kesopanan rendah dalam interaksi di ruang siber/internet. Kok Bisa?<br><br/>Internet menciptakan ruang tanpa batas yang memberikan peluang bagi tiap individu, untuk lebih aktif dan terlibat secara langsung dalam kehidupan individu lainnya. Tidak hanya menjadi konsumen tetapi juga sebagai produsen informasi. Hadirnya berbagai platform juga mengaburkan pandangan masyarakat terhadap media dan jurnalisme. Pada akhirnya fenomena "Citizen Journalism" makin marak dan mengaburkan validitas informasi itu sendiri. Salah satunya persebaran "hoax" yang menyesatkan dan berakibat fatal, seperti yang terjadi di Indonesia.',
                    "durasi" => "76:51",
                    "rilis" => "05 Aug 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/4.png",
                    "judul" => "Gambar Gerak dan Imajinasi di Ruang Siber",
                    "summ" => 'Berselancar di dunia siber atau identik dengan sebutan “internet” di tengah masyarakat, merupakan hal yang sangat lumrah. Sayangnya kemampuan orang-orang dalam mengakses internet sebagian besar hanya berfokus pada media sosial saja. KOMINFO melalui Siberkreasi, mendorong peningkatan kemampuan masyarakat untuk lebih memahami ruang siber. Mengingat kecepatan perkembangan dunia digital dan ketatnya persaingan, perlu disambut dengan persiapan sumber daya manusia.<br/><br/>Seperti apa kecakapan digital yang harus dipahami dan dimiliki oleh masyarakat dan bagaimana Implementasinya. Eagle menghadirkan langsung @oktorairahadi yang akan mengajak kita memahami ruang siber dan lebih cakap digital, bersama dengan Dermawan Syamsuddin dan @pedro_oyong yang akan berbagi pengalaman dalam pemanfaatan ruang siber dan mengasah digital skill. Jangan sampai ketinggalan informasi yang penting untuk bekal Eagle Awards Documentary Competition ini!',
                    "durasi" => "82:04",
                    "rilis" => "18 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/5.png",
                    "judul" => "Perkembangan Film Indonesia Menuju Dunia",
                    "summ" => 'Film yang kita tonton di bioskop maupun berbagai platform streaming online tentu saja tidak lahir begitu saja. Sebuah film yang menarik selalu melewati proses kreatif yang panjang. Mulai dari munculnya ide, pembentukan cerita, penulisan skenario hingga proses-proses lain yang memerlukan diskusi. Kali ini Kamila Andini selaku sutradara film "Yuni" dan Prima Rusdi selaku penulis skenario akan berbagi cerita mengenai proses pembuatan film tersebut.<br/><br/>Keduanya juga akan berbagi tips yang bisa kita terapkan dalam pembuatan sebuah film. Kapan lagi bisa mendengar langsung suka duka proses pembuatan film dari kedua perempuan yang filmnya telah meraih banyak penghargaan baik di tingkat Nasional maupun Internasional. Yuk, simak diskusinya di Eagle Forum: Perkembangan Film Indonesia menuju Dunia.',
                    "durasi" => "89:58",
                    "rilis" => "09 Feb 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/6.jpg",
                    "judul" => "Film dan Radikalisme: Propaganda Vs Propaganda",
                    "summ" => 'Konstitusi Indonesia tengah menghadapi ancaman serius dari penyelenggara gerakan-gerakan terorisme yang bertentangan dengan landasan ideologi dan konstitusi republik Indonesia.<br/>Dalam Eagle Forum episode ini, Eagle Institute Indonesia akan duduk bersama dengan Brigjen R Ahmad Nur Wahid, selaku Direktur Pencegahan BNPT, dan Daniel Rudi Haryanto, Head of Content Development Eagle Institute Indonesia dan filmmaker Penjara dan Nirwana, untuk membahas bagaimana peran pemerintah dan masyarakat dalam melakukan kontra propaganda terhadap konten konten terorisme di sekitar kita yang menyasar pada target generasi baru Indonesia.',
                    "durasi" => "51:12",
                    "rilis" => "12 Nov 2021"
                ],        
            ]
        ],
        [
            "cover" => "../../assets/resources/photos/programs/5.png",
            "judul" => "Mg Radio Network",
            "summ" => "Berkomitmen dalam terus memberikan inspirasi dan membuka wawasan seluruh lapisan masyarakat, MG Radio Network lahir sebagai pionir radio yang membawa nafas TV berita nasional pertama di Indonesia dalam bentuk audio dengan pengemasan konten news yang lebih light dan friendly.",
            "jumlahEpisode" => "12",
            "episodes"=>[
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/1.jpg",
                    "judul" => "Parpol 2024 Semakin Banyak?",
                    "summ" => "Partai politik yang telah terdaftar sebagai calon peserta pemilu serentak 2024 telah mengikuti verifikasi administrasi yang digelar sejak 2 Agustus hingga 9 Oktober 2022.<br/><br/>Dalam SK yang ditandatangani Ketua KPU RI Hasyim Asyari pada bab II yang membahas soal rincian program dan jadwal kegiatan disebutkan di tabel 2 point 1 nomor 6, bahwa pengumuman hasil verifikasi administrasi dijadwalkan pada Jumat, 14 Oktober 2022.<br/><br/>Dalam tabel yang sama di nomor 5 huruf G, KPU RI juga bertugas menyampaikan hasil rekapitulasi verifikasi administrasi kepada parpol dan Badan Pengawas Pemilu (Bawaslu) di hari yang sama.",
                    "durasi" => "24:45",
                    "rilis" => "17 Okt 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/2.jpg",
                    "judul" => "Penurunan Harga Tiket Sebesar 15% | Ft. Djoko Setijowarno",
                    "summ" => 'Pemerintah dalam hal ini Kementerian Perhubungan menaikkan harga tiket pesawat, namun pemerintah juga menyarankan kepada maskapai terkait penurunan harga tiket sebesar 15% jika maskapai mau menurunkan harga tiket pada saat jam-jam sepi. Namun pemerintah menangguhkan kembali per hari ini kenaikan tarif ojek online. Apakah ini menjadi kabar gembira bagi pengguna? Mengingat pemerintah belum menentukan kapan waktu yang tepat untuk menaikkannya',
                    "durasi" => "24:48",
                    "rilis" => "01 Sep 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/3.jpg",
                    "judul" => "Menanti Pengumuman The Fed | Ft. Josua Pardede",
                    "summ" => 'Dunia kini sedang dilanda resesi ekonomi. Disebagian negara bahkan sudah mengalami kebangkrutan. Ditengah situasi ekonomi global yang tidak menentu Amerika rencananya akan menaikkan suku bunga the fed, apakah dengan kenaikan nanti dapat merubah ekonomi global? atau Amerika ingin menunjukkan kalau mereka masih dapat bertahan?',
                    "durasi" => "14:44",
                    "rilis" => "03 Aug 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/4.jpg",
                    "judul" => "Saat NIK Dijadikan NPWP | Ft. Inge Diana Rismawanti",
                    "summ" => 'Kebijakan baru memadankan Nomor Induk Kependudukan (NIK) dengan Nomor Pokok Wajib Pajak (NPWP) sudah resmi 14 Juli 2022 lalu. Apakah ini mempermudah masyarakat, atau justru menyulitkan? Dan, apa sih plus minusnya? Yuk dengarkan obrolan Mercy Widjaja bersama Kepala Subdit Penyuluhan Pajak Direktorat P2HUMAS DJP Inge Diana Rismawanti.',
                    "durasi" => "11:45",    
                    "rilis" => "22 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/5.jpg",
                    "judul" => "Menyoal Penyelewengan Dana ACT",
                    "summ" => 'Pihak ACT akhirnya buka suara, pihaknya mengaku mereka mengambil 13,7% dari donasi yang terkumpul. Sedangkan Peraturan Pemerintah No.29 tahun 1980 tentang Pelaksanaan Pengumpulan Sumbangan, pembiayaan usaha pengumpulan sumbagan maksimal bisa diambil sebesar 10% dari donasi. Dan benarkah lembaga ini terindikasi pembiayaan terorisme, langsung Dari Meja Redaksi akan membahas langsung bersama narasumber istimewa yaitu Iswahyudi Rachmanto, Jurnalis Media Group / Eksekutif Produser MG Radio, dan Ridlwan Habib, Direktur The Indonesia Intelligence Institute  ',
                    "durasi" => "27:07",
                    "rilis" => "11 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/6.jpg",
                    "judul" => "Setelah Jokowi Bertemu Zelensky dan Putin, What Next?",
                    "summ" => 'Dalam safari perdamaian Rusia-Ukraina, Presiden Joko Widodo disambut dengan baik oleh Presiden Zelensky dan Presiden Putin. Sederet poin penting dalam pertemuan-pertemuannya sudah disampaikan ke publik. Lantas, apa langkah selanjutnya yang harus diambil Indonesia? Langsung saja kita dengarkan "Dari Meja Redaksi" MG Radio bersama Reno serta dua narasumbernya, Leonard Samosir, Jurnalis Senior Media, dan Fadra, Kaprodi Hubungan Internasional, Universitas Prof. Dr. Moestopo (Beragama).',
                    "durasi" => "28:34",
                    "rilis" => "04 Jul 2022"
                ],        
            ]
        ],
        
    ];

    $result = []; 
    $program = "";
    $episodes = [];

    foreach ($data as $item) {
        foreach ($item["episodes"] as $value) {
            if(Str::slug($value["judul"]) == $slug){
                $result = $value;
                break;
            }
        }

        if(sizeof($result) !=0){
            $program = $item["judul"];
            $episodes = $item["episodes"];
            break;
        }
    }

    if(sizeof($result) == 0){
        return view("errors.404");
    }else{
        return view('sub.detail' , [
                                "type"=>"Detail"
                                ,"id"=>"default"
                                ,"data" => $result,
                                "program" => $program,
                                "episodes"=> $episodes
                            ]);
    }
    
});

Route::get("/sounds",function(){
    // dump data
    $data = [
        "categories"=>[
            [
                "cover" => "../assets/resources/photos/categories/1.jpg",
                "data" => "Hot Pod"
            ],
            [
                "cover" => "../assets/resources/photos/categories/2.jpg",
                "data" => "Audio Drama"
            ],
            [
                "cover" => "../assets/resources/photos/categories/3.jpg",
                "data" => "Seni & Hiburan"
            ],
            [
                "cover" => "../assets/resources/photos/categories/4.jpg",
                "data" => "Olahraga"
            ],
            [
                "cover" => "../assets/resources/photos/categories/5.jpg",
                "data" => "Komedi"
            ],
            [
                "cover" => "../assets/resources/photos/categories/6.jpg",
                "data" => "Sosial & Budaya"
            ],
            [
                "cover" => "../assets/resources/photos/categories/7.jpg",
                "data" => "Berita & Politik"
            ],
            [
                "cover" => "../assets/resources/photos/categories/8.jpg",
                "data" => "Musik"
            ],
            [
                "cover" => "../assets/resources/photos/categories/9.jpg",
                "data" => "Bisnis & Teknologi"
            ],
            [
                "cover" => "../assets/resources/photos/categories/10.jpg",
                "data" => "Keluarga & Anak"
            ],
            
        ],
        "programs" =>[
            [
                "cover" => "../assets/resources/photos/programs/2.png",
                "judul" => "SisTalk",
                "summ" => "Obrolan santai buat tentang apapun untuk semua pasangan suami istri ataupun buat semua pasangan yang menuju ke pernikahan.",
                "episodes" => "6"
            ],
            [
                "cover" => "../assets/resources/photos/programs/1.jpg",
                "judul" => "Ngobrol Asyik",
                "summ" => "Obrolan seru, santai dan asyik antara anchor berita Widya Saputra bersama tamu-tamunya yang sudah pasti keren dan tersohor.",
                "episodes" => "18"
            ],
            [
                "cover" => "../assets/resources/photos/programs/3.jpg",
                "judul" => "The Editor",
                "summ" => "Informatif, tajam dan gamblang. Inilah The Editors, sebuah opini editorial dari meja redaksi Media Indonesia mengenai berita yang sedang hangat dan menjadi perhatian masyarakat.",
                "episodes" => "24"
            ],
            [
                "cover" => "../assets/resources/photos/programs/4.jpg",
                "judul" => "Eagle Forum",
                "summ" => "Eagle Institute Indonesia, ingin menyerap aspirasi publik dan berkontribusi pada perubahan yang terjadi pada saat ini dengan melibatkan berbagai stakeholder dari ranah seni kebudayaan, sosial, pendidikan, kebijakan, ekonomi, hukum, teknologi, maupun sains, untuk terlibat dalam pembahasan isu-isu populis yang muncul dan berkembang dewasa ini serta mencarikan solusi dari permasalahan secara bersama melalui Eagle Forum.",
                "episodes" => "6"
            ],
            [
                "cover" => "../assets/resources/photos/programs/5.png",
                "judul" => "Mg Radio Network",
                "summ" => "Berkomitmen dalam terus memberikan inspirasi dan membuka wawasan seluruh lapisan masyarakat, MG Radio Network lahir sebagai pionir radio yang membawa nafas TV berita nasional pertama di Indonesia dalam bentuk audio dengan pengemasan konten news yang lebih light dan friendly.",
                "episodes" => "12"
            ],
            [
                "cover" => "../assets/resources/photos/programs/6.jpg",
                "judul" => "MoMaCast",
                "summ" => "Emak-emak cuma bisa ngegosip? Eits, jangan salah! Komunitas Moms yang satu ini hobinya ngerumpi berfaedah lho. Ngobrolin berbagai hal yang nyeleneh, tapi tetap edukatif dan inspiratif.<br/>Penasaran gimana jadinya kalau para Moms hebat dari MoM Academy & Mothers on Mission ngumpul dan ngobrol? Yuk ikuti keseruannya di MoMACast, hanya di PodMe!",
                "episodes" => "28"
            ],
            [
                "cover" => "../assets/resources/photos/programs/7.jpg",
                "judul" => "Mr. Yus",
                "summ" => "Program podcast ini menyajikan cerita horor non-fiksi yang diangkat dari pengalaman-pengalaman pribadi. Dipandu oleh Mr. Yus, para tamu berbagi kisah mistis paling mencekam yang pernah dialaminya.",
                "episodes" => "30"
            ],
            [
                "cover" => "../assets/resources/photos/programs/8.jpg",
                "judul" => "Me vs Science",
                "summ" => "Me vs Science, kolaborasi ciamik Podme.id dengan Lembaga Ilmu Pengetahuan Indonesia. Di sini Ana Chusdarmawan akan berhadapan dengan para ilmuwan di berbagai bidang ilmu pengetahuan. Hasilnya, obrolan seru, santai dan pastinya padat ilmu. Pas bagi para pecinta sains.",
                "episodes" => "29"
            ],
            [
                "cover" => "../assets/resources/photos/programs/9.jpg",
                "judul" => "Sepik Hukum",
                "summ" => "Membahas hukum dan seputarnya dengan santai, mudah dimengerti dan enggak pake ribet, bareng Glenn Wijaya.",
                "episodes" => "22"
            ],
            [
                "cover" => "../assets/resources/photos/programs/10.jpg",
                "judul" => "Militan",
                "summ" => "Kenalan dulu yuk sama Mimi & Intan yang akan nemenin hari-harimu lewat Podcast Millitan. Di sini mereka akan ngobrol dan cerita tentang banyak hal, terutama seputar perempuan.",
                "episodes" => "77"
            ],
        ]
            ];

    return view("sub.welcome",[
                                "type"=>"Home"
                                ,"id"=>"default"
                                ,"data"=>$data
                            ]);
});
Route::get("/sounds/ ",function(){
    return redirect("/sounds");
});

Route::get("/sounds/program/{slug}",function($slug){
    $data = [
        [
            "cover" => "../../assets/resources/photos/programs/2.png",
            "judul" => "SisTalk",
            "summ" => "Obrolan santai buat tentang apapun untuk semua pasangan suami istri ataupun buat semua pasangan yang menuju ke pernikahan.",
            "jumlahEpisode" => "6",
            "episodes"=>[
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/1.jpg",
                    "judul" => "Berantem Tapi Tetep Langgeng?? Ini Rahasianya! | Ft. Shendy Amanda",
                    "summ" => "Welcome to SisTalk, Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang berantem, adu mulut sama suami SETIAP HARI yaitu Shendy Amanda. Tapi walaupun berantem tiap hari ya tetep langgeng?? Simak sampe selesai ya, ini rahasianya! Selamat mendengarkan.....",
                    "durasi" => "29:16",
                    "rilis" => "26 Sep 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/2.jpg",
                    "judul" => "Jauh dari suami?? Gak takut jadi Layangan Putus?? | Ft. Shandy Amanda",
                    "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 5 check ;)<br/>Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang awet muda, seorang Isteri, Ibu dan Content Creator juga, Shendy Amanda. Kali ini kita akan ngobrolin kisah Bintang Tamu kita yang memang jarak jauh dengan suaminya. Gimana Podme Friends kira2 takut gak sih jauh dari suami??<br/>Selamat mendengarkan.....Saranghaeyo.....",
                    "durasi" => "32:26",
                    "rilis" => "12 Sep 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/3.jpg",
                    "judul" => "Nikah Modal Cinta?? Gak Cukup!! | Ft. Nina Agung Tatyana",
                    "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 4 check ;)<br/>Kali ini kita mau ngobrol bareng salah satu Bintang Tamu yang luar biasa, sosok Psikolog yang sangat menginspirasi 'Nina Agung Tatyana'. Kali ini kita akan kulik dunia Psikologi dunia pernikahan seperti apa. Karena modal cinta aja gak cukup buat suatu pernikahan. Jadi buat kamu yang mau menikah ataupun baru menikah wajib dengerin sampe selesai ya<br/>Selamat mendengarkan....., Saranghaeyo.....",
                    "durasi" => "44:52",
                    "rilis" => "31 Aug 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/4.jpg",
                    "judul" => "Kalau Adopsi Anak Gimana? | Ft. Lulu Elhasbu",
                    "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 3 check ;)<br/>Kali ini kita masih sharing bareng salah satu Bintang Tamu yang luar biasa, sosok influencer, spokesperson dan entrepreneur yang sangat menginspirasi. Yuk kita kulik kak Lulu Elhasbu tentang Adopsi Anak, hal yang sensitif tapi tidak menutup kemungkinan untuk dipertimbangkan. Selamat mendengarkan, Saranghaeyo.....",
                    "durasi" => "46:23",
                    "rilis" => "19 Aug 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/5.jpg",
                    "judul" => "Orang Tuaku Panutanku | Ft. Lulu Elhasbu",
                    "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, Episode 2 check ;)<br/>Kali ini kita sharing bareng salah satu Bintang Tamu yang luar biasa, sosok Influencer, Spoken Person dan Enterpreneur yang sangat menginspirasi 'Lulu Elhasbu'<br/>Kak Lulu Elhasbu dan suami salah satu pasangan suami istri yang sangat menginspirasi<br/>Dan kali ini kita akan kulik seperti apa lika liku pernikahannya dan seperti apa cara kak Lulu Elhasbu menyikapinya<br/>Dijamin bisa menginspirasi",
                    "durasi" => "29:33",
                    "rilis" => "12 Aug 2022 "
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep1/6.jpg",
                    "judul" => "Istri Jebak Suami",
                    "summ" => "Welcome to SisTalk, ngobrol bareng Siska Saragih, yeayy Episode 1 check <br/>Episode 1 kali ini kita mulai dengan menjebak suami yang menjadi narasumber di Sistalk, semua ini tanpa persiapan suami dan suami harus siap menjawab pertanyaan-pertanyaan istri<br/>Suami yang bekerja kantoran ini harus mampu menjawab apa yang menjadi uneg-uneg istri selama ini, siap siap yaa karena ini pasti relate banget sama kamu.<br/>Selamat mendengarkan, Saranghaeyo.....",
                    "durasi" => "30:11",
                    "rilis" => "04 Aug 2022"
                ],
                
            ]
        ],
        [
            "cover" => "../../assets/resources/photos/programs/1.jpg",
            "judul" => "Ngobrol Asyik",
            "summ" => "Obrolan seru, santai dan asyik antara anchor berita Widya Saputra bersama tamu-tamunya yang sudah pasti keren dan tersohor.",
            "jumlahEpisode" => "18",
            "episodes"=>[
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/1.jpg",
                    "judul" => "Evan Loss Full Senyum",
                    "summ" => "Siapa yang pernah dengerin lagu Full Senyum Sayang? Evan Loss merupakan pencipta dan penyanyi lagu 'Full Senyum Sayang' yang kini viral di TikTok hingga reels Instagram. Seperti apa sosok Evan Loss dan perjalanan kariernya?",
                    "durasi" => "27:44",
                    "rilis" => "09 Sep 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/2.jpg",
                    "judul" => "Merdeka Berekspresi Lewat Fashion | Ft. Okky Asokawati",
                    "summ" => 'Jelang peringatan 77 tahun kemerdekaan Indonesia, apakah kita juga telah merdeka dalam hal berekspresi? Ngobras Spesial kali ini bakalan ngobrol seputar "Merdeka Berekespresi Lewat Fashion" bareng Okky Asokawati.',
                    "durasi" => "24:15",
                    "rilis" => "15 Aug 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/3.jpg",
                    "judul" => "Behind Story of Jessica Mila",
                    "summ" => 'Ngobras Spesial kedatangan aktris cantik Jessica Mila @jscmila. Film barunya bergenre horor "The Doll 3" baru saja tayang. Seperti apa cerita di balik filmnya ini dan fakta-fakta menarik tentang Jessica Mila?',
                    "durasi" => "18:04",
                    "rilis" => "31 Mei 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/4.jpg",
                    "judul" => "Semangat Berkarya Dudy Oris",
                    "summ" => 'Masih ingat dengan Dudy Oris? Mantan vokalis Yovie n Nuno yang kini bersolo karier.</br>Di bulan Ramadan ini tak menghalangi Dudy untuk tetap berkarya. Seperti apa kegiatan Dudy Oris di bulan puasa ini dan karya-karya apa yang sudah tercipta?',
                    "durasi" => "22:25",
                    "rilis" => "20 Mei 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/5.jpg",
                    "judul" => "Risman Bintang MotoGP Mandalika",
                    "summ" => 'Masih ingat dengan nama Risman saat perhelatan MotoGP Mandalika? Salah satu staf hotel di Mandalika, Lombok yang disebut namanya oleh pembalap Miguel Oliveira.<br/>Seperti apa sosoknya dan bagaimana cerita di balik MotoGP Mandalika?',
                    "durasi" => "27:06",
                    "rilis" => "31 Mar 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/6.jpg",
                    "judul" => "Model Indonesia di Paris Fashion Week | Ft. Rizal Rama",
                    "summ" => 'Belakangan ini, acara Paris Fashion Week 2022 ramai dibicarakan. Di tengah polemik tersebut, nama model Rizal Rama mencuat. Bagi kalian yang tidak tahu, ia adalah model asal Surabaya, Jawa Timur yang berhasil melenggang di Milan hingga ajang bergengsi di Paris itu.',
                    "durasi" => "34:20",
                    "rilis" => "25 Mar 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/7.jpg",
                    "judul" => "Sarah Azhari It's My Life",
                    "summ" => 'Masih ingat dengan Sarah Azhari? Salah satu aktris yang namanya sempat bersinar di tahun 90-an. Sejumlah film layar lebar dan sinetron pernah ia bintangi. Selain akting, Sarah juga berkecimpung di dunia modelling dan juga tarik suara.<br/>Sudah lama tak terdengar kabarnya, rupanya Sarah kini menetap di Amerika. Seperti apa kegiatannya saat ini?',
                    "durasi" => "38:33",
                    "rilis" => "14 Mar 2022 "
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep2/8.jpg",
                    "judul" => "New Chapter Geisha",
                    "summ" => 'Membuka lembaran baru dalam bermusik, grup band Geisha mengusung konsep dan warna yang berbeda dari sebelumnya. Citra itu dapat dirasakan dari lagu terbaru mereka yang berjudul Impas.',
                    "durasi" => "39:39",
                    "rilis" => "01 Mar 2022"
                ],
                
            ]
        ],
        [
            "cover" => "../../assets/resources/photos/programs/3.jpg",
            "judul" => "The Editor",
            "summ" => "Informatif, tajam dan gamblang. Inilah The Editors, sebuah opini editorial dari meja redaksi Media Indonesia mengenai berita yang sedang hangat dan menjadi perhatian masyarakat.",
            "jumlahEpisode" => "24",
            "episodes"=>[
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/1.jpg",
                    "judul" => "Putri Candrawathi Memang Istimewa",
                    "summ" => "Terlepas dari pengakuan Ferdy Sambo yang mengaku bertanggung jawab atas peristiwa tersebut, dan juga aksinya yang menyeret gerbong puluhan anggota Polri mulai dari jenderal, perwira, dan bintara harus menelan pil pahit terkena sanksi, ada hal yang tak bisa dikesampingkan yaitu bagaimana perlakuan berbeda dari Polri terhadap tersangka Putri Candrawathi.",
                    "durasi" => "10:45",
                    "rilis" => "08 Sep 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/2.jpg",
                    "judul" => "Ganja Bisa Dilegalkan",
                    "summ" => 'Kegunaan tumbuhan ganja atau cannabis sativa, akhir-akhir ini, menjadi perbincangan hangat. Nah, belum lama ini, ada viral foto seorang ibu, Santi Warastuti, dengan anaknya yang mengidap lumpuh otak, atau cerebal palsy yang menuntut legalisasi ganja untuk medis. Tolong, anakku butuh ganja medis, begitu katanya. Sontak, harapan ibu itu menggugah rasa kemanusiaan, bagi siapa saja yang menyaksikannya. Yuk dengarkan pandangan editorial Media Indonesia di The Editors kali ini bersama Mas Soelistijono.',
                    "durasi" => "13:04",
                    "rilis" => "03 Aug 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/3.jpg",
                    "judul" => "Sambo, Ada Apa Denganmu?",
                    "summ" => 'Brigadir Joshua yang harus meregang nyawa akibat baku tembak dengan Bharada E di Rumah Dinas Kadiv Propam Polri Irjen Ferdy Sambo pada 8 Juli 2022. Uniknya, publik baru mengetahui adanya peristiwa tersebut pada Senin 11 Juli 2022. Baiklah suka tidak suka, mau tidak mau, kita harus mempercayai berbagai dalih dari kepolisian.<br/>Persoalannya sejumlah dalih yang dilakukan ternyata secara perlahan mulai membuat blunder, bahkan praktisi hukum Sandi Situngkir menilai perbedaan pernyataan kepolisian, justru menjadi sumber masalah dalam kasus tersebut.<br/>Terlepas dari kasus ini adanya pelecehan seksual atau tidak ada pelecehan seksual, nyawa seorang bhayangkara negara sudah hilang. Nyawa seorang Bhayangkara ditembak di rumah polisi, oleh polisi…',
                    "durasi" => "14:20",
                    "rilis" => "25 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/4.png",
                    "judul" => "Kampanye Koq Modal Migor Subsidi?",
                    "summ" => 'Ketua Umum Partai Amanat Nasional (PAN) Zulkifli Hasan (Zulhas) baru dilantik menjadi Menteri Perdagangan oleh Presiden Joko Widodo pada 15 Juni 2022. Zulhas mendapatkan tugas khusus untuk menangani kisruh minyak goreng yang telah berlangsung. Belakangan, nama Zulhas ramai diperbincangkan lantaran kegiatan PAN bagi-bagi minyak goreng bersubsidi sembari mengampanyekan anaknya untuk Pemilu mendatang. Bagaimana pandangan editorial Media Indonesia? Yuk dengarkan The Editors kali ini bersama Bang Henri Siagian.',
                    "durasi" => "16:07",
                    "rilis" => "22 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/5.jpg",
                    "judul" => "Pilpres 2024: Prabowo versus Newcomers",
                    "summ" => 'Dari sejumlah nama yang muncul dalam berbagai survei Capres untuk Pilpres 2024, nama Ketua Umum Partai Gerindra Prabowo Subianto masih bersinar. Jadi atau tidaknya Prabowo untuk nyapres, akan terjawab pada Rakernas Gerindra Agustus 2022 mendatang. Nah, seperti apa pandangan meja editorial Media Indonesia? Langsung aja yuk dengarkan The Editors kali ini bersama Mas Eko Suprihatno.',
                    "durasi" => "11:53",
                    "rilis" => "04 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/6.jpg",
                    "judul" => "PDIP Usung Puan Maharani, Kenapa tidak? ",
                    "summ" => 'Yang tak kalah menarik dalam politik menuju Pilpres 2024 adalah perebutan untuk mendapat golden ticket yang kini sudah dimiliki oleh PDI Perjuangan. Bukan rahasia lagi, tiket yang dipegang oleh Ketua Umum PDIP Megawati Soekarnoputri kini tengah diperebutkan oleh Gubernur Jawa Tengah Ganjar Pranowo dan Ketua DPR Puan Maharani. Yuk dengarkan pandangan meja redaksi Media Indonesia melalui The Editors kali ini bersama Soelistijono.',
                    "durasi" => "10:54",
                    "rilis" => "22 Jun 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/7.jpg",
                    "judul" => "Langkah Politik Partai NasDem",
                    "summ" => 'Rapat Kerja Nasional Partai NasDem, 15 juni sampai 17 Juni 2022, seperti memberi label kepada publik bahwa ajang ini menjadikan NasDem sebagai partai politik pertama di negeri ini yang tak malu-malu untuk mencari putra terbaik bangsa sebagai suksesor Joko Widodo. Yuk dengarkan pandangan meja redaksi Media Indonesia melalui The Editors kali ini bersama Eko Suprihatno.',
                    "durasi" => "12:01",
                    "rilis" => "22 Jun 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep3/8.jpg",
                    "judul" => "Sinyal Jokowi untuk Ganjar Pranowo?",
                    "summ" => 'Presiden Joko Widodo menghangatkan suasana jagat politik Tanah Air. Kedatangannya ke Rapat Kerja Nasional atau Rakernas V Projo atau Pro-Jokowi di Magelang, Jawa Tengah Sabtu 21 Mei 2022, disebut sebagai bentuk dukungan kepada salah satu kandidat suksesornya.',
                    "durasi" => "10:04",
                    "rilis" => "09 Jun 2022"
                ],
                
            ]
        ],
        [
            "cover" => "../../assets/resources/photos/programs/4.jpg",
            "judul" => "Eagle Forum",
            "summ" => "Eagle Institute Indonesia, ingin menyerap aspirasi publik dan berkontribusi pada perubahan yang terjadi pada saat ini dengan melibatkan berbagai stakeholder dari ranah seni kebudayaan, sosial, pendidikan, kebijakan, ekonomi, hukum, teknologi, maupun sains, untuk terlibat dalam pembahasan isu-isu populis yang muncul dan berkembang dewasa ini serta mencarikan solusi dari permasalahan secara bersama melalui Eagle Forum.",
            "jumlahEpisode" => "6",
            "episodes"=>[
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/1.jpg",
                    "judul" => "Budaya Digital: Menilik Budaya di Dunia Maya",
                    "summ" => "Saat internet mengaburkan batas-batas negara, identitas dan budaya bangsa menghadapi tantangan yang besar. Masyarakat Indonesia dihadapkan pada berbagai bentuk budaya yang tersaji dalam konten-konten di dunia maya.<br/>Oleh sebab itu penggunaan teknologi dan ruang digital yang kini menjadi kebiasaan di masyarakat, tidak hanya membutuhkan kecakapan tetapi juga perlu dibekali dengan literasi yang cukup.",
                    "durasi" => "93:47",
                    "rilis" => "06 Sep 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/2.jpg",
                    "judul" => "Hacker dan Problema Dunia Maya",
                    "summ" => 'Halo, Teman Eagle.<br/>Hari ini hampir seluruh masyarakat Indonesia menggunakan internet untuk melakukan berbagai aktivitas dalam kehidupan sehari-hari. Mulai dari belanja, bersosialisasi, belajar, bertransaksi hingga menyimpan catatan dan data lainnya. Sayangnya tidak semua masyarakat Indonesia memahami bahaya-bahaya yang ada di ruang siber terkait keamanan data dan privasi yang mereka simpan. Lahirnya hacker juga menjadi dilema tersendiri dalam perkembangan Era Digital seperti saat ini.',
                    "durasi" => "77:26",
                    "rilis" => "29 Aug 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/3.jpg",
                    "judul" => "Ruang Tanpa Batas Journalisme Netizen",
                    "summ" => 'Tahukah Teman Eagle? Berdasarkan data riset dari Microsoft, Indonesia dikatakan sebagai negara dengan tingkat kesopanan rendah dalam interaksi di ruang siber/internet. Kok Bisa?<br><br/>Internet menciptakan ruang tanpa batas yang memberikan peluang bagi tiap individu, untuk lebih aktif dan terlibat secara langsung dalam kehidupan individu lainnya. Tidak hanya menjadi konsumen tetapi juga sebagai produsen informasi. Hadirnya berbagai platform juga mengaburkan pandangan masyarakat terhadap media dan jurnalisme. Pada akhirnya fenomena "Citizen Journalism" makin marak dan mengaburkan validitas informasi itu sendiri. Salah satunya persebaran "hoax" yang menyesatkan dan berakibat fatal, seperti yang terjadi di Indonesia.',
                    "durasi" => "76:51",
                    "rilis" => "05 Aug 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/4.png",
                    "judul" => "Gambar Gerak dan Imajinasi di Ruang Siber",
                    "summ" => 'Berselancar di dunia siber atau identik dengan sebutan “internet” di tengah masyarakat, merupakan hal yang sangat lumrah. Sayangnya kemampuan orang-orang dalam mengakses internet sebagian besar hanya berfokus pada media sosial saja. KOMINFO melalui Siberkreasi, mendorong peningkatan kemampuan masyarakat untuk lebih memahami ruang siber. Mengingat kecepatan perkembangan dunia digital dan ketatnya persaingan, perlu disambut dengan persiapan sumber daya manusia.<br/><br/>Seperti apa kecakapan digital yang harus dipahami dan dimiliki oleh masyarakat dan bagaimana Implementasinya. Eagle menghadirkan langsung @oktorairahadi yang akan mengajak kita memahami ruang siber dan lebih cakap digital, bersama dengan Dermawan Syamsuddin dan @pedro_oyong yang akan berbagi pengalaman dalam pemanfaatan ruang siber dan mengasah digital skill. Jangan sampai ketinggalan informasi yang penting untuk bekal Eagle Awards Documentary Competition ini!',
                    "durasi" => "82:04",
                    "rilis" => "18 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/5.png",
                    "judul" => "Perkembangan Film Indonesia Menuju Dunia",
                    "summ" => 'Film yang kita tonton di bioskop maupun berbagai platform streaming online tentu saja tidak lahir begitu saja. Sebuah film yang menarik selalu melewati proses kreatif yang panjang. Mulai dari munculnya ide, pembentukan cerita, penulisan skenario hingga proses-proses lain yang memerlukan diskusi. Kali ini Kamila Andini selaku sutradara film "Yuni" dan Prima Rusdi selaku penulis skenario akan berbagi cerita mengenai proses pembuatan film tersebut.<br/><br/>Keduanya juga akan berbagi tips yang bisa kita terapkan dalam pembuatan sebuah film. Kapan lagi bisa mendengar langsung suka duka proses pembuatan film dari kedua perempuan yang filmnya telah meraih banyak penghargaan baik di tingkat Nasional maupun Internasional. Yuk, simak diskusinya di Eagle Forum: Perkembangan Film Indonesia menuju Dunia.',
                    "durasi" => "89:58",
                    "rilis" => "09 Feb 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep4/6.jpg",
                    "judul" => "Film dan Radikalisme: Propaganda Vs Propaganda",
                    "summ" => 'Konstitusi Indonesia tengah menghadapi ancaman serius dari penyelenggara gerakan-gerakan terorisme yang bertentangan dengan landasan ideologi dan konstitusi republik Indonesia.<br/>Dalam Eagle Forum episode ini, Eagle Institute Indonesia akan duduk bersama dengan Brigjen R Ahmad Nur Wahid, selaku Direktur Pencegahan BNPT, dan Daniel Rudi Haryanto, Head of Content Development Eagle Institute Indonesia dan filmmaker Penjara dan Nirwana, untuk membahas bagaimana peran pemerintah dan masyarakat dalam melakukan kontra propaganda terhadap konten konten terorisme di sekitar kita yang menyasar pada target generasi baru Indonesia.',
                    "durasi" => "51:12",
                    "rilis" => "12 Nov 2021"
                ],        
            ]
        ],
        [
            "cover" => "../../assets/resources/photos/programs/5.png",
            "judul" => "Mg Radio Network",
            "summ" => "Berkomitmen dalam terus memberikan inspirasi dan membuka wawasan seluruh lapisan masyarakat, MG Radio Network lahir sebagai pionir radio yang membawa nafas TV berita nasional pertama di Indonesia dalam bentuk audio dengan pengemasan konten news yang lebih light dan friendly.",
            "jumlahEpisode" => "12",
            "episodes"=>[
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/1.jpg",
                    "judul" => "Parpol 2024 Semakin Banyak?",
                    "summ" => "Partai politik yang telah terdaftar sebagai calon peserta pemilu serentak 2024 telah mengikuti verifikasi administrasi yang digelar sejak 2 Agustus hingga 9 Oktober 2022.<br/><br/>Dalam SK yang ditandatangani Ketua KPU RI Hasyim Asyari pada bab II yang membahas soal rincian program dan jadwal kegiatan disebutkan di tabel 2 point 1 nomor 6, bahwa pengumuman hasil verifikasi administrasi dijadwalkan pada Jumat, 14 Oktober 2022.<br/><br/>Dalam tabel yang sama di nomor 5 huruf G, KPU RI juga bertugas menyampaikan hasil rekapitulasi verifikasi administrasi kepada parpol dan Badan Pengawas Pemilu (Bawaslu) di hari yang sama.",
                    "durasi" => "24:45",
                    "rilis" => "17 Okt 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/2.jpg",
                    "judul" => "Penurunan Harga Tiket Sebesar 15% | Ft. Djoko Setijowarno",
                    "summ" => 'Pemerintah dalam hal ini Kementerian Perhubungan menaikkan harga tiket pesawat, namun pemerintah juga menyarankan kepada maskapai terkait penurunan harga tiket sebesar 15% jika maskapai mau menurunkan harga tiket pada saat jam-jam sepi. Namun pemerintah menangguhkan kembali per hari ini kenaikan tarif ojek online. Apakah ini menjadi kabar gembira bagi pengguna? Mengingat pemerintah belum menentukan kapan waktu yang tepat untuk menaikkannya',
                    "durasi" => "24:48",
                    "rilis" => "01 Sep 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/3.jpg",
                    "judul" => "Menanti Pengumuman The Fed | Ft. Josua Pardede",
                    "summ" => 'Dunia kini sedang dilanda resesi ekonomi. Disebagian negara bahkan sudah mengalami kebangkrutan. Ditengah situasi ekonomi global yang tidak menentu Amerika rencananya akan menaikkan suku bunga the fed, apakah dengan kenaikan nanti dapat merubah ekonomi global? atau Amerika ingin menunjukkan kalau mereka masih dapat bertahan?',
                    "durasi" => "14:44",
                    "rilis" => "03 Aug 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/4.jpg",
                    "judul" => "Saat NIK Dijadikan NPWP | Ft. Inge Diana Rismawanti",
                    "summ" => 'Kebijakan baru memadankan Nomor Induk Kependudukan (NIK) dengan Nomor Pokok Wajib Pajak (NPWP) sudah resmi 14 Juli 2022 lalu. Apakah ini mempermudah masyarakat, atau justru menyulitkan? Dan, apa sih plus minusnya? Yuk dengarkan obrolan Mercy Widjaja bersama Kepala Subdit Penyuluhan Pajak Direktorat P2HUMAS DJP Inge Diana Rismawanti.',
                    "durasi" => "11:45",    
                    "rilis" => "22 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/5.jpg",
                    "judul" => "Menyoal Penyelewengan Dana ACT",
                    "summ" => 'Pihak ACT akhirnya buka suara, pihaknya mengaku mereka mengambil 13,7% dari donasi yang terkumpul. Sedangkan Peraturan Pemerintah No.29 tahun 1980 tentang Pelaksanaan Pengumpulan Sumbangan, pembiayaan usaha pengumpulan sumbagan maksimal bisa diambil sebesar 10% dari donasi. Dan benarkah lembaga ini terindikasi pembiayaan terorisme, langsung Dari Meja Redaksi akan membahas langsung bersama narasumber istimewa yaitu Iswahyudi Rachmanto, Jurnalis Media Group / Eksekutif Produser MG Radio, dan Ridlwan Habib, Direktur The Indonesia Intelligence Institute  ',
                    "durasi" => "27:07",
                    "rilis" => "11 Jul 2022"
                ],
                [
                    "cover" => "../../../assets/resources/photos/programs/ep5/6.jpg",
                    "judul" => "Setelah Jokowi Bertemu Zelensky dan Putin, What Next?",
                    "summ" => 'Dalam safari perdamaian Rusia-Ukraina, Presiden Joko Widodo disambut dengan baik oleh Presiden Zelensky dan Presiden Putin. Sederet poin penting dalam pertemuan-pertemuannya sudah disampaikan ke publik. Lantas, apa langkah selanjutnya yang harus diambil Indonesia? Langsung saja kita dengarkan "Dari Meja Redaksi" MG Radio bersama Reno serta dua narasumbernya, Leonard Samosir, Jurnalis Senior Media, dan Fadra, Kaprodi Hubungan Internasional, Universitas Prof. Dr. Moestopo (Beragama).',
                    "durasi" => "28:34",
                    "rilis" => "04 Jul 2022"
                ],        
            ]
        ],
        
    ];

    $result = []; 

    foreach ($data as $item) {
        if(Str::slug($item["judul"]) == $slug){
            $result = $item;
            break;
        }
    }

    if(sizeof($result) == 0){
        return view("errors.404");
    }else{
        return view("sub.program",[
                                "type"=>"Program"
                                ,"id"=>"default"
                                ,"data" => $result
                            ]);
    }
    
});

Route::get("/sounds/categories/{id}",function($select){
    // dump data
    $categories=[
        "Hot Pod",
        "Audio Drama",
        "Seni & Hiburan",
        "Olahraga",
        "Komedi",
        "Sosial & Budaya",
        "Berita & Politik",
        "Musik",
        "Bisnis & Teknologi",
        "Keluarga & Anak",
        "Rock & Indie"
    ];


    return view("sub.category",[
                                "type"=>"Categories"
                                ,"select"=>$select
                                ,"id"=>$select
                                ,"categories"=> $categories
                                                
                            ]);
});
Route::get("/sounds/schedules/{id}",function(){
    return view("sub.schedule",[
                                "type"=>"Schedule"
                                ,"id"=>"default"
                            ]);
});
Route::get("/sounds/search/{data}",function($data,Request $request){
    return view("sub.search",[
                                "id" => "default",
                                "type"=>"Search"
                                ,"data"=>$data
                                ,"req"=>$request
                            ]);
});

Route::get("/sounds/programs",function(){
    return view("sub.programs",["id"=>"default",
                                "type"=>"Programs"]);
});
Route::get("/sounds/schedules",function(){
    return view("sub.schedulesP",["id"=>"default",
                                "type"=>"Schedules"]);
});

$data = [
        [
            "cover" => "2.jpg",
            "program" => "MG Radio Network",
            "judul" => "Penurunan Harga Tiket Sebesar 15% | Ft. Djoko Setijowarno",
            "released" => "06 Jul 2002",
            "duration" => "24 min",
            "summary" => "Pemerintah dalam hal ini Kementerian Perhubungan menaikkan harga tiket pesawat, namun pemerintah juga menyarankan kepada maskapai terkait penurunan harga tiket sebesar 15% jika maskapai mau menurunkan harga tiket pada saat jam-jam sepi. Namun pemerintah menangguhkan kembali per hari ini kenaikan tarif ojek online. Apakah ini menjadi kabar gembira bagi pengguna? Mengingat pemerintah belum menentukan kapan waktu yang tepat untuk menaikkannya"
        ]
    ];

   

