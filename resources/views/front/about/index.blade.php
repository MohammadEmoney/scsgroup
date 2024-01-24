@extends('layouts.main')

@section('title', 'Emcode - about')

@section('content')
    <!-- ======= Hero Section ======= -->
    @include('front.partials.home.hero', compact('settings'))
    <!-- End Hero -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                {!! $about !!}
            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection
