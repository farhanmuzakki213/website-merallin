<div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <ul class="portfolio-filters isotope-filters">
        <li wire:click="filter('*')" class="{{ $activeFilter === '*' ? 'filter-active' : '' }}" style="cursor: pointer;">Semua</li>
        <li wire:click="filter('translog')" class="{{ $activeFilter === 'translog' ? 'filter-active' : '' }}" style="cursor: pointer;">Trasnlog</li>
        <li wire:click="filter('baju')" class="{{ $activeFilter === 'baju' ? 'filter-active' : '' }}" style="cursor: pointer;">Apparel</li>
        <li wire:click="filter('produk')" class="{{ $activeFilter === 'produk' ? 'filter-active' : '' }}" style="cursor: pointer;">Merchandise</li>
        <li wire:click="filter('branding')" class="{{ $activeFilter === 'branding' ? 'filter-active' : '' }}" style="cursor: pointer;">Services</li>
    </ul>

    <div wire:ignore.self class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        @foreach ($portfolioItems as $item)
            <div wire:key="{{ $item['image'] }}" class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $item['category'] }}">
                <img src="{{ asset('assets/img/masonry-portfolio/' . $item['image']) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{ $item['title'] }}</h4>
                    <a href="{{ asset('assets/img/masonry-portfolio/' . $item['image']) }}"
                        data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
            </div>
        @endforeach
    </div>

    @if ($perPage < $totalItems)
        <div class="row mt-4">
            <div class="col-12 text-center">
                <button wire:click="loadMore" id="portfolio-load-more" class="btn btn-primary">
                    <span wire:loading.remove wire:target="loadMore">Show More</span>
                    <span wire:loading wire:target="loadMore">Loading...</span>
                </button>
            </div>
        </div>
    @endif
</div>
