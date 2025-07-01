@props([
    'data' => collect(),
    'isLoading' => false,
])

@php
    $phoneNumber = config('app.phone', '6281234567890');
@endphp

<section
    class="relative overflow-hidden bg-[#464b49] bg-cover bg-center bg-no-repeat py-16 md:bg-fixed"
    style="background-image:url('{{ asset('assets/BGArmada.webp') }}');"
>
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative">
        <div class="container px-4 mx-auto text-center">
            <h2 class="text-4xl font-bold text-white sm:text-5xl">ARMADA KAMI</h2>
            <div class="w-24 h-1 mx-auto mt-4 bg-yellow-400"></div>
            <p class="mt-6 text-lg text-zinc-200">Berikut tipe dan jenis unit armada kami</p>
        </div>

        <div data-aos="fade-right" class="px-4 mx-auto mt-12 xl:mx-32">
            @if ($isLoading)
                <div class="flex flex-col items-center justify-center py-20">
                    <div class="relative mb-8">
                        <div class="w-20 h-20 border-4 border-[#800000] border-t-transparent rounded-full animate-spin"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M18.92 6.01..."/></svg>
                        </div>
                    </div>
                    <h3 class="mb-2 text-2xl font-semibold text-white">Memuat Armada...</h3>
                    <p class="text-zinc-300">Mohon tunggu sebentar</p>
                </div>

            @elseif ($data->count() > 0)
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                <div class="relative pb-12 swiper myArmada">
                    <div class="swiper-wrapper">
                        @foreach ($data as $item)
                            @php
                                $harga = $item->harga ?? 0;
                                $formatted = number_format($harga, 0, ',', '.');
                                $msg = urlencode("==============================\n*HALO SAYA INGIN MEMESAN*\n==============================\n\nHalo *CV Tujuh Sembilan Oto Rent Car*,\n\nSaya tertarik untuk melakukan pemesanan mobil. Mohon informasi lebih lanjut mengenai ketersediaan unit {$item->merek} dan proses pemesanan.\n\n🙏 Terima kasih 🙏  \n📩 Dikirim via http://cvtujuhsembilnotorentcar.com");
                            @endphp

                            <div class="p-4 swiper-slide">
                                <div class="overflow-hidden transition-all duration-300 transform bg-white shadow-xl rounded-3xl hover:-translate-y-2 hover:shadow-2xl">
                                    <div class="relative pt-3 pb-2 bg-gradient-to-br from-zinc-100/40 to-zinc-200">
                                        <div class="flex flex-col items-center">
                                            <h2 class="px-4 mb-2 text-2xl font-bold text-center text-zinc-800">{{ $item->merek }}</h2>
                                            <img src="{{ $item->gambar }}" alt="{{ $item->merek }}" class="object-contain h-52 w-60 drop-shadow-lg" loading="lazy" />
                                        </div>
                                    </div>

                                    <div class="text-white bg-gradient-to-b from-[#800000] to-[#600000]">
                                        <div class="px-6 py-3 text-center border-b border-white/20">
                                            @if ($harga > 0)
                                                <h2 class="text-4xl font-bold leading-none lg:text-5xl">{{ $formatted }} <span class="ml-2 text-lg font-medium">IDR</span></h2>
                                                <p class="mt-1 text-lg text-white/80">/hari</p>
                                            @else
                                                <h2 class="text-4xl font-bold">HUBUNGI KAMI</h2>
                                            @endif
                                        </div>
                                        <div class="px-6 py-3 text-center">
                                            <a href="https://api.whatsapp.com/send?phone={{ $phoneNumber }}&text={{ $msg }}&type=phone_number&app_absent=0" target="_blank">
                                                <button class="px-8 py-3 font-semibold text-[#800000] bg-white rounded-xl shadow-lg transform transition-all duration-200 hover:scale-105 hover:bg-zinc-100 hover:shadow-xl">Pesan Sekarang</button>
                                            </a>
                                        </div>
                                        <div class="px-6 pb-4">
                                            <h3 class="mb-2 text-xl font-bold text-center">SPESIFIKASI</h3>
                                            <div class="grid gap-2">
                                                <div class="flex items-center justify-between py-1 border-b border-white/20"><span class="text-white/80">Transmisi</span><span class="font-medium">{{ $item->transmisi }}</span></div>
                                                <div class="flex items-center justify-between py-1 border-b border-white/20"><span class="text-white/80">Bahan Bakar</span><span class="font-medium">{{ $item->bahan_bakar }}</span></div>
                                                <div class="flex items-center justify-between py-1 border-b border-white/20"><span class="text-white/80">Warna</span><span class="font-medium">{{ $item->warna }}</span></div>
                                                <div class="flex items-center justify-between py-1 border-b border-white/20"><span class="text-white/80">Kapasitas</span><span class="font-medium">{{ $item->kapasitas ? $item->kapasitas . ' Orang' : 'Menyesuaikan' }}</span></div>
                                                <div class="flex items-center justify-between py-1"><span class="text-white/80">Tahun</span><span class="font-medium">Terbaru</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination !bottom-0"></div>
                    <div class="swiper-button-prev">{{ "<" }}</div>
                    <div class="swiper-button-next">{{ ">" }}</div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        new Swiper('.myArmada', {
                            pagination: { el: '.swiper-pagination', clickable: true },
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                            spaceBetween: 30,
                            slidesPerView: 1,
                            breakpoints: {
                                640: { slidesPerView: 2, spaceBetween: 20 },
                                1024: { slidesPerView: 3, spaceBetween: 30 },
                            },
                        });
                    });
                </script>

            @else
                <div class="flex flex-col items-center justify-center px-4 py-20">
                    <div class="relative mb-8">
                        <div class="flex items-center justify-center w-32 h-32 rounded-full shadow-2xl animate-pulse bg-gradient-to-br from-[#800000] to-[#800000]/40">
                            <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M18.92 6.01..."/></svg>
                        </div>
                    </div>
                    <div class="max-w-md space-y-4 text-center">
                        <h3 class="text-3xl font-bold text-white">Armada Sedang Dipersiapkan</h3>
                        <p class="text-lg leading-relaxed text-zinc-300">Tim kami sedang mempersiapkan koleksi kendaraan terbaik untuk Anda.</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
