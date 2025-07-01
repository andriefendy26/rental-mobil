{{-- resources/views/galeri-detail.blade.php --}}
<x-layouts.layout>
    @php
        /** @var array<array{gambar:string}> $data  */
        /** @var bool $isLoading */

        // Tinggi acak untuk skeleton (sesuaikan jika perlu)
        $skeletonHeights = [200, 280, 320, 240, 360, 220, 300, 260, 340, 180, 250, 290];
    @endphp

    <div  x-data="{ selectedImage: null }"
          class="min-h-screen pt-20">

        {{-- ========= HEADER ========= --}}
        <div data-aos="fade-right" class="container px-4 pt-10 mx-auto text-center">
            <h1 class="bg-[#800000] bg-clip-text text-4xl font-bold text-transparent sm:text-5xl">
                GALERI KAMI
            </h1>
            <div class="w-24 h-1 mx-auto mt-4 rounded-full bg-gradient-to-r from-yellow-400 to-orange-400"></div>
            <p class="mt-6 text-lg text-zinc-600 ">
                Berikut adalah galeri dari kami
            </p>
        </div>

        {{-- ========= IS‑LOADING ========= --}}
        @if ($isLoading)
            <div data-aos="fade-left" class="px-4 py-12 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-7xl">
                    <div class="gap-6 space-y-6 columns-2 sm:columns-2 lg:columns-3 xl:columns-4">
                        @foreach ($skeletonHeights as $h)
                            <div class="mb-6 animate-pulse break-inside-avoid" style="height:{{ $h }}px">
                                <div
                                    class="relative w-full h-full overflow-hidden bg-zinc-300 rounded-2xl ">
                                    <div
                                        class="absolute inset-0 -translate-x-full animate-shimmer bg-gradient-to-r from-transparent via-white/20 to-transparent">
                                    </div>
                                    <div class="flex items-center justify-center h-full">
                                        <svg class="w-12 h-12 text-zinc-400 "
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                             viewBox="0 0 16 20">
                                            <path
                                                d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z" />
                                            <path
                                                d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        {{-- ========= GALLERY ========= --}}
        @elseif (count($data))
            <div class="px-4 py-12 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-7xl">
                    <div class="gap-6 space-y-6 columns-2 sm:columns-2 lg:columns-3 xl:columns-4">
                        @foreach ($data as $i => $item)
                            <div class="mb-6 cursor-pointer group break-inside-avoid"
                                 @click="selectedImage='{{ $item['gambar'] }}'">
                                <div
                                    class="relative overflow-hidden transition-all duration-500 transform shadow-lg rounded-2xl hover:-translate-y-2 hover:shadow-2xl">
                                    <img src="{{ $item['gambar'] }}"
                                         alt="Gallery photo {{ $i + 1 }}"
                                         loading="lazy"
                                         class="object-cover w-full h-auto transition-transform duration-700 group-hover:scale-110">
                                    <div
                                        class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/50 via-transparent to-transparent group-hover:opacity-100">
                                    </div>
                                    <div
                                        class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                        <div class="p-3 rounded-full bg-white/20 backdrop-blur-sm">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                                 viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        {{-- ========= EMPTY STATE ========= --}}
        @else
            <div class="flex flex-col items-center justify-center px-4 py-20 text-center">
                {{-- Animated illustration --}}
                <div class="relative mb-8">
                    <div class="animate-float">
                        <div class="relative">
                            {{-- Camera body --}}
                            <div
                                class="w-24 h-16 shadow-2xl bg-gradient-to-br from-slate-700 to-slate-800 rounded-xl rotate-3">
                                {{-- Lens --}}
                                <div
                                    class="absolute w-12 h-12 -translate-x-1/2 -translate-y-1/2 rounded-full shadow-inner top-1/2 left-1/2 bg-gradient-to-br from-slate-900 to-black">
                                    <div
                                        class="absolute w-8 h-8 -translate-x-1/2 -translate-y-1/2 rounded-full top-1/2 left-1/2 bg-gradient-to-br from-blue-900 to-blue-950">
                                        <div
                                            class="absolute w-4 h-4 -translate-x-1/2 -translate-y-1/2 rounded-full top-1/2 left-1/2 bg-gradient-to-br from-blue-400 to-blue-600 opacity-80">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="absolute w-3 h-2 rounded-sm top-2 right-2 bg-gradient-to-br from-yellow-300 to-yellow-400"></div>
                                <div
                                    class="absolute w-4 h-2 -translate-x-1/2 rounded-sm top-1 left-1/2 bg-slate-600">
                                </div>
                            </div>

                            {{-- Floating photo frames --}}
                            <div
                                class="absolute w-8 h-6 bg-white rounded-sm shadow-lg -top-6 -left-8 -rotate-12 animate-bounce-slow opacity-60">
                                <div class="w-full h-4 rounded-t-sm bg-gradient-to-br from-blue-200 to-blue-300"></div>
                            </div>
                            <div
                                class="absolute w-6 h-8 bg-white rounded-sm shadow-lg -top-4 -right-6 rotate-12 animate-bounce-slow animation-delay-300 opacity-60">
                                <div class="w-full h-5 rounded-t-sm bg-gradient-to-br from-green-200 to-green-300">
                                </div>
                            </div>
                            <div
                                class="absolute h-5 bg-white rounded-sm shadow-lg -bottom-2 -left-6 w-7 rotate-6 animate-bounce-slow animation-delay-600 opacity-60">
                                <div class="w-full h-3 rounded-t-sm bg-gradient-to-br from-purple-200 to-purple-300">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Sparkles --}}
                    <div class="absolute text-yellow-400 -top-4 -right-4 animate-pulse">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0l2.4 7.2L22 12l-7.6 4.8L12 24l-2.4-7.2L2 12l7.6-4.8z" />
                        </svg>
                    </div>
                    <div class="absolute text-blue-400 -bottom-6 -left-4 animate-pulse animation-delay-500">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0l2.4 7.2L22 12l-7.6 4.8L12 24l-2.4-7.2L2 12l7.6-4.8z" />
                        </svg>
                    </div>
                </div>

                <h2 class="mb-4 text-4xl font-bold text-zinc-800 ">
                    Galeri Masih Kosong
                </h2>
                <p class="max-w-md mb-8 text-xl leading-relaxed text-zinc-600 ">
                    Belum ada foto yang ditampilkan di galeri ini. Foto-foto indah akan segera hadir!
                </p>
                <div class="flex mb-8 space-x-2">
                    <div class="w-3 h-3 bg-yellow-400 rounded-full animate-bounce"></div>
                    <div class="w-3 h-3 bg-blue-400 rounded-full animate-bounce animation-delay-200"></div>
                    <div class="w-3 h-3 bg-green-400 rounded-full animate-bounce animation-delay-400"></div>
                </div>
            </div>
        @endif

        {{-- ========= MODAL ========= --}}
        <template x-if="selectedImage">
            <div x-show="selectedImage"
                 x-transition
                 class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/90"
                 @click="selectedImage = null">
                <div class="relative max-w-4xl max-h-full">
                    <button @click.stop="selectedImage = null"
                            class="absolute right-0 text-white transition-colors -top-12 hover:text-zinc-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <img :src="selectedImage"
                         alt="Full size photo"
                         class="object-contain max-w-full max-h-full rounded-lg shadow-2xl"
                         @click.stop>
                </div>
            </div>
        </template>

        {{-- ========= CUSTOM KEYFRAMES ========= --}}
        <style>
            @keyframes shimmer { 0% { transform: translateX(-100%) } 100% { transform: translateX(100%) } }
            @keyframes float   { 0%,100% { transform: translateY(0) } 50% { transform: translateY(-10px) } }
            @keyframes bounce-slow {
                0%,100% { transform: translateY(0) rotate(var(--rotation,0deg)) }
                50%     { transform: translateY(-8px) rotate(var(--rotation,0deg)) }
            }

            .animate-shimmer     { animation: shimmer 2s linear infinite }
            .animate-float       { animation: float 3s ease-in-out infinite }
            .animate-bounce-slow { animation: bounce-slow 2s ease-in-out infinite }
            .animation-delay-200 { animation-delay: .2s }
            .animation-delay-300 { animation-delay: .3s }
            .animation-delay-400 { animation-delay: .4s }
            .animation-delay-500 { animation-delay: .5s }
            .animation-delay-600 { animation-delay: .6s }
        </style>
    </div>
</x-layouts.layout>
