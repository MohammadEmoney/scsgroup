  <!-- Vendor JS Files -->
  <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('front/assets/js/main.js') }}"></script>

  @livewireScripts

  @stack('scripts')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <livewire:sweet-alert />
{{-- <script>
    Swal.fire({
        title: 'Thank you for subscribing!',
        text: 'Do you want to continue',
        icon: 'success',
        confirmButtonText: 'Cool',
        timerProgressBar : true,
        timer : 20000,
        width : 500,
    })
</script> --}}
