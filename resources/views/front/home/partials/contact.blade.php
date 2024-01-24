<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ $settings['contact']['title'] }}</h2>
            <p>{{ $settings['contact']['text'] }}</p>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>{{ __('Location') }}:</h4>
                        <p>{{ $settings['contact']['address'] }}</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>{{ __('Email') }}:</h4>
                        <p>{{ $settings['contact']['email'] }}</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>{{ __('Call') }}:</h4>
                        <p>{{ $settings['contact']['phone'] }}</p>
                    </div>
                </div>

            </div>

            <livewire:contact-form />
        </div>

    </div>
</section>
