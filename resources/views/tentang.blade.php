@section('title', 'Tentang Kami – CV Tujuh Sembilan Oto Rentcar Berau')

@section('head')
    {{-- ------------ SEO & Open Graph ------------ --}}
    <title>Tentang Kami – CV Tujuh Sembilan Oto Rentcar Berau</title>
    <meta name="description"
          content="Kenali lebih dekat CV Tujuh Sembilan Oto Rentcar, penyedia layanan rental mobil terpercaya di Berau dengan armada lengkap, bersih, dan tim profesional.">
    <meta name="keywords"
          content="Tentang CV Tujuh Sembilan Oto, rental mobil Berau, sewa mobil Berau, layanan transportasi Berau, profil perusahaan rental Berau">
    <link rel="canonical" href="{{ url('/tentangkami') }}"/>

    {{-- Open Graph --}}
    <meta property="og:type"        content="website" />
    <meta property="og:title"       content="Tentang Kami – CV Tujuh Sembilan Oto Rentcar Berau" />
    <meta property="og:description" content="Profil CV Tujuh Sembilan Oto Rentcar, layanan sewa mobil di Berau yang mengutamakan kenyamanan, keamanan, dan kepuasan pelanggan." />
    <meta property="og:url"         content="{{ url('/tentangkami') }}" />
    <meta property="og:image"       content="{{ asset('assets/tentang1.png') }}" />

    {{-- Twitter Card --}}
    <meta name="twitter:card"        content="summary_large_image" />
    <meta name="twitter:title"       content="Tentang Kami – CV Tujuh Sembilan Oto Rentcar Berau" />
    <meta name="twitter:description" content="CV Tujuh Sembilan Oto Rentcar adalah perusahaan rental mobil di Berau dengan armada terawat dan layanan profesional untuk kebutuhan pribadi dan bisnis." />
    <meta name="twitter:image"       content="{{ asset('assets/tentang1.png') }}" />
@endsection

@php
    // ---------- Data ----------
    $services = [
        ['icon' => '🚗', 'title' => 'Rental Harian',
         'desc' => 'Solusi transportasi fleksibel untuk kebutuhan pribadi dan bisnis dengan berbagai pilihan kendaraan.'],
        ['icon' => '👥', 'title' => 'Rental Bulanan',
         'desc' => 'Paket hemat untuk kebutuhan jangka panjang dengan maintenance dan service yang terjamin.'],
        ['icon' => '🛡️', 'title' => 'Layanan Proyek',
         'desc' => 'Dukungan transportasi khusus untuk proyek pertambangan dan konstruksi dengan armada heavy duty.'],
        ['icon' => '📍', 'title' => 'Antar Jemput',
         'desc' => 'Layanan transportasi door‑to‑door untuk bandara, stasiun, atau lokasi spesifik.'],
    ];

    $features = [
        ['icon' => '🛡️', 'title' => 'Asuransi Lengkap',
         'desc' => 'Semua kendaraan dilengkapi asuransi comprehensive untuk keamanan perjalanan Anda.'],
        ['icon' => '⏰', 'title' => 'Maintenance Berkala',
         'desc' => 'Perawatan rutin dan pengecekan berkala untuk memastikan performa optimal kendaraan.'],
        ['icon' => '🏆', 'title' => 'Driver Berpengalaman',
         'desc' => 'Tim driver profesional dengan pengalaman bertahun‑tahun di berbagai medan.'],
    ];

    // ---------- WhatsApp ----------
    $phoneNumber    = config('app.phone', '6281234567890'); // default contoh
    $rawMessage     = <<<MSG
==============================
*HALO SAYA INGIN MEMESAN*
==============================

Halo *CV Tujuh Sembilan Oto Rent Car*,

Saya tertarik untuk melakukan pemesanan mobil. Mohon informasi lebih lanjut mengenai ketersediaan unit dan proses pemesanan.

🙏 Terima kasih 🙏
📩 Dikirim via https://cvtujuhsembilanotorentcar.com
MSG;
    $encodedMessage = rawurlencode($rawMessage);
@endphp

