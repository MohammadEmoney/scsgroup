<footer id="footer">
    <livewire:newsletter />

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{ __("Smart Code Studio") }}</h3>
                    <p>
                        {!! $settings['footer']['contacts']['address'] ?? "address" !!}
                        <strong>{{ __("Phone") }}: </strong><span dir="ltr"> {{ $settings['footer']['contacts']['phone'] ?? "+98 938 1133 408" }}</span><br>
                        <strong>{{ __("Email") }}: </strong><span dir="ltr"> {{ $settings['footer']['contacts']['email'] ?? "info@scsgroup.ir" }}</span><br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{ __('Useful Links') }}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#about') }}">{{ __('About us') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#services') }}">{{ __('Services') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#') }}">{{ __('Terms of service') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#') }}">{{ __('Privacy policy') }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{ __('Our Services') }}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('Web Design') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('Web Development') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('Product Management') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('Marketing') }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('Graphic Design') }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{ __('Our Social Networks') }}</h4>
                    <p>
                        {{ $settings['footer']['social_networks']['text'] ?? "help" }}
                    </p>
                    <div class="social-links mt-3">
                        @foreach ($settings['footer']['social_networks']['items'] ?? [] as $item)
                            <a href="{{ $item['link'] }}" class="{{ $item['class'] }}"><i class="{{ $item['icon'] }}"></i></a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span><a href="https://scsgroup.ir">Smart Code Studio</a></span></strong>. All Rights Reserved, {{ now()->year }}
        </div>
        {{-- <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> --}}
    </div>
</footer>
