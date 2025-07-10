<footer class="text-white bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900">
  <div class="container px-6 py-16 mx-auto">
    <div class="grid grid-cols-1 gap-12 lg:grid-cols-4">

      <div class="space-y-6 lg:col-span-1">
        <div class="inline-block p-4 bg-white shadow-lg rounded-2xl">
          <img src="{{ asset('assets/Logo.png') }}" class="w-32 h-auto" alt="Logo" />
        </div>
        <div>
          <h2 class="mb-3 text-2xl font-bold text-transparent bg-gradient-to-r from-blue-400 to-emerald-400 bg-clip-text">
            CV. Tujuh Sembilan Oto
          </h2>
          <p class="leading-relaxed text-zinc-300">
            Penyedia jasa rental mobil terpercaya di Berau dengan layanan berkualitas dan armada terawat.
          </p>
        </div>
        {{-- Social Media Icons --}}
        <div class="space-y-3">
          <h3 class="text-lg font-semibold text-white">Connect With Us</h3>
          <div class="flex space-x-4">
            <a href="https://www.facebook.com/ary.190511?rdid=BXAfpPDSbswpRC1y&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1Axd2bnE53%2F#" target="_blank" class="p-3 transition-all duration-300 transform bg-blue-600 rounded-full group hover:scale-110 hover:bg-blue-700 hover:shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12.07C22 6.49 17.52 2 12 2S2 6.49 2 12.07c0 5.02 3.66 9.19 8.44 9.93v-7.02H8.1v-2.91h2.34V9.41c0-2.3 1.37-3.57 3.46-3.57.71 0 1.44.13 1.44.13v1.57h-.81c-.8 0-1.05.5-1.05 1.01v1.22h2.39l-.38 2.91h-2.01V22c4.78-.74 8.44-4.91 8.44-9.93z"/></svg>
            </a>
            <a href="https://www.instagram.com/rental_mobil_berau79/" target="_blank" class="p-3 transition-all duration-300 transform rounded-full group bg-gradient-to-r from-purple-500 to-pink-500 hover:scale-110 hover:from-purple-600 hover:to-pink-600 hover:shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5Zm0 1.5h8.5c2.35 0 4.25 1.9 4.25 4.25v8.5c0 2.35-1.9 4.25-4.25 4.25h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5C3.5 5.9 5.4 4 7.75 4Zm8.5 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm-4.25 2.5a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm0 1.5a3.75 3.75 0 1 1 0 7.5 3.75 3.75 0 0 1 0-7.5Z"/></svg>
            </a>
            <a href="https://www.tiktok.com/@wisda.wis?_t=ZS-8xCD8EIRnTr&_r=1" target="_blank" class="p-3 transition-all duration-300 transform bg-black rounded-full group hover:scale-110 hover:bg-zinc-800 hover:shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M12.354 2.002a1.063 1.063 0 0 0-1.06 1.06v12.515a2.122 2.122 0 0 1-4.243 0 2.122 2.122 0 0 1 2.12-2.121c.294 0 .577.06.833.167a1.06 1.06 0 0 0 .824-1.958 4.235 4.235 0 0 0-1.657-.334 4.242 4.242 0 1 0 4.243 4.243V9.898a7.382 7.382 0 0 0 3.181 1.087 1.06 1.06 0 0 0 1.176-1.057V7.845a1.06 1.06 0 0 0-1.06-1.06 3.18 3.18 0 0 1-3.18-3.18 1.06 1.06 0 0 0-1.06-1.06Z"/></svg>
            </a>
          </div>
        </div>
      </div>

      {{-- Contact Info Section --}}
      <div class="space-y-6 lg:col-span-1">
        <h3 class="pb-2 mb-6 text-xl font-bold text-white border-b border-zinc-700">Hubungi Kami</h3>
        <div class="space-y-4">
          <div class="flex items-start p-3 space-x-3 transition-colors rounded-lg bg-zinc-800/50 hover:bg-zinc-700/50">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-4 h-4 mt-1 text-emerald-400" viewBox="0 0 24 24" fill="currentColor">
            <path d="M2 4.75C2 3.784 2.784 3 3.75 3h1.4c.491 0 .966.161 1.35.457l1.28.985c.455.35.682.926.594 1.49l-.27 1.689a1.25 1.25 0 0 1-.356.666l-.866.866a12.04 12.04 0 0 0 5.232 5.232l.866-.866c.178-.177.407-.3.666-.356l1.689-.27a1.25 1.25 0 0 1 1.49.594l.985 1.28c.296.384.457.859.457 1.35v1.4c0 .966-.784 1.75-1.75 1.75h-.5C8.798 21.5 2.5 15.202 2.5 7.25v-.5Z"/>
            </svg>
            <div class="text-sm text-zinc-300">
              <p class="mb-1">Office</p>
              <div class="space-y-0.5 font-medium text-white">
                <p>+62 813-5029-7868</p>
                <p>+62 822-5627-7516</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Address Section --}}
      <div class="space-y-6 lg:col-span-1">
        <h3 class="pb-2 mb-6 text-xl font-bold text-white border-b border-zinc-700">Alamat Kami</h3>
        <div class="flex items-start p-3 space-x-3 rounded-lg bg-zinc-800/50">
          <div>
            <p class="leading-relaxed text-zinc-300">
              Rumah Warna Kuning, Jln. Garuda Gg. PUA kec. Sambaliung Kab. Berau KALIMANTAN TIMUR NO RUMAH 64, Kabupaten Berau, Kalimantan Timur 77371.
            </p>
          </div>
        </div>
        <div class="mt-6">
          <h4 class="mb-2 text-lg font-semibold text-white">Komitmen Kami</h4>
          <p class="text-sm text-zinc-300">
            Kepuasan dan keamanan pelanggan adalah prioritas utama kami.
          </p>
        </div>
      </div>

      {{-- Map Section --}}
      <div class="lg:col-span-1">
        <h3 class="pb-2 mb-6 text-xl font-bold text-white border-b border-zinc-700">Lokasi Kami</h3>
        <div class="relative overflow-hidden shadow-2xl rounded-2xl">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.4786650673482!2d117.50519919978544!3d2.169927436334606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320df50228e817fb%3A0xeefa67fe773a7698!2sCV.%2079%20OTO%20RENTAL%20MOBIL%20BERAU!5e0!3m2!1sid!2sid!4v1749893345468!5m2!1sid!2sid"
            width="100%" height="250" class="transition-transform duration-300 border-0 hover:scale-105" loading="lazy"></iframe>
          <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
      </div>
    </div>
  </div>

  {{-- Bottom Bar --}}
  <div class="border-t border-zinc-700 bg-zinc-900/50">
    <div class="container px-6 py-6 mx-auto">
      <div class="flex flex-col items-center justify-between space-y-4 md:flex-row md:space-y-0">
        <div class="text-sm text-zinc-400">
          © {{ date('Y') }} CV. Tujuh Sembilan Oto. All rights reserved.
        </div>
        <div class="flex space-x-6 text-sm">
          <a href="#" class="transition-colors text-zinc-400 hover:text-emerald-400">Privacy Policy</a>
          <a href="#" class="transition-colors text-zinc-400 hover:text-emerald-400">Terms of Service</a>
          <a href="#" class="transition-colors text-zinc-400 hover:text-emerald-400">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</footer>
