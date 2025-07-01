@php
    $keunggulanData = [
        ['logo' => 'assets/1.webp', 'judul' => 'Tersedia Pilihan Mobil', 'deskripsi' => 'Berbagai jenis mobil sewa tersedia sesuai kebutuhan perjalanan atau pekerjaan Anda.'],
        ['logo' => 'assets/8.webp', 'judul' => 'Mobil Rental Terawat', 'deskripsi' => 'Selalu dalam kondisi prima, dirawat secara berkala untuk kenyamanan dan keamanan Anda.'],
        ['logo' => 'assets/7.webp', 'judul' => 'Biaya Sewa Terjangkau', 'deskripsi' => 'Harga bersaing untuk semua kalangan, dengan pilihan paket yang fleksibel.'],
        ['logo' => 'assets/6.webp', 'judul' => 'Banyak Paket Sewa', 'deskripsi' => 'Sewa harian, mingguan, hingga bulanan. Bisa disesuaikan dengan kebutuhan Anda.'],
        ['logo' => 'assets/5.webp', 'judul' => 'Layanan 24 Jam', 'deskripsi' => 'Kami siap melayani Anda kapan pun dengan sistem pemesanan yang fleksibel.'],
        ['logo' => 'assets/4.webp', 'judul' => 'Promo & Diskon', 'deskripsi' => 'Manfaatkan berbagai promo dan diskon menarik untuk pelanggan setia kami.'],
    ];
@endphp

<section class="relative overflow-hidden bg-gradient-to-br from-[#800000] via-[#900000] to-[#700000] py-16 text-white">
    {{-- Background Effects --}}
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[url('/pattern.png')] opacity-10"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        <div class="absolute w-32 h-32 rounded-full left-10 top-20 bg-yellow-400/5 blur-xl"></div>
        <div class="absolute w-40 h-40 rounded-full bottom-20 right-10 bg-yellow-400/5 blur-xl"></div>
    </div>

    <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="mb-16 text-center" data-aos="fade-down">
            <h2 class="text-4xl font-bold tracking-wide sm:text-5xl lg:text-6xl">Keunggulan Kami</h2>
            <div class="w-24 h-1 mx-auto mt-4 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-600"></div>
            <p class="max-w-2xl mx-auto mt-6 text-lg leading-relaxed text-zinc-200">
                Keunggulan Rental Mobil Kami Dibandingkan yang Lainnya
            </p>
        </div>

        {{-- Card Grid --}}
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3" data-aos="fade-up" data-aos-delay="100">
            @foreach ($keunggulanData as $item)
                <div class="relative mx-auto cursor-pointer group">
                    {{-- Main Card --}}
                    <div class="relative z-10 flex h-[22rem] w-[22rem] flex-col items-center gap-4 rounded-[54px] border border-zinc-100 bg-gradient-to-br from-white to-zinc-50 px-8 pb-8 pt-6 text-zinc-800 shadow-xl transition-all duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-2xl">
                        {{-- Logo with Glow --}}
                        <div class="relative mb-2">
                            <div class="absolute inset-0 transition-opacity duration-300 rounded-full bg-gradient-to-r from-blue-400 to-purple-500 opacity-20 blur-xl group-hover:opacity-30"></div>
                            <div class="relative p-4 bg-white rounded-full shadow-lg">
                                <img src="{{ asset($item['logo']) }}" alt="{{ $item['judul'] }}" class="object-contain w-20 h-20 transition-transform duration-300 group-hover:scale-110">
                            </div>
                        </div>

                        {{-- Title --}}
                        <h3 class="text-2xl font-bold text-center text-transparent bg-gradient-to-r from-zinc-800 to-zinc-600 bg-clip-text">
                            {{ $item['judul'] }}
                        </h3>

                        {{-- Description --}}
                        <p class="flex-1 px-2 text-sm leading-relaxed text-center text-zinc-600">
                            {{ $item['deskripsi'] }}
                        </p>

                        {{-- Decorative Dots --}}
                        <div class="absolute w-3 h-3 rounded-full right-4 top-4 bg-gradient-to-r from-blue-400 to-purple-500 opacity-60"></div>
                        <div class="absolute w-2 h-2 rounded-full bottom-4 left-4 bg-gradient-to-r from-pink-400 to-red-400 opacity-40"></div>
                    </div>

                    {{-- Shadow Layers --}}
                    <div class="absolute -right-3 top-3 h-[22rem] w-[22rem] rounded-[54px] bg-gradient-to-br from-zinc-300 to-zinc-400 opacity-60 transition-all duration-300 ease-out group-hover:-right-4 group-hover:top-4"></div>
                    <div class="absolute -right-1 top-1 h-[22rem] w-[22rem] rounded-[54px] bg-gradient-to-br from-zinc-200 to-zinc-300 opacity-30 transition-all duration-300 ease-out group-hover:-right-2 group-hover:top-2"></div>
                </div>
            @endforeach
        </div>

        {{-- Bottom Images --}}
        <div class="relative mt-20 lg:mt-32">
            <div class="flex flex-col items-center justify-between gap-8 md:flex-row lg:gap-16">
                <div class="relative flex-1 max-w-md md:max-w-lg lg:max-w-xl" data-aos="fade-right">
                    <div class="absolute rounded-lg -inset-4 bg-gradient-to-r from-yellow-400/20 to-transparent blur-lg"></div>
                    <img src="{{ asset('assets/CarKeunggulan2.webp') }}" alt="Car 1" class="relative object-contain w-full h-auto drop-shadow-2xl" loading="lazy">
                </div>
                <div class="relative flex-1 max-w-md md:max-w-lg lg:max-w-xl" data-aos="fade-left">
                    <div class="absolute rounded-lg -inset-4 bg-gradient-to-l from-yellow-400/20 to-transparent blur-lg"></div>
                    <img src="{{ asset('assets/CarKeunggulan1.webp') }}" alt="Car 2" class="relative object-contain w-full h-auto drop-shadow-2xl" loading="lazy">
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-yellow-400/50 to-transparent"></div>
        </div>
    </div>
</section>
