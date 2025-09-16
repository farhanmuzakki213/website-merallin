<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <span class="sitename">Merallin.Group</span>
                </a>
                <div class="footer-contact">
                    <p style="font-family: Poppins">Jl. Gading Kirana Tim. No.A11, RT.18, RT.11/RW.8,</p>
                    <p style="font-family: Poppins">Kelapa Gading Barat, Kec. Kelapa Gading,</p>
                    <p style="font-family: Poppins">Jakarta, 14240</p>
                    <p class="mt-3"><strong>Phone:</strong> <a href="https://wa.me/6285860939031"
                            style="color: white; font-family: Poppins">+62 858 6093 9031</a></p>
                    <p><strong>Email:</strong> <a
                            href="https://mail.google.com/mail/u/0/?fs=1&to=merallinsuksesabadi@gmail.com&tf=cm"
                            style="color: white; font-family: Poppins">merallinsuksesabadi@gmail.com</a></p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                @php
                    $isHomePage = request()->is('/');
                @endphp
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ $isHomePage ? '#about' : url('/#about') }}">About us</a></li>
                    <li><a href="{{ $isHomePage ? '#services' : url('/#services') }}">Services</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="{{ route('service.detail', ['slug' => 'general-supplier']) }}">General Supplier</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'konveksi-apparel']) }}">Konveksi & Apparel Custom</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'advertising-percetakan']) }}">Advertising & Percetakan</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'merchandise']) }}">Merchandise Custom</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'epoxy']) }}">Epoxy & Lantai Coating</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'interior']) }}">Desain Interior</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'translog']) }}">Transportasi & Logistik (Translog)</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'tour']) }}">Tour & Gathering Organizer</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'labor-supply']) }}">Labor Supply</a></li>
                    <li><a href="{{ route('service.detail', ['slug' => 'catering']) }}">Catering</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Social Media</h4>
                <ul>
                    <li><a
                            href="https://www.facebook.com/people/Merallin-Suksess-Abadi/pfbid02syphDAE6EdwGwvsbPVSSXmhR99PnYnByoW9wd9TMd1dCjDa7SPp12tXcBK9HQLF8l/"><i
                                class="bi bi-facebook"></i> Merallin Sukses Abadi</a></li>
                    <li><a href="https://www.instagram.com/merallin.group/"><i class="bi bi-instagram"></i>
                            @merallin.group</a></li>
                    <li><a href="https://www.linkedin.com/in/merallin-sukses-abadi-6a4143349/"><i
                                class="bi bi-linkedin"></i> Merallin Sukses Abadi</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Merallin.Group</strong> <span>All Rights
                Reserved.</span></p>
    </div>

</footer>
