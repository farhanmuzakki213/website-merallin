<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
            <h1 class="sitename"><span style="color: #114B79">Merallin</span> Sukses Abadi</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                @php
                    $isHomePage = request()->is('/');
                @endphp
                <li><a href="{{ route('home') }}" class="{{ $isHomePage ? 'active' : '' }}">Home</a></li>

                <li class="dropdown"><a href="{{ $isHomePage ? '#about' : url('/#about') }}"><span>About</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ $isHomePage ? '#about' : url('/#about') }}">About</a></li>
                        <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                    </ul>
                </li>

                <li><a href="{{ $isHomePage ? '#features' : url('/#features') }}">Services</a></li>
                <li><a href="{{ $isHomePage ? '#portfolio' : url('/#portfolio') }}">Portfolio</a></li>
                <li><a href="{{ $isHomePage ? '#clients' : url('/#clients') }}">Clients</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            <a href="https://www.facebook.com/people/Merallin-Suksess-Abadi/pfbid02syphDAE6EdwGwvsbPVSSXmhR99PnYnByoW9wd9TMd1dCjDa7SPp12tXcBK9HQLF8l/"
                class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/merallin.group/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/merallin-sukses-abadi-6a4143349/" class="linkedin"><i
                    class="bi bi-linkedin"></i></a>
        </div>

    </div>
</header>