<x-layouts.layout>
<div class="min-h-screen pt-20 ">

    {{-- ---------- Hero ---------- --}}
    <section class="relative overflow-hidden rounded-tl-[100px] rounded-tr-[100px]">
        <div class="relative px-4 mx-auto max-w-7xl py-14 sm:px-6 lg:px-8">
            <div data-aos="fade-right" class="text-center">
                <h1 class="mb-6 text-3xl font-bold tracking-wide text-zinc-800 md:text-5xl">
                    Tentang <span class="bg-[#800000] bg-clip-text text-transparent">CV Tujuh Sembilan Oto Rentcar Berau</span>
                </h1>
                <div class="w-32 h-1 mx-auto mt-6 bg-gradient-to-r from-yellow-400 to-yellow-600"></div>
                <p class="max-w-3xl mx-auto mt-6 text-lg leading-relaxed text-zinc-600 md:text-xl">
                    Partner Terpercaya untuk Semua Kebutuhan Transportasi Anda
                </p>
            </div>
        </div>
    </section>

    {{-- ---------- Company Description ---------- --}}
    <section data-aos="flip-right" class="px-4 py-20 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="p-10 bg-white border shadow-lg border-zinc-200 rounded-3xl">
            <div class="mb-8 text-center">
                <h2 class="mb-6 text-4xl font-bold text-zinc-800">CV. Tujuh Sembilan Oto</h2>
                <div class="mx-auto mb-6 h-0.5 w-20 bg-yellow-400"></div>
            </div>
            <p class="mb-6 text-lg leading-relaxed text-zinc-600">
                Sejak didirikan, <span class="font-semibold text-red-800">CV. Tujuh Sembilan Oto</span>
                telah menjadi pilihan utama untuk layanan rental mobil di Berau. Kami berkomitmen
                memberikan pengalaman transportasi yang aman, nyaman, dan terpercaya untuk setiap perjalanan Anda.
            </p>
            <p class="text-lg leading-relaxed text-zinc-600">
                Dengan armada yang terawat dan tim profesional berpengalaman, kami siap melayani berbagai
                kebutuhan transportasi, mulai dari keperluan pribadi, bisnis, hingga proyek‑proyek besar di sektor pertambangan.
            </p>
        </div>
    </section>

    {{-- ---------- Vision & Mission ---------- --}}
    <section class="py-20 bg-zinc-50">
        <div class="grid gap-8 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 md:grid-cols-2">
            {{-- Visi --}}
            <div data-aos="flip-up"
                 class="p-8 transition-shadow duration-300 bg-white border shadow-lg border-zinc-200 rounded-3xl hover:shadow-xl">
                <div class="flex items-center justify-center w-16 h-16 mb-6 text-3xl rounded-full bg-gradient-to-br from-red-800 to-red-600">
                    👁️
                </div>
                <h3 class="mb-4 text-2xl font-bold text-zinc-800">Visi Kami</h3>
                <p class="leading-relaxed text-zinc-600">
                    Menjadi penyedia layanan rental mobil terdepan di Kalimantan Timur
                    dengan standar keamanan, kenyamanan, dan kepuasan pelanggan yang tinggi.
                </p>
            </div>
            {{-- Misi --}}
            <div data-aos="flip-up"
                 class="p-8 transition-shadow duration-300 bg-white border shadow-lg border-zinc-200 rounded-3xl hover:shadow-xl">
                <div class="flex items-center justify-center w-16 h-16 mb-6 text-3xl rounded-full bg-gradient-to-br from-red-800 to-red-600">
                    ⚡
                </div>
                <h3 class="mb-4 text-2xl font-bold text-zinc-800">Misi Kami</h3>
                <p class="leading-relaxed text-zinc-600">
                    Menyediakan layanan rental mobil berkualitas tinggi dengan armada terawat,
                    harga kompetitif, dan pelayanan profesional untuk mendukung kesuksesan klien.
                </p>
            </div>
        </div>
    </section>

    {{-- ---------- Services ---------- --}}
    <section class="px-4 py-20 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div data-aos="fade-left" class="mb-16 text-center">
            <h2 class="mb-4 text-4xl font-bold text-zinc-800">Layanan Kami</h2>
            <p class="max-w-2xl mx-auto text-xl text-zinc-600">
                Solusi transportasi lengkap untuk berbagai kebutuhan perjalanan Anda
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($services as $service)
                <div data-aos="fade-right"
                     class="p-8 transition-all duration-300 bg-white border border-zinc-200 rounded-xl hover:scale-105 hover:border-red-300 hover:shadow-lg">
                    <div class="mb-4 text-4xl text-red-800">{{ $service['icon'] }}</div>
                    <h3 class="mb-3 text-xl font-semibold text-zinc-800">{{ $service['title'] }}</h3>
                    <p class="leading-relaxed text-zinc-600">{{ $service['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ---------- Features ---------- --}}
    <section class="py-20 bg-gradient-to-r from-red-800/10 to-red-600/5">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div data-aos="fade-left" class="mb-16 text-center">
                <h2 class="mb-4 text-4xl font-bold text-zinc-800">Mengapa Pilih Kami?</h2>
                <p class="max-w-2xl mx-auto text-xl text-zinc-600">
                    Keunggulan yang membuat kami menjadi pilihan terbaik untuk kebutuhan rental mobil Anda
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                @foreach ($features as $feature)
                    <div data-aos="fade-right"
                         class="p-8 text-center bg-white border shadow-lg border-zinc-200 rounded-xl">
                        <div class="inline-flex items-center justify-center w-12 h-12 mb-4 text-2xl bg-red-100 rounded-full">
                            {{ $feature['icon'] }}
                        </div>
                        <h3 class="mb-3 text-xl font-semibold text-zinc-800">{{ $feature['title'] }}</h3>
                        <p class="leading-relaxed text-zinc-600">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ---------- Fleet Highlight ---------- --}}
    <section data-aos="flip-up" class="px-4 py-20 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="p-10 bg-white border shadow-lg border-zinc-200 rounded-3xl">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <h2 class="mb-6 text-4xl font-bold text-zinc-800">Armada Berkualitas</h2>
                    <p class="mb-6 text-lg text-zinc-600">
                        Kami memiliki berbagai jenis kendaraan, mulai dari mobil ekonomis hingga heavy duty untuk proyek industri.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center space-x-3">
                            <span class="w-2 h-2 bg-red-800 rounded-full"></span>
                            <span class="text-zinc-600">Mobil Pribadi (Sedan, Hatchback, SUV)</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="w-2 h-2 bg-red-800 rounded-full"></span>
                            <span class="text-zinc-600">Mobil Bisnis (MPV, Minibus)</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="w-2 h-2 bg-red-800 rounded-full"></span>
                            <span class="text-zinc-600">Kendaraan Proyek (Pickup, Truk)</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 transform rotate-3 rounded-2xl bg-gradient-to-r from-red-800 to-red-600"></div>
                    <img src="{{ asset('assets/tentang1.png') }}"
                         alt="Armada Kendaraan"
                         class="relative object-cover w-full shadow-2xl h-80 rounded-2xl"/>
                </div>
            </div>
        </div>
    </section>

    {{-- ---------- Call To Action ---------- --}}
    <section class="py-20 bg-zinc-50">
        <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mb-6 text-4xl font-bold text-zinc-800">Siap Memulai Perjalanan?</h2>
            <p class="max-w-2xl mx-auto mb-8 text-xl text-zinc-600">
                Hubungi kami sekarang untuk mendapatkan penawaran terbaik dan konsultasi gratis.
            </p>
            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a href="https://api.whatsapp.com/send?phone={{ $phoneNumber }}&text={{ $encodedMessage }}&type=phone_number&app_absent=0"
                   target="_blank">
                    <button
                        class="px-8 py-4 font-semibold text-white transition-all duration-300 rounded-full shadow-lg bg-gradient-to-r from-red-800 to-red-600 hover:scale-105 hover:from-red-900 hover:to-red-700">
                        Hubungi Sekarang
                    </button>
                </a>
                <a href="{{ url('/armada') }}"
                   class="px-8 py-4 font-semibold text-red-800 transition-all duration-300 border-2 border-red-800 rounded-full hover:scale-105 hover:bg-red-800 hover:text-white">
                    Lihat Armada
                </a>
            </div>
        </div>
    </section>

</div>
</x-layouts.layout>
