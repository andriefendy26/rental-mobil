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
            <div class="items-center hidden space-x-10 md:flex">
                @php
                    $link = [
                        ['label' => 'Beranda', 'url' => '/'],
                        ['label' => 'Armada', 'url' => '/armada'],
                        ['label' => 'Artikel', 'url' => '/artikel'],
                        ['label' => 'Galeri', 'url' => '/galeri'],
                        ['label' => 'Beranda', 'url' => '/tentangkami'],
                    ]
                @endphp
                
                @foreach ($link as $item)
                    <a href={{ $item['url'] }}
                    :class="{{ $isStaticNavbar ? "'text-zinc-800 hover:text-[#800000]'" : 'scrolled ? `text-zinc-800 hover:text-[#800000]` : `text-white hover:text-[#800000]`' }}"
                    class="relative font-medium transition group">
                        {{ $item['label'] }}
                        <span class="absolute left-0 -bottom-0.5 h-0.5 w-full
                        bg-current transform scale-x-0
                        group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                    </a>
                @endforeach
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
    <div x-show="open"
        x-transition:enter="transition-all ease-out duration-300"
        x-transition:enter-start="max-h-0 opacity-0"
        x-transition:enter-end="max-h-[500px] opacity-100"
        x-transition:leave="transition-all ease-in duration-200"
        x-transition:leave-start="max-h-[500px] opacity-100"
        x-transition:leave-end="max-h-0 opacity-0"
     :class={{ $isStaticNavbar ? "shadow md:hidden" :'scrolled ? `text-zinc-800 hover:text-[#800000]` : ` text-zinc-900 hover:text-[#800000]`'}} class="px-4 pt-2 pb-4 space-y-3 shadow-md bg-white/90 backdrop-blur-md">
     @foreach ($link as $item )    
        <a href={{ $item['url'] }} :class="{{ $isStaticNavbar ? "'text-zinc-800 hover:text-[#800000]'" : 'scrolled ? `text-zinc-800 hover:text-[#800000]` : `text-zinc-900 hover:text-[#800000]`' }}" class="relative block font-medium transition group">{{ $item['label'] }}
        <span class="absolute left-0 -bottom-0.5 h-0.5 w-full
         bg-current transform scale-x-0
         group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
        </a>
     @endforeach

    </div>
    
</nav>

{{-- @section('scripts')
@endsection --}}
