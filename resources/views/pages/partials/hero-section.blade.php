<section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        @php
            $isHomePage = request()->is('/');
        @endphp
        <div class="carousel-item active">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
            <div style="text-align: justify;" class="container col-lg-8">
                <h2 style="text-align: center;">Solusi Terpadu untuk Bisnis Anda</h2>
                <p style="text-align: center;">Bergerak di Berbagai Bidang seperti: Transportasi & Logistik yang andal, Produksi Apparel
                    berkualitas, dan Merchandise kustom untuk brand Anda, Serta Sub Bidang dan Layanan Lainnya.</p>

                <p style="text-align: center;">Kami tidak hanya menyediakan layanan, tetapi juga menawarkan solusi bernilai tambah mulai dari
                    perencanaan hingga eksekusi proyek, dengan fokus pada harga, waktu pelaksanaan, dan kualitas hasil
                    demi kepuasan pelanggan.</p>
                <div style="text-align: center;">

                    <a href="{{ $isHomePage ? '#about' : url('/#about') }}" class="btn-get-started">Read More</a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.jpg') }}" alt="">
            <div style="text-align: justify;" class="container col-lg-8">
                <h2 style="text-align: center;">TENTANG PERUSAHAAN KAMI</h2>
                <p style="text-align: center;">PT. Merallin Sukses Abadi adalah perusahaan yang bergerak di bidang Transportasi & Logistik, Produksi
                    Apparel Berkualitas, Merchandise kustom dan Sub Bidang Lainnya</p>

                <p style="text-align: center;">Berlokasi di Kelapa Gading, Jakarta Utara, kami hadir dengan komitmen tinggi untuk memberikan layanan
                    terbaik yang turut berkontribusi dalam pertumbuhan ekonomi daerah dan nasional.</p>

                <div style="text-align: center;">

                    <a href="{{ $isHomePage ? '#about' : url('/#about') }}" class="btn-get-started">Read More</a>
                </div>

            </div>
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>


        </div>
        <ol class="carousel-indicators"></ol>

</section>
