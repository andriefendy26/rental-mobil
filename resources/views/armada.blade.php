{{-- resources/views/armada.blade.php --}}
<x-layouts.layout>
   {{-- ------------- SEO & OpenGraph ------------- --}}
    @section('head')
        <title>Rental Mobil Berau – Armada Terbaik | CV Tujuh Sembilan Oto</title>

        <meta name="description"
        content="Rental mobil Berau terbaik dari CV Tujuh Sembilan Oto. Armada nyaman, bersih, dan AC dingin. Cocok untuk wisata, bisnis, atau keperluan proyek.">

        <meta name="keywords"
              content="rental mobil Berau, sewa mobil Berau, armada rental Berau, CV Tujuh Sembilan Oto, sewa mobil harian Berau, mobil ber-AC Berau">
        <link rel="canonical" href="{{ url('/armada') }}"/>

        {{-- Open Graph --}}
        <meta property="og:title" content="Rental Mobil Berau – Armada Terbaik | CV Tujuh Sembilan Oto">
        <meta property="og:description" content="Pilihan armada rental mobil terbaik di Berau. Layanan profesional, harga bersaing, cocok untuk semua kebutuhan perjalanan.">
        <meta property="og:image" content="{{ asset('assets/armada.png') }}">
        <meta property="og:url" content="{{ url('/armada') }}">
        <meta property="og:type" content="website">

        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Rental Mobil Berau – Armada Terbaik | CV Tujuh Sembilan Oto">
        <meta name="twitter:description" content="Sewa mobil Berau dengan armada lengkap dan nyaman. Tersedia untuk harian, mingguan, dan bulanan.">
        <meta name="twitter:image" content="{{ asset('assets/armada.png') }}">
    @endsection

    @php
        /** @var array $mobil   ‑‑ daftar armada, tiap item mirip:
         *        ['merek'=>'...', 'gambar'=>'assets/avanza.webp', 'harga'=>350000,
         *         'transmisi'=>'Manual', 'bahan_bakar'=>'Bensin', 'warna'=>'Hitam', 'kapasitas'=>'7']
         *  @var bool  $loading ‑‑ true | false
         */
        $phone = config('app.phone', '6281234567890');
    @endphp

    {{-- ------------- SECTION HERO ------------- --}}
    <section class="relative py-16 pt-24 overflow-hidden bg-center bg-cover md:bg-fixed"
             style="background-image:url('{{ asset('assets/BGArmada.png') }}')">
        <div class="absolute inset-0 bg-black/80"></div>

        <div class="container relative items-center px-4 mx-auto text-center" data-aos="fade-right">
            <h1 class="text-4xl font-bold text-white sm:text-5xl">Armada Rental Mobil Terbaik di Berau</h1>
            <div class="w-24 h-1 mx-auto mt-4 bg-yellow-400"></div>
            <p class="max-w-xl mx-auto mt-6 mb-6 text-white text-md">
              CV Tujuh Sembilan Oto menyediakan layanan <strong>rental mobil Berau</strong> dengan armada lengkap dan berkualitas. Tersedia mobil untuk keperluan pribadi, wisata, proyek, hingga bisnis. Sewa mobil harian, mingguan, dan bulanan tersedia dengan harga kompetitif.
            </p>
            <p class="text-lg font-semibold text-zinc-200">
                Berikut tipe dan jenis unit armada kami
            </p>
        </div>
        {{-- ------------- SECTION GRID ------------- --}}
        <div class="relative">
            @if ($loading ?? false)
                {{-- -------- LOADING STATE -------- --}}
                <div class="flex flex-col items-center justify-center py-20">
                    <div class="relative mb-8">
                        <div
                            class="h-20 w-20 animate-spin rounded-full border-4 border-[#800000] border-t-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.22.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="mb-2 text-2xl font-semibold text-white">Memuat Armada...</h3>
                    <p class="text-zinc-300">Mohon tunggu sebentar</p>
                </div>
              
            @elseif (count($mobil))
                {{-- -------- GRID OF CARDS -------- --}}
                <div class="grid grid-cols-1 gap-10 p-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                     data-aos="fade-up">
                    @foreach ($mobil as $item)
                        @php
                            $harga     = (int) $item['harga'];
                            $formatted = number_format($harga, 0, ',', '.');
                            $msg = urlencode(
                                "==============================\n*HALO SAYA INGIN MEMESAN*\n==============================\n\n" .
                                "Halo *CV Tujuh Sembilan Oto Rent Car*,\n\n" .
                                "Saya tertarik untuk melakukan pemesanan mobil. Mohon informasi lebih lanjut mengenai " .
                                "ketersediaan unit {$item['merek']} dan proses pemesanan.\n\n🙏 Terima kasih 🙏\n" .
                                "📩 Dikirim via https://cvtujuhsembilanotorentcar.com"
                            );
                        @endphp

                        <div
                            class="overflow-hidden transition-all duration-300 transform bg-white shadow-xl rounded-3xl hover:-translate-y-2 hover:shadow-2xl">
                            {{-- Header --}}
                            <div class="relative pt-3 pb-2 bg-gradient-to-br from-zinc-100/40 to-zinc-200/100">
                                <div class="flex flex-col items-center">
                                    <h2
                                        class="px-4 mb-2 text-2xl font-bold text-center text-zinc-800">{{ $item['merek'] }}</h2>
                                    <img src="{{ asset($item['gambar']) }}"
                                         alt="Rental Mobil {{ $item['merek'] }} Berau"
                                         class="object-contain h-52 w-60 drop-shadow-lg"
                                         loading="lazy">
                                </div>
                            </div>

                            {{-- Body card --}}
                            <div class="bg-gradient-to-b from-[#800000] to-[#600000] text-white">
                                {{-- Price --}}
                                <div class="px-6 py-3 text-center border-b border-white/20">
                                    @if ($harga > 0)
                                        <h2 class="text-4xl font-bold leading-none lg:text-5xl">
                                            {{ $formatted }} <span class="ml-2 text-lg font-medium">IDR</span>
                                        </h2>
                                        <p class="mt-1 text-lg text-white/80">/hari</p>
                                    @else
                                        <h2 class="text-4xl font-bold">HUBUNGI KAMI</h2>
                                    @endif
                                </div>

                                {{-- CTA --}}
                                <div class="px-6 py-3 text-center">
                                    <a href="https://api.whatsapp.com/send?phone={{ $phone }}&text={{ $msg }}&type=phone_number&app_absent=0"
                                       target="_blank">
                                        <button
                                            class="transform rounded-xl bg-white px-8 py-3 font-semibold text-[#800000] shadow-lg transition-all duration-200 hover:scale-105 hover:bg-zinc-100 hover:shadow-xl">
                                            Pesan Sekarang
                                        </button>
                                    </a>
                                </div>

                                {{-- Specs --}}
                                <div class="px-6 pb-4">
                                    <h3 class="mb-2 text-xl font-bold text-center">SPESIFIKASI</h3>
                                    <div class="grid gap-2">
                                        <div
                                            class="flex items-center justify-between py-1 text-sm border-b border-white/20">
                                            <span class="text-white/80">Transmisi</span>
                                            <span class="font-medium">{{ $item['transmisi'] }}</span>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-1 text-sm border-b border-white/20">
                                            <span class="text-white/80">Bahan Bakar</span>
                                            <span class="font-medium">{{ $item['bahan_bakar'] }}</span>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-1 text-sm border-b border-white/20">
                                            <span class="text-white/80">Warna</span>
                                            <span class="font-medium">{{ $item['warna'] }}</span>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-1 text-sm border-b border-white/20">
                                            <span class="text-white/80">Kapasitas</span>
                                            <span
                                                class="font-medium">{{ $item['kapasitas'] ?: 'Menyesuaikan' }}
                                                Orang</span>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-1 text-sm">
                                            <span class="text-white/80">Tahun</span>
                                            <span class="font-medium">Terbaru</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            @else
                {{-- -------- EMPTY STATE -------- --}}
                <div class="flex flex-col items-center justify-center px-4 py-20">
                    <div class="relative mb-8">
                        <div
                            class="flex h-32 w-32 animate-pulse items-center justify-center rounded-full bg-gradient-to-br from-[#800000] to-[#800000]/40 shadow-2xl">
                            <svg class="w-16 h-16 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.22.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="mb-2 text-3xl font-bold text-white">Armada Sedang Dipersiapkan</h3>
                    <p class="max-w-md text-lg text-center text-zinc-300">
                        Tim kami sedang mempersiapkan koleksi kendaraan terbaik untuk Anda.
                        Segera hadir dengan pilihan yang lebih lengkap!
                    </p>
                    <div class="flex mt-8 space-x-3">
                        <div class="w-3 h-3 bg-white rounded-full animate-ping"></div>
                        <div class="w-3 h-3 delay-150 bg-white rounded-full animate-ping"></div>
                        <div class="w-3 h-3 delay-300 bg-white rounded-full animate-ping"></div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</x-layouts.layout>
