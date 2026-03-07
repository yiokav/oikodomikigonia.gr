<!doctype html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="{{ $metaDescription ?? 'A growing collection of ready to use components for the CSS framework Bootstrap 5' }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
  <meta name="HandheldFriendly" content="true">
  <title>{{ $title ?? 'Οικοδομική Γωνία' }}</title>
  <link rel="stylesheet" href="{{ asset($themeCss ?? 'css/theme.css') }}">

  <style>
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: local(''),
        url('{{ asset('fonts/inter-v12-latin-300.woff2') }}') format('woff2'),
        url('{{ asset('fonts/inter-v12-latin-300.woff') }}') format('woff');
    }
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local(''),
        url('{{ asset('fonts/inter-v12-latin-500.woff2') }}') format('woff2'),
        url('{{ asset('fonts/inter-v12-latin-500.woff') }}') format('woff');
    }
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local(''),
        url('{{ asset('fonts/inter-v12-latin-700.woff2') }}') format('woff2'),
        url('{{ asset('fonts/inter-v12-latin-700.woff') }}') format('woff');
    }
  </style>
  @stack('styles')
</head>
<body data-bs-spy="scroll" data-bs-target="#navScroll" @if(isset($bodyClass)) class="{{ $bodyClass }}" @endif>

  @include('partials.nav')

  <main>
    @yield('content')
  </main>

  @hasSection('footer')
    @yield('footer')
  @else
    @include('partials.footer')
  @endif

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script>
    AOS.init({ duration: 800 });
  </script>
  <script>
    let scrollpos = window.scrollY;
    const header = document.querySelector(".navbar");
    if (header) {
      const header_height = header.offsetHeight;
      const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm");
      const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm");
      window.addEventListener('scroll', function () {
        scrollpos = window.scrollY;
        if (scrollpos >= header_height) add_class_on_scroll();
        else remove_class_on_scroll();
      });
    }
  </script>
  @stack('scripts')
</body>
</html>
