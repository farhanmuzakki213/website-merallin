<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
class ServiceDetailPage extends Component
{
    #[Title('Detail Layanan')]
    public $service;

    public function mount($slug)
    {
        $allServices = [
            'general-supplier' => [
                'title' => 'General Supplier',
                'image' => 'assets/img/general-supplier.png',
                'description' => 'Ini adalah proses kegiatan untuk pemenuhan atau penyediaan kebutuhan dan pasokan barang berdasarkan kontrak atau pembelian langsung untuk memenuhi kebutuhan bisnis, dengan tujuan untuk memperoleh barang dengan harga yang dapat dipertanggungjawabkan, jumlah dan kualitas yang sesuai, serta ketersediaannya yang tepat waktu sesuai dengan kebutuhan klien. Pengadaan barang yang kami tangani antara lain: APD keselamatan, barang dagangan, kantong laundry, penyedia perlengkapan rumah tangga, kantor, restoran, hotel, dan lainnya.',
                'whatsapp_text' => 'Halo! Saya ingin bertanya lebih lanjut tentang Service General Supplier. Mohon informasinya, terima kasih!',
                'sub_sections' => []
            ],
            'konveksi-apparel' => [
                'title' => 'Konveksi & Apparel Custom',
                'image' => 'assets/img/apparel.png',
                'description' => 'Kami menyediakan layanan konveksi dan apparel custom dengan kualitas terbaik. Dengan berbagai pilihan bahan berkualitas, kami siap membantu Anda dalam pembuatan seragam, kemeja, kaos polo, hingga jersey sesuai kebutuhan. Kami mengutamakan detail, kenyamanan, dan ketahanan bahan, sehingga produk yang dihasilkan tidak hanya menarik secara visual, tetapi juga nyaman digunakan dalam berbagai aktivitas.',
                'whatsapp_text' => 'Halo! Saya ingin bertanya lebih lanjut tentang Service Konveksi & Apparel Custom. Mohon informasinya, terima kasih!',
                'sub_sections' => [
                    'title' => 'Bahan',
                    'subtitle' => 'Berbagai pilihan bahan terbaik untuk seragam, kemeja, dan kaos polo.',
                    'items' => [
                        ['image' => 'assets/img/bahan/bahan1.png', 'title' => 'TAIPAN TROPICAL', 'points' => ['Terbuat dari campuran serat katun dan poliester.', 'Ideal untuk kemeja dengan lipatan yang stabil dan dimensi serat yang tetap.']],
                        ['image' => 'assets/img/bahan/bahan2.png', 'title' => 'AMERICAN DRILL', 'points' => ['Terbuat dari campuran poliester (65%) dan viscose (35%).', 'Mampu menyerap keringat dengan baik dan harganya terjangkau.']],
                        ['image' => 'assets/img/bahan/bahan3.png', 'title' => 'RIPSTOP', 'points' => ['Kain dengan tekstur kotak-kotak dari anyaman benang nilon.', 'Memperkuat kain sehingga menjadi tahan terhadap robekan.']],
                        ['image' => 'assets/img/bahan/bahan4.png', 'title' => 'CHAMBRAY', 'points' => ['Terbuat dari linen atau katun.', 'Memiliki tekstur lembut, lebih ringan dan lebih mudah menyerap udara dibandingkan denim.']],
                        ['image' => 'assets/img/bahan/bahan5.png', 'title' => 'COTTON BAMBOO', 'points' => ['Kombinasi serat katun dan bambu (70:30).', 'Sangat nyaman dan aman di kulit karena serat alami.']],
                        ['image' => 'assets/img/bahan/bahan6.png', 'title' => 'COTTON COMBED', 'points' => ['Terbuat dari 100% serat katun.', 'Nyaman, lembut, halus, serta dapat menyerap keringat.']],
                        ['image' => 'assets/img/bahan/bahan7.png', 'title' => 'LACOSTE PIQUE', 'points' => ['Bahan kaos yang digunakan untuk membuat kaos polo.', 'Tersedia jenis Combed Pique Diamond dan CVC Pique Hexagon.']],
                        ['image' => 'assets/img/bahan/bahan8.png', 'title' => 'JERSEY - DRIFIT', 'points' => ['Terbuat dari kombinasi nilon, katun, dan poliester.', 'Memberikan rasa lebih sejuk, cocok untuk pakaian olahraga.']],
                    ]
                ]
            ],
            'advertising-percetakan' => [
                'title' => 'Advertising & Percetakan',
                'image' => 'assets/img/advertising.png',
                'description' => 'Kami menyediakan layanan periklanan dan percetakan untuk memenuhi berbagai kebutuhan promosi bisnis Anda. Dengan berbagai pilihan layanan yang inovatif, kami memastikan hasil cetakan dan media iklan yang berkualitas tinggi, tepat waktu, dan sesuai dengan kebutuhan klien. Layanan yang kami tangani meliputi: pembuatan dan pemasangan billboard, percetakan media promosi seperti banner, spanduk, dan stiker, branding kendaraan dan toko, serta desain kreatif untuk berbagai kebutuhan iklan.',
                'whatsapp_text' => 'Halo! Saya ingin bertanya lebih lanjut tentang Service Advertising & Percetakan. Mohon informasinya, terima kasih!',
                'sub_sections' => []
            ],
            'merchandise' => [
                'title' => 'Merchandise Custom',
                'image' => 'assets/img/merchandise.png',
                'description' => 'Kami menyediakan layanan merchandise custom untuk berbagai kebutuhan bisnis, komunitas, dan event Anda. Dari topi, botol minum, tote bag, hingga set perlengkapan kantor, semua bisa disesuaikan dengan desain dan branding yang Anda inginkan. Tingkatkan citra dan profesionalisme dengan merchandise berkualitas tinggi yang eksklusif untuk Anda!',
                'whatsapp_text' => 'Halo! Saya ingin bertanya lebih lanjut tentang Service Merchandise Custom. Mohon informasinya, terima kasih!',
                'sub_sections' => [
                    'title' => 'Merchandise',
                    'subtitle' => 'Berbagai pilihan Merchandise terbaik.',
                    'items' => [
                        ['image' => 'assets/img/masonry-portfolio/masonry-portfolio-6-min.jpg', 'title' => 'MUG', 'points' => ['Mug Custom untuk Branding Bisnis Anda!', 'Kreatif, awet, dan premium.']],
                        ['image' => 'assets/img/masonry-portfolio/masonry-portfolio-14-min.jpg', 'title' => 'STATIONERY', 'points' => ['Notebook, Pulpen, USB, Kalkulator, Kartu nama, dll.', 'Semua bisa custom di sini!']],
                        ['image' => 'assets/img/masonry-portfolio/masonry-portfolio-19-min.jpg', 'title' => 'TOTEBAG', 'points' => ['Totebag custom dengan desain dan pesan khusus.', 'Work safe. Work hard. Work smart.']],
                        ['image' => 'assets/img/masonry-portfolio/masonry-portfolio-23-min.jpg', 'title' => 'BOTOL MINUM', 'points' => ['Buat botol minum yang sesuai dengan gaya dan branding Anda.', 'Cocok buat event, hadiah, atau pemakaian sehari-hari.']],
                        ['image' => 'assets/img/masonry-portfolio/masonry-portfolio-24-min.jpg', 'title' => 'TOPI', 'points' => ['Upgrade gaya dengan topi custom.', 'Cocok buat event, komunitas, atau menunjukkan identitas Anda.']],
                    ]
                ]
            ],
            'epoxy' => [
                'title' => 'Epoxy & Lantai Coating',
                'image' => 'assets/img/epoxy.png',
                'description' => 'MERALLIN EPOXY hadir sebagai solusi cat epoxy untuk lantai dan dinding yang menawarkan perlindungan maksimal serta hasil yang estetis. Dengan berbagai jenis coating, produk ini dirancang untuk memenuhi kebutuhan berbagai sektor. Kami memberikan garansi hingga 1 tahun sebagai bukti kepercayaan terhadap kualitas layanan dan produk.',
                'whatsapp_text' => 'Halo! Saya ingin bertanya lebih lanjut tentang Service Epoxy & Lantai Coating. Mohon informasinya, terima kasih!',
                'sub_sections' => [
                    'title' => 'Epoxy',
                    'subtitle' => 'Berbagai pilihan Epoxy terbaik untuk kebutuhan lantai dan dinding Anda.',
                    'items' => [
                        ['image' => 'assets/img/epoxy/epoxy1.png', 'title' => 'FLOOR COATING', 'points' => ['Solusi pelapisan lantai berkualitas tinggi.', 'Tahan terhadap beban berat dan anti slip.']],
                        ['image' => 'assets/img/epoxy/epoxy2-cover.png', 'title' => 'SPORT COURT', 'points' => ['Epoxy untuk lapangan olahraga indoor/outdoor.', 'Anti selip dan tahan cuaca ekstrem.']],
                        ['image' => 'assets/img/epoxy/epoxy3.png', 'title' => 'INDUSTRIAL COATING', 'points' => ['Epoxy tahan bahan kimia dan korosi.', 'Ideal untuk lantai pabrik & area sterilisasi.']],
                        ['image' => 'assets/img/epoxy/epoxy4.png', 'title' => 'WALL COATING', 'points' => ['Pelapisan dinding dengan epoxy anti-bakteri.', 'Mudah dibersihkan, tahan lama.']],
                        ['image' => 'assets/img/epoxy/epoxy5.png', 'title' => 'WATERPROOFING SYSTEM', 'points' => ['Solusi anti bocor untuk dinding & lantai.', 'Lindungi dari rembesan dan kelembaban.']],
                        ['image' => 'assets/img/epoxy/epoxy6-cover.png', 'title' => 'ANTI-STATIC EPOXY', 'points' => ['Pelindung lantai dengan teknologi anti-statis.', 'Aman untuk fasilitas elektronik dan data center.']],
                    ]
                ]
            ],
            'interior' => [
                'title' => 'Desain Interior',
                'image' => 'assets/img/interior.png',
                'description' => 'MERALLIN INTERIOR hadir untuk mewujudkan desain ruangan yang estetis, fungsional, dan berkarakter. Mengusung berbagai konsep desain seperti minimalis modern, industrial elegan, hingga gaya skandinavia yang hangat, kami mampu memberikan nuansa unik yang sesuai dengan kebutuhan setiap ruangan. Kami melayani kebutuhan desain untuk hunian, kantor, kafe, hingga fasilitas komersial lainnya.',
                'whatsapp_text' => 'Halo! Saya ingin bertanya lebih lanjut tentang Service Desain Interior. Mohon informasinya, terima kasih!',
                'sub_sections' => [
                    'title' => 'Desain Interior',
                    'subtitle' => 'Pilihan terbaik untuk menciptakan ruang yang indah, fungsional, dan berkualitas tinggi.',
                    'items' => [
                        ['image' => 'assets/img/interior/interior1.png', 'title' => 'MODERN MINIMALIST', 'points' => ['Suasana simpel dan elegan dengan palet warna netral.', 'Ideal buat ruang keluarga yang cozy.']],
                        ['image' => 'assets/img/interior/interior2-cover.png', 'title' => 'SPORT COURT LOUNGE', 'points' => ['Konsep interior modern dengan nuansa sport lounge.', 'Cocok buat ruang santai dengan sentuhan energik.']],
                        ['image' => 'assets/img/interior/interior3.png', 'title' => 'INDUSTRIAL CHIC', 'points' => ['Gaya industrial yang keren dengan elemen beton ekspos.', 'Pas banget buat kantor kreatif atau studio seni.']],
                        ['image' => 'assets/img/interior/interior4.png', 'title' => 'SCANDINAVIAN HOME', 'points' => ['Mengutamakan kenyamanan dan estetika natural.', 'Cocok buat ruang tamu yang hangat dan welcoming.']],
                        ['image' => 'assets/img/interior/interior5.png', 'title' => 'TROPICAL URBAN', 'points' => ['Nuansa tropis yang fresh dengan elemen hijau.', 'Solusi interior yang bikin ruangan adem dan relaks.']],
                        ['image' => 'assets/img/interior/interior6-cover.png', 'title' => 'FUTURISTIC SMART', 'points' => ['Konsep futuristik yang clean dengan pencahayaan LED.', 'Cocok untuk ruangan modern yang mengedepankan teknologi.']],
                    ]
                ]
            ],
            'translog' => [
                'title' => 'Transportasi & Logistik',
                'image' => 'assets/img/translog.png',
                'description' => 'MERALLIN TRANSLOG AND RENTAL SERVICE: Solusi Transportasi Terbaik untuk Kebutuhan Anda. Layanan kami mencakup berbagai opsi, mulai dari sewa jangka panjang, layanan untuk ekspatriat, hingga logistik dan sewa harian. Dengan berbagai pilihan kendaraan, mulai dari Family Car, City Car, Premium Car, hingga Box Truck dan Tour Bus, kami menawarkan fleksibilitas sewa harian, mingguan, bulanan, hingga tahunan.',
                'whatsapp_text' => 'Halo! Saya ingin bertanya lebih lanjut tentang Service Transportasi & Logistik. Mohon informasinya, terima kasih!',
                'sub_sections' => [
                    'title' => 'Transportasi & Logistik',
                    'subtitle' => 'Mengapa Memilih Merallin Translog And Rental Service?',
                    'items' => [
                        ['image' => 'assets/img/translog/translog1.png', 'title' => 'KENDARAAN PREMIUM & AC NYAMAN', 'points' => ['Semua unit kami dilengkapi sistem pendingin udara (AC) berkualitas.']],
                        ['image' => 'assets/img/translog/translog2.png', 'title' => 'RESPON CEPAT 24 JAM', 'points' => ['Tim kami siap merespons panggilan dan pesan Anda kapan saja.']],
                        ['image' => 'assets/img/translog/translog3.png', 'title' => 'LAYANAN ANTAR JEMPUT', 'points' => ['Tak perlu repot, kami siap mengantarkan kendaraan langsung ke lokasi Anda.']],
                        ['image' => 'assets/img/translog/translog4.png', 'title' => 'OPSI SOPIR TAMBAHAN', 'points' => ['Anda dapat memilih layanan dengan atau tanpa sopir sesuai kebutuhan.']],
                    ]
                ]
            ],
            'tour' => [
                'title' => 'Tour & Gathering Organizer',
                'image' => 'assets/img/tour.png',
                'description' => 'MERALLIN TOUR hadir sebagai solusi perjalanan dan penyelenggaraan acara Anda. Kami menawarkan paket wisata dengan harga terbaik yang sesuai dengan budget liburan Anda tanpa mengorbankan kualitas layanan. Dengan pilihan destinasi wisata terhits dan dukungan tim profesional, kami memastikan pengalaman yang tak terlupakan. Nikmati juga layanan antar jemput plus sopir untuk kenyamanan maksimal.',
                'whatsapp_text' => 'Halo! Saya ingin bertanya lebih lanjut tentang Service Tour & Gathering Organizer. Mohon informasinya, terima kasih!',
                'sub_sections' => [
                    'title' => 'Tour & Gathering Organizer',
                    'subtitle' => 'Mengapa Memilih Merallin Tour & Gathering Organizer?',
                    'items' => [
                        ['image' => 'assets/img/tour/tour1.png', 'title' => 'HARGA TERBAIK', 'points' => ['Harga paket wisata yang sesuai dengan budget liburan Anda.']],
                        ['image' => 'assets/img/tour/tour2.png', 'title' => 'DESTINASI TERHITS', 'points' => ['Kami telah memilih destinasi wisata terbaru dan terbaik.']],
                        ['image' => 'assets/img/tour/tour3.png', 'title' => 'TIM PROFESIONAL', 'points' => ['Biarkan tim kami mengurus semua kebutuhan perjalanan Anda.']],
                        ['image' => 'assets/img/tour/tour4.png', 'title' => 'LAYANAN ANTAR JEMPUT + SOPIR', 'points' => ['Kami siap menjemput Anda di mana saja dengan layanan sopir profesional.']],
                    ]
                ]
            ],
            'labor-supply' => [
                'title' => 'Labor Supply',
                'image' => 'assets/img/labor.png',
                'description' => 'MERALLIN SUKSES ABADI: Solusi Labor Supply Terbaik untuk Berbagai Kebutuhan Bisnis Anda. Layanan kami mencakup penyediaan tenaga kerja harian maupun kontrak untuk berbagai kebutuhan, seperti event organizer, pabrik, pergudangan, logistik, dan lainnya. Dengan tenaga kerja yang handal dan terlatih, kami memastikan setiap operasional bisnis Anda berjalan lancar, efektif, dan efisien.',
                'whatsapp_text' => 'Halo! Saya ingin bertanya lebih lanjut tentang Service Labor Supply. Mohon informasinya, terima kasih!',
                'sub_sections' => [
                    'title' => 'Labor Supply',
                    'subtitle' => 'Mengapa Memilih Merallin Labor Supply?',
                    'items' => [
                        ['image' => 'assets/img/labor/labor-1.png', 'title' => 'TENAGA KERJA BERKUALITAS & TERLATIH', 'points' => ['Kami menyediakan tenaga kerja profesional sesuai kebutuhan proyek Anda.']],
                        ['image' => 'assets/img/labor/labor-2.png', 'title' => 'FLEKSIBILITAS WAKTU & DURASI', 'points' => ['Mulai dari kebutuhan jangka pendek hingga kontrak panjang, kami siap membantu.']],
                        ['image' => 'assets/img/labor/labor-3.png', 'title' => 'DUKUNGAN REKRUTMEN PROFESIONAL', 'points' => ['Tim kami memastikan proses seleksi dan rekrutmen berjalan efisien.']],
                        ['image' => 'assets/img/labor/labor-4.png', 'title' => 'EFISIENSI BIAYA & KINERJA OPTIMAL', 'points' => ['Anda dapat fokus pada bisnis inti tanpa khawatir soal kebutuhan tenaga kerja.']],
                    ]
                ]
            ],
            'catering' => [
                'title' => 'Catering',
                'image' => 'assets/img/catering.png',
                'description' => 'MERALLIN SUKSES ABADI: Solusi Catering Terbaik untuk Acara Spesial Anda. Kami menghadirkan hidangan berkualitas dengan cita rasa istimewa. Layanan kami mencakup berbagai kebutuhan catering, mulai dari pernikahan, acara keluarga, hingga corporate gathering dengan pilihan menu tradisional dan internasional yang lengkap. Dengan tim profesional, kami memastikan setiap acara berjalan lancar.',
                'whatsapp_text' => 'Halo! Saya ingin bertanya lebih lanjut tentang Service Catering. Mohon informasinya, terima kasih!',
                'sub_sections' => [
                    'title' => 'Catering',
                    'subtitle' => 'Mengapa Memilih Merallin Catering?',
                    'items' => [
                        ['image' => 'assets/img/catering/catering-1.png', 'title' => 'HARGA TERBAIK', 'points' => ['Pilihan paket dengan harga terjangkau tanpa mengorbankan kualitas.']],
                        ['image' => 'assets/img/catering/catering-2.png', 'title' => 'MENU LEZAT DAN BERAGAM', 'points' => ['Dari hidangan tradisional hingga menu internasional.']],
                        ['image' => 'assets/img/catering/catering-3.png', 'title' => 'DUKUNGAN TIM PROFESIONAL', 'points' => ['Tim kami memastikan makanan disajikan dengan sempurna dan elegan.']],
                        ['image' => 'assets/img/catering/catering-4.png', 'title' => 'LAYANAN ANTAR & SETUP ACARA', 'points' => ['Nikmati layanan antar makanan langsung ke lokasi acara Anda.']],
                    ]
                ]
            ],
        ];

        if (!isset($allServices[$slug])) {
            abort(404);
        }

        $this->service = $allServices[$slug];

        $this->dispatch('updateTitle', 'Service: ' . $this->service['title']);
    }

    public function render()
    {
        return view('livewire.service-detail-page');
    }
}
