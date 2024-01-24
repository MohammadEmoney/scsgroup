<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
        <h1 class="logo @if (app()->getLocale() == 'fa') ms-auto @else me-auto @endif">
            <a href="{{ route('home') }}">S<span class="text-warning">C</span>S</a>
            <img src="{{ asset('front/assets/img/scs-logo.png') }}" alt="" class="">
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('home') }}">{{ __('Home') }}</a></li>
                <li><a class="nav-link scrollto" href="#about">{{ __('About') }}</a></li>
                <li><a class="nav-link scrollto" href="#services">{{ __('Services') }}</a></li>
                <li><a class="nav-link   scrollto" href="#portfolio">{{ __('Portfolio') }}</a></li>
                <li><a class="nav-link scrollto" href="#team">{{ __('Team') }}</a></li>
                <li><a class="nav-link scrollto" href="#contact">{{ __('Contact') }}</a></li>
                <li><a class="getstarted scrollto" href="#contact">{{ __('Get Started') }}</a></li>
                <li class="dropdown"><a href="#"><span>{{ __('Lang') }}: {{ app()->getLocale() }}</span></a>
                    <ul>
                        <li><a
                                href="{{ \App\Generators\CustomUrlGenerator::localeRoute('en') }}">{{ __('English') }}</a>
                        </li>
                        <li><a
                                href="{{ \App\Generators\CustomUrlGenerator::localeRoute('fa') }}">{{ __('Persian') }}</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
