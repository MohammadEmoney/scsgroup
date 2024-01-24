<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ __('Our Services') }}</h2>
            <p>{{ $settings['services']['text'] }}</p>
        </div>

        <div class="row">
            @foreach ($settings['services']['cards'] as $item)
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="{{ $item['icon'] }}"></i></div>
                        <h4><a href="#">{{ $item['title'] }}</a></h4>
                        <p>{{ $item['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
