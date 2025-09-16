<section id="clients" class="clients section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <h4>Komitmen Kami adalah Kesuksesan Anda</h4>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0 clients-wrap">

            @for ($i = 1; $i <= 29; $i++)
                @if ($i == 24)
                    @continue
                @endif
                <div class="col-xl-3 col-md-4 client-logo">
                    <img src="{{ asset('assets/img/clients/client-' . $i . '.png') }}" class="img-fluid" alt="">
                </div>
            @endfor

        </div>

    </div>

</section>
