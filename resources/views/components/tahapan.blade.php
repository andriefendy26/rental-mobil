<div class="relative grid grid-cols-1 lg:grid-cols-3">
    <div data-aos="fade-right" class="col-span-1 p-6 space-y-6 md:p-12 lg:col-span-2 lg:space-y-8 lg:px-32">
        
        <!-- Tombol -->
        <button class="px-4 py-2 border-2 border-[#800000]/50 text-[#800000] rounded-lg">
            Tahapan Pemesanan
        </button>

        <!-- Judul -->
        <h2 data-aos="fade-right" class="text-3xl font-bold text-zinc-800 md:text-4xl lg:text-5xl">
            Rental Mobil Dengan 3 Tahap
        </h2>

        <!-- Kartu tahapan -->
        <div class="flex flex-col gap-4 md:flex-row md:gap-3">
            <!-- Tahap 1 -->
            <div data-aos="fade-up" class="relative w-full cursor-pointer group md:h-64 md:w-64 lg:w-60">
                <div class="relative z-10 flex h-full w-full flex-col items-center justify-center overflow-hidden rounded-[64px] border border-red-700/20 bg-gradient-to-br from-red-800 via-red-900 to-red-950 px-8 py-6 shadow-2xl transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-red-900/30">
                    <div class="relative mb-4 transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 transition-opacity duration-300 rounded-full opacity-0 bg-white/20 blur-xl group-hover:opacity-100"></div>
                        <div class="relative p-4 rounded-3xl">
                            <img
                            src="{{ asset('assets/3.webp') }}"
                            class="object-contain w-32 h-auto transition-all duration-300 drop-shadow-lg"
                            alt="Logo"
                            />
                        </div>
                    </div>
                    
                    {{-- {/* Description */} --}}
                    <div class="relative z-10 text-sm font-medium leading-relaxed text-center text-white">
                        Pilih layanan dan lokasi
                    </div>
                </div>

                {{-- {/* Shadow Layers */} --}}
                <div class="absolute inset-0 translate-x-2 translate-y-2 rounded-[64px] bg-red-900/40 blur-sm transition-all duration-300 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                <div class="absolute inset-0 translate-x-1 translate-y-1 rounded-[64px] bg-red-800/20 blur-lg"></div>
            </div>
            <!-- Tahap 2 -->
            <div data-aos="fade-up" class="relative w-full cursor-pointer group md:h-64 md:w-64 lg:w-60">
                <div class="relative z-10 flex h-full w-full flex-col items-center justify-center overflow-hidden rounded-[64px] border border-red-700/20 bg-gradient-to-br from-red-800 via-red-900 to-red-950 px-8 py-6 shadow-2xl transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-red-900/30">
                    <div class="relative mb-4 transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 transition-opacity duration-300 rounded-full opacity-0 bg-white/20 blur-xl group-hover:opacity-100"></div>
                        <div class="relative p-4 rounded-3xl">
                            <img
                            src="{{ asset('assets/2.webp') }}"
                            class="object-contain w-32 h-auto transition-all duration-300 drop-shadow-lg"
                            alt="Logo"
                            />
                        </div>
                    </div>
                    
                    {{-- {/* Description */} --}}
                    <div class="relative z-10 text-sm font-medium leading-relaxed text-center text-white">
                        Tentukan tanggal booking
                    </div>
                </div>

                {{-- {/* Shadow Layers */} --}}
                <div class="absolute inset-0 translate-x-2 translate-y-2 rounded-[64px] bg-red-900/40 blur-sm transition-all duration-300 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                <div class="absolute inset-0 translate-x-1 translate-y-1 rounded-[64px] bg-red-800/20 blur-lg"></div>
            </div>
            <!-- Tahap 3 -->
            <div data-aos="fade-up" class="relative w-full cursor-pointer group md:h-64 md:w-64 lg:w-60">
                <div class="relative z-10 flex h-full w-full flex-col items-center justify-center overflow-hidden rounded-[64px] border border-red-700/20 bg-gradient-to-br from-red-800 via-red-900 to-red-950 px-8 py-6 shadow-2xl transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-red-900/30">
                    <div class="relative mb-4 transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 transition-opacity duration-300 rounded-full opacity-0 bg-white/20 blur-xl group-hover:opacity-100"></div>
                        <div class="relative p-4 rounded-3xl">
                            <img
                            src="{{ asset('assets/1.webp') }}"
                            class="object-contain w-32 h-auto transition-all duration-300 drop-shadow-lg"
                            alt="Logo"
                            />
                        </div>
                    </div>
                    
                    {{-- {/* Description */} --}}
                    <div class="relative z-10 text-sm font-medium leading-relaxed text-center text-white">
                        Pilih layanan dan lokasi
                    </div>
                </div>

                {{-- {/* Shadow Layers */} --}}
                <div class="absolute inset-0 translate-x-2 translate-y-2 rounded-[64px] bg-red-900/40 blur-sm transition-all duration-300 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                <div class="absolute inset-0 translate-x-1 translate-y-1 rounded-[64px] bg-red-800/20 blur-lg"></div>
            </div>
        </div>
    </div>

    <!-- Background Gambar -->
    <div data-aos="fade-left" class="absolute -right-96 -top-64  hidden w-[1000px] overflow-hidden lg:block">
        <img src="{{ asset('assets/HeroBG.webp') }}" alt="">
    </div>
</div>
