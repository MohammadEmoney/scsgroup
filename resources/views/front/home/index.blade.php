@extends('layouts.main')

@section('title', __('Smart Code Studio') . ' - ' . __('Home'))

@section('content')
    <!-- ======= Hero Section ======= -->
    @include('front.partials.home.hero', compact('settings'))
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        @include('front.home.partials.clients')
        <!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        @include('front.home.partials.about')
        <!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        @include('front.home.partials.why-us')
        <!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        @include('front.home.partials.skills')
        <!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        @include('front.home.partials.services')
        <!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        @include('front.home.partials.call-to-action')
        <!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        @include('front.home.partials.portfolios', compact('categories', 'portfolios'))

        <!-- ======= Team Section ======= -->
        @include('front.home.partials.team')
        <!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        @include('front.home.partials.pricing')
        <!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        {{-- @include('front.home.partials.frequently-ask') --}}
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        @include('front.home.partials.contact')
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection
