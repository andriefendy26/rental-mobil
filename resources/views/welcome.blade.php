@php
  $testimoni = [
    [
      "rating" => 5,
      "name"=> "Yusri Pratama",
      "description"=>
        "obil disini selama seminggu, terbaik lah pelayanannya, mobilnya oke mantap, intinya terbaik lah, siapa yg mau rental disini aku rekomend banget guysTempat rental mobil terbaik, saya pernah rental mobil disini selama seminggu, terbaik lah pelayanannya, mobilnya oke mantap, intinya terbaik lah, siapa yg mau rental disini aku rekomend banget guys",
      "image"=>
        "https://lh3.googleusercontent.com/a-/ALV-UjVrYLSpXXjp0qhJpCBQMkpt19nj57On2ub6qxRmwvFJRkCx21bH=s30-c-rp-mo-br100",
    ],
    [
      "rating"=> 5,
      "name"=> "Asbudi",
      "description"=>
        "Mobilnya bagus, biaya sewa terjangkau, ownernya fast respon..jadi nyaman rental disini..",
      "image"=>
        "https://lh3.googleusercontent.com/a/ACg8ocIshWN6tLk_d9fhz9ywbJNQuID-yFnw_viCiJgU7493oQAS3wo=w41-h41-p-rp-mo-br100",
    ],
    [
      "rating"=> 5,
      "name"=> "Suprianto Haseng",
      "description"=>
        "Saya sangat puas dengan layanan rental mobil ini! Proses pemesanan yang mudah dan cepat, sangat ramah serta membantu. Mobil yang ada dalam kondisi bersih dan terawat dengan baik, memberikan kenyamanan selama perjalanan. Selain itu, harga yang ditawarkan juga sangat kompetitif.",
      "image"=>
        "https://lh3.googleusercontent.com/a-/ALV-UjVobm_tovNcb9BFjwi6lLAs9VzHzpZE5K5Pkmn2s0Fts2I_glgCpw=w41-h41-p-rp-mo-br100",
],
    [
      "rating"=> 5,
      "name"=> "Salma Arsyad",
      "description"=>
        "Pelayanan nya super baik, owner nya ramah pokoknya mantul jgn lupa rental mobil disini ya",
      "image"=>
        "https://lh3.googleusercontent.com/a-/ALV-UjW0oHi2Lgv-VbUV-wbibh6Mx0BgNAhDNRA4faGLq-ofh6ifjkg=w41-h41-p-rp-mo-br100",
],
[
      "rating"=> 5,
      "name"=> "Zuria Suriaa",
      "description"=>
        "Sudah langganan rental mobil di sini Bahkan perna juga kontrak bulanan Unit lengkap bersih Pelayanannya sangat baik terpercaya, free juga antar antar jemput bandara",
      "image"=>
        "https://lh3.googleusercontent.com/a-/ALV-UjXImwV_7V46a-Ayl5V9ENlRvAMDWGTnKvV1ArT-QcKFNUWOAqhsEA=w41-h41-p-rp-mo-br100",
],
    [
      "rating"=> 5,
      "name"=> "Ria Asriani",
      "description"=>
        "Worthy banget sih menurutku, aku rekomendasi kan buat kalian yang lagi cari mobil rental dibagian berau dan sekitarnya😍",
      "image"=>
        "https://lh3.googleusercontent.com/a/ACg8ocIRCx2I2Fhp_iUcP9U4tdNlPXD4REq_DuxYX275Y4Sq0cfgcA=w41-h41-p-rp-mo-br100",
],
    [
      "rating"=> 5,
      "name"=> "drmais",
      "description"=>
        "Respon admin cepat dan ramah melalui WhatsApp atau telepon. Proses pemesanan juga mudah dan transparan, tanpa biaya tersembunyi. Cocok untuk kebutuhan wisata, perjalanan bisnis, proyek lapangan, atau antar-jemput",
      "image"=>
        "https://lh3.googleusercontent.com/a-/ALV-UjXlEBj-gklwrT5dv1FRcPeYEqyocgZ76C0NB867Z0D1ve6PcC0=w41-h41-p-rp-mo-br100",
],
    [
      "rating"=> 5,
      "name"=> "Roezdieana Florin",
      "description"=>
        "Suka rental disini, pelayanannya ramah, baik dan yang pasti mobil nya bersih dan bagus.. Pokok nya best",
      "image"=>
        "https://lh3.googleusercontent.com/a-/ALV-UjWaO8Muu8TojMH907tTQzXj1a53w_tkbLMRlHXAloXg8tyH_4g=w41-h41-p-rp-mo-br100",
],
    [
      "rating"=> 5,
      "name"=> "Tika Sartika",
      "description"=>"Mobil Tepat waktu,aman & nyaman.",
      "image"=>
        "https://lh3.googleusercontent.com/a-/ALV-UjXMXdfZBRACOx8CBaQNfQY1whX5RlCpz-xpGISaTY7gzSJaBok=w41-h41-p-rp-mo-br100",
],
    ];
