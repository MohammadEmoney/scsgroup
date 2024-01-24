<footer id="footer">
    <livewire:newsletter />

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{ __("Smart Code Studio") }}</h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +98 938 1133 408<br>
                        <strong>Email:</strong> info@emcode.ir<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#about') }}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#services') }}">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#') }}">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#') }}">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{ __('Our Services') }}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
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
