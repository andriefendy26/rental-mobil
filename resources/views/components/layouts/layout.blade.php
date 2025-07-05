
<!DOCTYPE html>
<html lang="id">
<head>
   @yield('head')
    <meta
      name="google-site-verification"
      content="th4SZplLAEv0WczFkzG7b8fG1AIw6ogdLzQlZq28lVo"
    />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    {{-- Alphine js --}}
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="overflow-x-hidden bg-white">
    <x-navbar></x-navbar>
    {{ $slot }}

    <x-footer></x-footer>
    @stack('scripts')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
      duration: 1400, 
    });
</script>
</body>
</html>