//    $galeri = [
//         ['gambar' => asset('assets/1.webp')],
//         ['gambar' => asset('assets/2.webp')],
//         ['gambar' => asset('assets/3.webp')],
//     ];
    $armadaDummy = [
        [
            'merek' => 'Toyota Avanza',
            'gambar' => asset('assets/avanza.webp'),
            'harga' => 350000,
            'transmisi' => 'Manual',
            'bahan_bakar' => 'Bensin',
            'warna' => 'Hitam',
            'kapasitas' => '7',
        ],
        [
            'merek' => 'Daihatsu Xenia',
            'gambar' => asset('assets/xenia.webp'),
            'harga' => 330000,
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'warna' => 'Putih',
            'kapasitas' => '7',
        ],
    ];

    $phoneNumber = config('app.phone'); // Contoh: '6281234567890'
    $message = <<<TEXT
==============================
*HALO SAYA INGIN MEMESAN*
==============================

Halo *CV Tujuh Sembilan Oto Rent Car*,

Saya tertarik untuk melakukan pemesanan mobil. Mohon informasi lebih lanjut mengenai ketersediaan unit dan proses pemesanan.

🙏 Terima kasih 🙏
📩 Dikirim via http://cvtujuhsembilnotorentcar.com
TEXT;

    $encodedMessage = urlencode($message);
@endphp

