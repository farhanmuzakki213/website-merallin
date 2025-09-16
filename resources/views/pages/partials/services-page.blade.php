<section id="features" class="features section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Layanan Kami</h2>
        <h4>Kami menawarkan berbagai layanan berikut untuk memenuhi kebutuhan Anda.</h4>
    </div>
    <div class="container">

        <div class="row gy-4">

            @php
                $services = [
                    [
                        'icon' => 'bi-box-seam',
                        'color' => '#ffbb2c;',
                        'title' => 'General Supplier',
                        'slug' => 'general-supplier',
                    ],
                    [
                        'icon' => 'bi-scissors',
                        'color' => '#5578ff;',
                        'title' => 'Konveksi & Apparel Custom',
                        'slug' => 'konveksi-apparel',
                    ],
                    [
                        'icon' => 'bi-megaphone',
                        'color' => '#e80368;',
                        'title' => 'Advertising & Percetakan',
                        'slug' => 'advertising-percetakan',
                    ],
                    [
                        'icon' => 'bi-bag-check',
                        'color' => '#e361ff;',
                        'title' => 'Merchandise Custom',
                        'slug' => 'merchandise',
                    ],
                    [
                        'icon' => 'bi-brush',
                        'color' => '#47aeff;',
                        'title' => 'Epoxy & Lantai Coating',
                        'slug' => 'epoxy',
                    ],
                    [
                        'icon' => 'bi-layout-text-window-reverse',
                        'color' => '#ffa76e;',
                        'title' => 'Desain Interior',
                        'slug' => 'interior',
                    ],
                    [
                        'icon' => 'bi-truck',
                        'color' => '#11dbcf;',
                        'title' => 'Transportasi & Logistik (Translog)',
                        'slug' => 'translog',
                    ],
                    [
                        'icon' => 'bi-calendar-event',
                        'color' => '#4233ff;',
                        'title' => 'Tour & Gathering Organizer',
                        'slug' => 'tour',
                    ],
                    [
                        'icon' => 'bi-person-workspace',
                        'color' => '#8A2BE2;',
                        'title' => 'Labor Supply',
                        'slug' => 'labor-supply',
                    ],
                    [
                        'icon' => 'bi-egg-fried',
                        'color' => '#FFB800;',
                        'title' => 'Catering',
                        'slug' => 'catering',
                    ],
                ];
                $delay = 100;
            @endphp

            @foreach ($services as $service)
                <div class="col-lg-6 col-md-4" data-aos="fade-up" data-aos-delay="{{ $delay }}">
                    <div class="features-item">
                        <i class="bi {{ $service['icon'] }}" style="color: {{ $service['color'] }};"></i>
                        <h3>
                            <a href="{{ route('service.detail', ['slug' => $service['slug']]) }}"
                                class="stretched-link">{{ $service['title'] }}</a>
                        </h3>
                    </div>
                </div>@php $delay += 100; @endphp
            @endforeach

        </div>

    </div>

</section>
