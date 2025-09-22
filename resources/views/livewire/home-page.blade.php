<div>
    <div wire:ignore>
        @include('pages.partials.hero-section')
    </div>

    <div id="about" x-data="{ loaded: false }" x-intersect:enter="if (!loaded) { $wire.loadSection('about'); loaded = true; }">
        @if ($aboutLoaded)
            @include('pages.partials.about-page')
        @else
            {{-- Placeholder untuk menjaga tinggi halaman --}}
            <div style="height: 500px;"></div>
        @endif
    </div>

    <div id="features" x-data="{ loaded: false }" x-intersect:enter="if (!loaded) { $wire.loadSection('services'); loaded = true; }">
        @if ($servicesLoaded)
            @include('pages.partials.services-page')
        @else
            <div style="height: 500px;"></div>
        @endif
    </div>

    <div id="portfolio" x-data="{ loaded: false }" x-intersect:enter="if (!loaded) { $wire.loadSection('portfolio'); loaded = true; }">
        @if ($portfolioLoaded)
            <section id="portfolio" class="portfolio section">
                <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
                    <h2>Portofolio</h2>
                    <h4>Jelajahi portofolio kami untuk berbagai solusi yang memenuhi kebutuhan Anda.</h4>
                </div>
                <div class="container">
                    <livewire:portfolio-section />
                </div>
            </section>
        @else
            <div style="height: 500px;"></div>
        @endif
    </div>

    <div id="clients" x-data="{ loaded: false }" x-intersect:enter="if (!loaded) { $wire.loadSection('clients'); loaded = true; }">
        @if ($clientsLoaded)
            @include('pages.partials.clients-page')
        @else
            <div style="height: 500px;"></div>
        @endif
    </div>
</div>
