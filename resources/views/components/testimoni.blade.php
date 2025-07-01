@props([
    'data' => [],
])

@php
    // Jika ingin loop seamless, duplikasikan datanya
    $testimoni = [...$data, ...$data];
@endphp
<div class="px-4 mx-auto mt-10 overflow-hidden">
    <div class="mb-16 text-center">
        <h2 class="text-4xl font-bold text-zinc-800 lg:text-6xl ">TESTIMONI</h2>
        <div class="mx-auto mt-4 h-1 w-24 rounded-full bg-[#800000]"></div>
        <p class="mt-4 text-lg text-zinc-700">
            Pengalaman pelanggan tentang kami
        </p>
    </div>

    {{-- Horizontal Scroll --}}
    <div class="relative">
        <div class="flex gap-6 py-10 animate-scroll whitespace-nowrap" style="animation: scroll 60s linear infinite;">
            @foreach (array_merge($testimoni, $testimoni) as $item)
                <div class="inline-block">
                    {{-- CardRate --}}
                    <div class="flex flex-col w-[400px] items-center p-6 overflow-auto transition-all duration-300 bg-white shadow-lg h-80 rounded-xl hover:scale-105 hover:shadow-xl ">
                        {{-- Avatar --}}
                        <img
                            src="{{ $item['image'] }}"
                            alt="{{ $item['name'] }}"
                            loading="lazy"
                            class="object-cover w-20 h-20 mb-4 border-4 border-yellow-300 rounded-full shadow"
                        />

                        {{-- Stars --}}
                        <div class="flex mb-2">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="{{ $i <= $item['rating'] ? '#fbbf24' : '#e5e7eb' }}"
                                     class="w-5 h-5">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118l-3.385-2.46c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.967z"/>
                                </svg>
                            @endfor
                        </div>

                        {{-- Nama dan Role --}}
                        <h3 class="mb-1 text-lg font-semibold text-black ">{{ $item['name'] }}</h3>
                        <p class="mb-2 text-sm text-zinc-500 ">Pelanggan</p>

                        {{-- Deskripsi --}}
                        <p class="italic text-center text-wrap text-zinc-700">
                            "{{ \Illuminate\Support\Str::limit($item['description'], 100, '...') }}"
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-scroll {
            display: flex;
            will-change: transform;
        }
    </style>
</div>