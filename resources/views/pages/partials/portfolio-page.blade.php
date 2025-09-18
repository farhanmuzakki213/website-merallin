<section id="portfolio" class="portfolio section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Portofolio</h2>
        <h4>Jelajahi portofolio kami untuk berbagai solusi yang memenuhi kebutuhan Anda.</h4>
    </div>
    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Semua</li>
                <li data-filter=".filter-translog">Trasnlog</li>
                <li data-filter=".filter-baju">Apparel</li>
                <li data-filter=".filter-produk">Merchandise</li>
                <li data-filter=".filter-branding">Services</li>
            </ul>
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                @php
                    $portfolioItems = [
                        ['category' => 'baju', 'image' => 'masonry-portfolio-1-min.jpg', 'title' => 'Baju Safety'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-2-min.jpg', 'title' => 'Jersey'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-3-min.jpg', 'title' => 'T-Shirt'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-4-min.jpg', 'title' => 'T-Shirt'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-5-min.jpg', 'title' => 'T-Shirt'],
                        ['category' => 'produk', 'image' => 'masonry-portfolio-6-min.jpg', 'title' => 'Mug'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-7-min.jpg', 'title' => 'Cyclewear'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-8-min.jpg', 'title' => 'Sportwear'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-9-min.jpg', 'title' => 'Seragam Kantor'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-10-min.jpg', 'title' => 'Polo Safety'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-11-min.jpg', 'title' => 'Polo Sportwear'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-12-min.jpg', 'title' => 'Seragam Safety'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-13-min.jpg', 'title' => 'Sportwear'],
                        [
                            'category' => 'produk',
                            'image' => 'masonry-portfolio-14-min.jpg',
                            'title' => 'Stationery (Peralatan Kantor)',
                        ],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-15-min.jpg', 'title' => 'Seragam Safety'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-16-min.jpg', 'title' => 'Seragam Kantor'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-17-min.jpg', 'title' => 'Rompi'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-18-min.jpg', 'title' => 'Jaket'],
                        ['category' => 'produk', 'image' => 'masonry-portfolio-19-min.jpg', 'title' => 'Totebag'],
                        ['category' => 'produk', 'image' => 'masonry-portfolio-20-min.jpg', 'title' => 'Sepatu Safety'],
                        ['category' => 'produk', 'image' => 'masonry-portfolio-21-min.jpg', 'title' => 'Helm Proyek'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-22-min.jpg', 'title' => 'Jersey'],
                        ['category' => 'produk', 'image' => 'masonry-portfolio-23-min.jpg', 'title' => 'Botol Minum'],
                        ['category' => 'produk', 'image' => 'masonry-portfolio-24-min.jpg', 'title' => 'Topi'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-25-min.jpg', 'title' => 'Polo'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-26-min.jpg', 'title' => 'Seragam Safety'],
                        ['category' => 'baju', 'image' => 'masonry-portfolio-27-min.jpg', 'title' => 'T-Shirt'],
                        ['category' => 'translog', 'image' => 'masonry-portfolio-28-min.jpg', 'title' => 'Ekspedisi Logistik'],
                        ['category' => 'translog', 'image' => 'masonry-portfolio-29-min.jpg', 'title' => 'Ekspedisi Logistik'],
                        ['category' => 'translog', 'image' => 'masonry-portfolio-30-min.jpg', 'title' => 'Ekspedisi Logistik'],
                        ['category' => 'translog', 'image' => 'masonry-portfolio-32-min.jpg', 'title' => 'Ekspedisi Logistik'],
                        ['category' => 'translog', 'image' => 'masonry-portfolio-31-min.jpg', 'title' => 'Ekspedisi Logistik'],
                    ];
                @endphp

                @foreach ($portfolioItems as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $item['category'] }}">
                        <img src="{{ asset('assets/img/masonry-portfolio/' . $item['image']) }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>{{ $item['title'] }}</h4>
                            <a href="{{ asset('assets/img/masonry-portfolio/' . $item['image']) }}"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>

</section>
