<section class="relative min-h-screen overflow-hidden rounded-tl-[100px] rounded-tr-[100px]">
    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0 bg-center bg-no-repeat bg-cover md:bg-fixed"
         style="background-image: url('{{ asset('assets/BGHero.webp') }}');">
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/60 to-black/80"></div>
    </div>

    {{-- Content --}}
    <div class="relative">
        {{-- Header --}}
        <div data-aos="fade-up" class="container px-4 pt-20 mx-auto text-center text-white">
            <h2 class="text-4xl font-bold tracking-wide text-white md:text-6xl">TENTANG KAMI</h2>
            <div class="w-32 h-1 mx-auto mt-6 bg-gradient-to-r from-yellow-400 to-yellow-600"></div>
            <p class="mt-6 text-lg md:text-xl">
                Partner Terpercaya untuk Semua Kebutuhan Transportasi Anda
            </p>
        </div>

        {{-- Main Content --}}
        <div class="container px-4 py-16 mx-auto">
            <div class="max-w-6xl mx-auto">
                {{-- Company Description --}}
                <div data-aos="flip-right"
                     class="p-10 mb-20 border rounded-3xl border-white/10 bg-gradient-to-br from-white/15 to-white/5">
                    <div class="mb-8 text-center">
                        <h3 class="mb-6 text-4xl font-bold text-white">CV. Tujuh Sembilan Oto</h3>
                        <div class="mx-auto mb-6 h-0.5 w-20 bg-yellow-400"></div>
                    </div>
                    <div class="grid items-center gap-8 text-white md:grid-cols-1 ">
                        <div>
                            <p class="mb-6 text-lg leading-relaxed text-gray-200">
                                Sejak didirikan,
                                <span class="font-semibold text-yellow-400">CV. Tujuh Sembilan Oto</span>
                                telah menjadi pilihan utama untuk layanan rental mobil di Berau. Kami berkomitmen
                                memberikan pengalaman transportasi yang aman, nyaman, dan terpercaya untuk setiap
                                perjalanan Anda.
                            </p>
                            <p class="text-lg leading-relaxed text-gray-200">
                                Dengan armada yang terawat dan tim profesional berpengalaman, kami siap melayani
                                berbagai kebutuhan transportasi, mulai dari keperluan pribadi, bisnis, hingga
                                proyek-proyek besar di sektor pertambangan.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Vision & Mission --}}
                <div class="grid gap-8 mb-20 text-white md:grid-cols-2">
                    <div data-aos="fade-right"
                         class="p-8 border rounded-3xl border-white/10 bg-gradient-to-br from-white/20 to-gray/10">
                        <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-[#800000] to-[#a00000]">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h4 class="mb-4 text-2xl font-bold text-white">Visi Kami</h4>
                        <p class="leading-relaxed text-gray-200">
                            Menjadi penyedia layanan rental mobil terdepan di Kalimantan Timur yang memberikan solusi
                            transportasi terbaik dengan standar keamanan, kenyamanan, dan kepuasan pelanggan yang
                            tinggi.
                        </p>
                    </div>

                    <div data-aos="fade-left"
                         class="rounded-3xl border border-white/10 bg-gradient-to-br from-[#800000]/20 to-[#800000]/10 p-8">
                        <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-[#800000] to-[#a00000]">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h4 class="mb-4 text-2xl font-bold text-white">Misi Kami</h4>
                        <p class="leading-relaxed text-gray-200">
                            Menyediakan layanan rental mobil berkualitas tinggi dengan armada terawat, harga kompetitif,
                            dan pelayanan profesional untuk mendukung mobilitas dan kesuksesan bisnis klien.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
