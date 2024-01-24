<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ __('About Us') }}</h2>
        </div>

        <div class="row content">
            <div class="col-lg-6">
                {!! $settings['about']['first_column'] ?? '' !!}
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                {!! $settings['about']['second_column'] ?? '' !!}
                <a href="{{ route('about') }}" class="btn-learn-more">{{ __('Learn More') }}</a>
            </div>
        </div>

    </div>
</section>
