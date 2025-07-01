@php
    $staticRoutes = ['/artikel', '/galeri', '/tentangkami'];
    $isStaticNavbar = collect($staticRoutes)->contains(function ($route) {
        return request()->is(ltrim($route, '/').'*');
    });
@endphp

<nav
    x-data="{ scrolled: false, open: false }"
    @scroll.window="scrolled = window.pageYOffset > 50"
    class="fixed inset-x-0 top-0 z-[999999] transition-all duration-300"
    :class="{{ $isStaticNavbar ? "'bg-white shadow'" : 'scrolled ? `bg-white/90 backdrop-blur-md shadow-md` : `bg-transparent`' }}"
>
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            {{-- Logo --}}
             {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="/">
                    @if($isStaticNavbar)
                        <img src="{{ asset('assets/Logo.png') }}" class="h-10" alt="Logo">
                    @else
                        <img
                            :src="scrolled ? '{{ asset('assets/Logo.png') }}' : '{{ asset('assets/LogoWhite.png') }}'"
                            class="h-10"
                            alt="Logo"
                        >
                    @endif
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <div class="items-center hidden space-x-8 md:flex">
                <a href="/"
                   :class="{{ $isStaticNavbar ? "'text-zinc-800 hover:text-[#800000]'" : 'scrolled ? `text-zinc-800 hover:text-[#800000]` : `text-white hover:text-gray-200`' }}"
                   class="font-medium transition">
                    Beranda
                </a>
                <a href="/armada" :class="{{ $isStaticNavbar ? "'text-zinc-800 hover:text-[#800000]'" : 'scrolled ? `text-zinc-800 hover:text-[#800000]` : `text-white hover:text-gray-200`' }}" class="font-medium transition">Armada</a>
                <a href="/artikel" :class="{{ $isStaticNavbar ? "'text-zinc-800 hover:text-[#800000]'" : 'scrolled ? `text-zinc-800 hover:text-[#800000]` : `text-white hover:text-gray-200`' }}" class="font-medium transition">Artikel</a>
                <a href="/galeri" :class="{{ $isStaticNavbar ? "'text-zinc-800 hover:text-[#800000]'" : 'scrolled ? `text-zinc-800 hover:text-[#800000]` : `text-white hover:text-gray-200`' }}" class="font-medium transition">Galeri</a>
                <a href="/tentangkami" :class="{{ $isStaticNavbar ? "'text-zinc-800 hover:text-[#800000]'" : 'scrolled ? `text-zinc-800 hover:text-[#800000]` : `text-white hover:text-gray-200`' }}" class="font-medium transition">Tentang Kami</a>
            </div>

            {{-- Mobile Toggle --}}
            <div class="flex items-center md:hidden">
                <button @click="open = !open" class="focus:outline-none">
                    <svg :class="{{ $isStaticNavbar ? "'text-zinc-800'" : 'scrolled ? `text-zinc-800` : `text-white`' }}"
                         class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Navigation --}}
    <div x-show="open" class="px-4 pt-2 pb-4 space-y-1 bg-white shadow md:hidden">
        <a href="/" class="block text-zinc-800 hover:text-[#800000] font-medium">Beranda</a>
        <a href="/armada" class="block text-zinc-800 hover:text-[#800000] font-medium">Artikel</a>
        <a href="/artikel" class="block text-zinc-800 hover:text-[#800000] font-medium">Artikel</a>
        <a href="/galeri" class="block text-zinc-800 hover:text-[#800000] font-medium">Galeri</a>
        <a href="/tentangkami" class="block text-zinc-800 hover:text-[#800000] font-medium">Tentang Kami</a>
    </div>
</nav>
