<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ $settings['portfolio']['title'] ?? __('See Our Work in Action') }}</h2>
            <p>{{ $settings['portfolio']['text'] }}</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">{{ __('All') }}</li>
            @foreach ($categories as $category)
                <li data-filter=".filter-{{ $category->id }}">{{ $category->name }}</li>
            @endforeach
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($portfolios as $portfolio)
                <div class="col-lg-4 col-md-6 portfolio-item
                    @foreach($portfolio->categories()->get() as $category) {{ "filter-" . $category->id }} @endforeach
                    ">
                    <div class="portfolio-img"><img src="{{ $portfolio->getFirstMediaUrl('SpecialImage') }}"
                            class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4 class="{{ app()->getLocale() == 'fa' ? "text-start" : "" }}">{{ $portfolio->name }}</h4>
                        <p class="{{ app()->getLocale() == 'fa' ? "text-start" : "" }}">{{ $portfolio->mainCategory()?->first()?->name }}</p>
                        <a href="{{ $portfolio->getFirstMediaUrl('SpecialImage') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $portfolio->name }}"><i
                                class="bx bx-plus"></i></a>
                        <a href="{{ route('portfolios.show', ['portfolio' => $portfolio->slug]) }}" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Portfolio Section -->
