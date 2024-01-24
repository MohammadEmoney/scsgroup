@extends('layouts.main')

@section('title', 'Emcode - ' . $portfolio->name)

@section('content')
    <!-- ======= Hero Section ======= -->
    @include('front.partials.home.hero', compact('settings'))
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li>{{ __('Portfolio Details') }}</li>
                </ol>
                <h2>{{ __('Portfolio Details') }}</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ $portfolio->getFirstMediaUrl('SpecialImage') }}" alt="">
                                </div>

                                @foreach ($portfolio->getMedia('gallery') as $media)
                                    <div class="swiper-slide">
                                        <img src="{{ $media->getUrl() }}" alt="">
                                    </div>
                                @endforeach

                                {{-- <div class="swiper-slide">
                                    <img src="{{ asset('front/assets/img/portfolio/portfolio-3.jpg') }}" alt="">
                                </div> --}}

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>{{ __('Project information') }}</h3>
                            <ul>
                                <li><strong>{{ __('Category') }}</strong>: @foreach($portfolio?->categories()?->get() as $category) {{ $category->name_en }} @if(!$loop->last) / @endif @endforeach</li>
                                {{-- <li><strong>{{ __('Client') }}</strong>: {{ $portfolio->client }}</li> --}}
                                <li><strong>{{ __('Project date') }}</strong>: {{ $portfolio->year }}</li>
                                <li><strong>{{ __('Project URL') }}</strong>: <a href="#">{{ $portfolio->url }}</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-8 col-12">
                        <div class="portfolio-description">
                            <h2>{{ __("Details") }}</h2>
                            <p>
                                {!! $portfolio->description_en !!}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main>
    <!-- End #main -->
@endsection
