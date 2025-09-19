<div>
    @include('pages.partials.hero-section')
    @include('pages.partials.about-page')
    @include('pages.partials.services-page')
    <section id="portfolio" class="portfolio section">
        <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
            <h2>Portofolio</h2>
            <h4>Jelajahi portofolio kami untuk berbagai solusi yang memenuhi kebutuhan Anda.</h4>
        </div>

        <div class="container">
            <livewire:portfolio-section />
        </div>

    </section>
    @include('pages.partials.clients-page')
</div>
