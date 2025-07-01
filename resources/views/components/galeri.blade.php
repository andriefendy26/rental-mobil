@props([
    'data'    => [],   {{-- array berisi ['gambar' => 'link'] --}}
    'isLoading' => false,
])

@php
    /* tinggi acak untuk skeleton – mensimulasikan masonry */
    $skeletonHeights = [200,280,320,240,360,220,300,260,340,180,250,290];
@endphp

<div class="min-h-screen bg-white "
     x-data="{ open:false, img:'' }">

    {{-- HEADER --}}
    <div class="container px-4 pt-10 mx-auto text-center" data-aos="fade-left">
        <h2 class="bg-clip-text text-transparent bg-[#800000] text-4xl font-bold sm:text-5xl">
            GALERI KAMI
        </h2>
        <div class="w-24 h-1 mx-auto mt-4 rounded-full bg-gradient-to-r from-yellow-400 to-orange-400"></div>
        <p class="mt-6 text-lg text-zinc-800">
            Berikut adalah galeri dari kami
        </p>
    </div>

    {{-- === STATE: LOADING === --}}
    @if ($isLoading)
        <div class="px-4 py-12 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="gap-6 space-y-6 columns-2 sm:columns-2 lg:columns-3 xl:columns-4">
                    @foreach ($skeletonHeights as $h)
                        <div class="mb-6 break-inside-avoid animate-pulse" style="height:{{ $h }}px">
                            <div class="relative w-full h-full overflow-hidden rounded-2xl bg-zinc-300 dark:bg-zinc-700">
                                <div class="absolute inset-0 -translate-x-full animate-[shimmer_2s_infinite] bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    {{-- === STATE: DATA KOSONG === --}}
    @elseif (empty($data))
        <div class="flex flex-col items-center justify-center px-4 py-20 text-center">
            {{-- ikon kamera sederhana --}}
            <svg class="w-24 h-24 mb-6 text-zinc-400 dark:text-zinc-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M4 7h3l2-2h6l2 2h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V9a2 2 0 012-2z"/>
                <circle cx="12" cy="13" r="4"/>
            </svg>
            <h2 class="mb-2 text-3xl font-bold text-zinc-800 dark:text-zinc-200">Galeri Masih Kosong</h2>
            <p class="max-w-md text-lg text-zinc-600 dark:text-zinc-400">
                Belum ada foto yang ditampilkan di galeri ini. Foto‑foto indah akan segera hadir!
            </p>
        </div>

    {{-- === STATE: DATA ADA === --}}
    @else
        <div class="px-4 py-12 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="gap-6 space-y-6 columns-2 sm:columns-2 lg:columns-3 xl:columns-4">
                    @foreach ($data as $i => $item)
                        <div class="mb-6 cursor-pointer break-inside-avoid group"
                             @click="open=true; img='{{ $item['gambar'] }}'">
                            <div class="relative overflow-hidden transition-all duration-500 shadow-lg rounded-2xl hover:-translate-y-2 hover:shadow-2xl">
                                <img src="{{ $item['gambar'] }}"
                                     alt="Gallery photo {{ $i+1 }}"
                                     loading="lazy"
                                     class="object-cover w-full h-auto transition-transform duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 transition-opacity opacity-0 bg-gradient-to-t from-black/50 via-transparent to-transparent group-hover:opacity-100"></div>
                                <div class="absolute inset-0 flex items-center justify-center transition-opacity opacity-0 group-hover:opacity-100">
                                    <span class="p-3 rounded-full bg-white/20 backdrop-blur-sm">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 10l4.553-4.553a1 1 0 011.414 1.414L16.414 11.414M9 14l-4.553 4.553a1 1 0 11-1.414-1.414L7.586 12.586"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    {{-- === MODAL === --}}
    <div x-show="open" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/90"
         x-transition.opacity
         @click="open=false">
        <div class="relative max-w-4xl max-h-full">
            <button @click.stop="open=false"
                    class="absolute right-0 text-white transition-colors -top-12 hover:text-zinc-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <img :src="img" alt="Full size" class="object-contain max-w-full max-h-full rounded-lg shadow-2xl"
                 @click.stop>
        </div>
    </div>

    {{-- CUSTOM CSS (shimmer) --}}
    <style>
        @keyframes shimmer { 0% { transform: translateX(-100%);} 100% { transform: translateX(100%);} }
    </style>
</div>
