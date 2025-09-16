<div>
    <div class="page-title accent-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">{{ $service['title'] }}</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li class="current">{{ $service['title'] }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}"
                        class="img-fluid services-img">
                </div>

                <div style="text-align: justify;" class="col-lg-4" data-aos-fade-up" data-aos-delay="100">
                    <h4>{{ $service['title'] }}</h4>
                    <p>{{ $service['description'] }}</p>
                    <br>
                    <p class="fw-bold">💬 Hubungi kami untuk konsultasi dan pemesanan!</p>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <a href="https://wa.me/6285860939031?text={{ rawurlencode($service['whatsapp_text']) }}">
                            <img style="transition: all 0.3s; transform-origin: center;" class="img" width="300px"
                                src="{{ asset('assets/img/icons/chat-with-merallin.png') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>{{-- Tampilkan Sub-Section jika ada --}}
    @if (!empty($service['sub_sections']))
        <section id="services" class="services section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>{{ $service['sub_sections']['title'] }}</h2>
                <h4>{{ $service['sub_sections']['subtitle'] }}</h4>
            </div>
            <div class="container">
                <div class="row gy-4">
                    @foreach ($service['sub_sections']['items'] as $item)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item item-cyan position-relative">
                                <div class="icon mt-5 pb-5 mb-5">
                                    <a href="{{ asset(str_replace('-cover', '', $item['image'])) }}"
                                        title="{{ $item['title'] }}" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link">
                                        <img src="{{ asset($item['image']) }}" width="180px">
                                    </a>
                                </div>
                                <h3>{{ $item['title'] }}</h3>
                                <ul style="text-align: left;">
                                    @foreach ($item['points'] as $point)
                                        <li>✅ {{ $point }}</li>
                                        <br>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</div>
