<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ __('Pricing') }}</h2>
            <p>{{ $settings['pricing']['text'] }}</p>
        </div>

        <div class="row">
            @foreach ($settings['pricing']['cards'] as $pricing)
                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="{{ $pricing['aos'] }}"
                    data-aos-delay="{{ $pricing['aos-delay'] }}">
                    <div class="box">
                        <h3>{{ $pricing['title'] }}</h3>
                        <h4><sup>$</sup>{{ $pricing['price'] }}
                            {{-- <span>per month</span> --}}
                        </h4>
                        <ul>
                            @foreach ($pricing['items'] as $item)
                                <li class="{{ $item['available'] }}"><i class="{{ $item['icon'] }}"></i>
                                    {{ $item['text'] }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ $pricing['link'] }}" class="buy-btn">{{ __('Get Started') }}</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