<x-layouts.layout>
        @section('head')
          <meta charset="UTF-8" />
            <!-- <link rel="icon" type="image/svg+xml" href="/vite.svg" /> -->
            <title>Rental Berau CV Tujuh Sembilan</title>
            <meta
            name="description"
            content="Rental mobil terpercaya di Berau. CV. Tujuh Sembilan Oto menyediakan armada berkualitas dan layanan profesional untuk perjalanan pribadi, bisnis, hingga proyek tambang."
        />
            <link rel="icon" type="image/png" href="/Logo.png" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Rental Mobil Berau Termurah | CV Tujuh Sembilan Oto Rentcar</title>
            <meta
            name="keywords"
            content="rental mobil Berau, sewa mobil Berau, harga rental mobil Berau, rental mobil murah Berau, rental mobil harian Berau, rental mobil mingguan Berau, rental mobil bulanan Berau, rental mobil lepas kunci Berau, rental mobil dengan sopir Berau, rental mobil terpercaya Berau, sewa mobil bandara Kalimarau, antar jemput Bandara Berau, sewa mobil Innova Berau, sewa Avanza Berau, rental Fortuner Berau, sewa Hiace Berau, mobil untuk proyek tambang Berau, rental mobil perusahaan Berau, sewa mobil operasional Berau, rental mobil wedding Berau, CV Tujuh Sembilan Oto, Tujuh Sembilan Oto Rentcar, mobil sewaan Berau, layanan sewa mobil Berau, jasa transportasi Berau, rental mobil 24 jam Berau, rental mobil pariwisata Berau, rental mobil elf Berau"
            />

            <meta name="author" content="CV Tujuh Sembilan Oto Rentcar" />

            <link rel="canonical" href="https://www.cvtujuhsembilanotorentcar.com/" />

            <link rel="icon" type="image/png" href="/Logo.png" />

            <meta property="og:type" content="website" />
            <meta
            property="og:url"
            content="https://www.cvtujuhsembilanotorentcar.com/"
            />
            <meta
            property="og:title"
            content="Rental Mobil Berau Termurah | CV Tujuh Sembilan Oto Rentcar"
            />
            <meta
            property="og:description"
            content="Rental mobil terpercaya dan terjangkau di Berau. Layanan cepat, aman, dan profesional untuk semua kebutuhan transportasi Anda."
            />
            <meta
            property="og:image"
            content="https://www.cvtujuhsembilanotorentcar.com/Logo.png"
            />

            <meta name="twitter:card" content="summary_large_image" />
            <meta
            name="twitter:title"
            content="Rental Mobil Berau Termurah | CV Tujuh Sembilan Oto Rentcar"
            />
            <meta
            name="twitter:description"
            content="Rental mobil terpercaya dan terjangkau di Berau. Layanan cepat, aman, dan profesional untuk semua kebutuhan transportasi Anda."
            />
            <meta
            name="twitter:image"
            content="https://www.cvtujuhsembilanotorentcar.com/Logo.png"
            />
        @endsection
        <div class="relative flex min-h-screen items-center justify-center overflow-hidden rounded-b-[50px] md:rounded-b-[100px]">
        {{-- Background Image (Optional) --}}

        <div class="absolute inset-0 z-10 bg-center bg-no-repeat bg-cover md:bg-fixed"
             style="background-image: url('{{ asset('assets/BGHero.webp') }}');"></div> 
       

        <!-- Overlay -->
        <div class="absolute inset-0 z-20 bg-black opacity-60"></div>

        <!-- Hero Content -->
        <div class="relative z-30 max-w-2xl px-4 text-center animate-fade-in-up">
            <h1 class="mb-6 text-4xl font-bold text-white md:text-5xl">
                Rental Terbaik untuk <span id="typewriter" class="inline-block tracking-wide"></span> Anda
            </h1>
            <h2 class="mb-8 text-lg text-white md:text-xl">
                Nikmati perjalanan nyaman dengan armada kendaraan berkualitas dan layanan terpercaya dari Tujuh Sembilan Oto Rental Berau.
            </h2>
            <div class="flex justify-center gap-4 font-semibold">
                <a href="{{ url('/armada') }}">
                    <button class="bg-[#800000] py-2 px-4 rounded-xl transition-all duration-300 hover:scale-110">Lihat Armada Kami</button>
                </a>
                <a href="https://api.whatsapp.com/send/?phone={{ $phoneNumber }}&text={{ $encodedMessage }}&type=phone_number&app_absent=0"
                   target="_blank">
                    <button class="px-4 py-2 text-black transition-all duration-300 bg-white rounded-xl hover:scale-110">Pesan Sekarang</button>
                </a>
            </div>
        </div>
    </div>

    {{-- <x-booking-section></x-booking-section> --}}
    @include('components.booking-section', ['data' => $armada, 'isLoading' => false])
    <x-tahapan></x-tahapan>
    <x-about></x-about>
    <x-keunggulan></x-keunggulan>
      {{-- {{ dd($armada) }} --}}
      @include('components.armada', ['data' => $armada, 'isLoading' => false])
      @include('components.galeri', ['data' => $galeri, 'isLoading' => false])

    {{-- <x-armada :data="$armada" :is-loading="false" /> --}}
    {{-- <x-galeri :data="$galeri" :is-loading="false" /> --}}
    <x-testimoni :data="$testimoni" />


    <!-- Typewriter Animation -->
    <script>
        const words = ["Kebutuhan", "Perjalanan"];
        let currentWord = 0;
        let currentChar = 0;
        const el = document.getElementById("typewriter");

        function type() {
            if (currentChar < words[currentWord].length) {
                el.innerHTML += words[currentWord].charAt(currentChar);
                currentChar++;
                setTimeout(type, 80);
            } else {
                setTimeout(erase, 1000);
            }
        }

        function erase() {
            if (currentChar > 0) {
                el.innerHTML = el.innerHTML.slice(0, -1);
                currentChar--;
                setTimeout(erase, 50);
            } else {
                currentWord = (currentWord + 1) % words.length;
                setTimeout(type, 100);
            }
        }

        document.addEventListener("DOMContentLoaded", type);
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#3085d6'
            });
        @endif
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <!-- Fade In Animation -->
    <style>
        .animate-fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</x-layouts.layout>