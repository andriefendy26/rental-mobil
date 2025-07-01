{{-- resources/views/artikel.blade.php --}}
<x-layouts.layout>
    {{-- ------------ SEO & Open Graph ------------ --}}
    @section('head')
        <title>Artikel Seputar Rental Mobil – CV Tujuh Sembilan Oto</title>
        <meta name="description"
              content="Baca berbagai artikel, panduan, dan tips bermanfaat seputar layanan rental mobil di Berau agar perjalanan Anda lebih aman dan nyaman.">
        <link rel="canonical" href="{{ url('/artikel') }}"/>

        <meta property="og:type"        content="website">
        <meta property="og:title"       content="Artikel Seputar Rental Mobil – CV Tujuh Sembilan Oto">
        <meta property="og:description" content="Temukan berbagai artikel informatif mengenai tips rental mobil, panduan perjalanan, hingga rekomendasi kendaraan terbaik di Berau.">
        <meta property="og:image"       content="{{ asset('assets/tentang1.png') }}">
        <meta property="og:url"         content="{{ url('/artikel') }}">

        <meta name="twitter:card"        content="summary_large_image">
        <meta name="twitter:title"       content="Artikel Seputar Rental Mobil – CV Tujuh Sembilan Oto">
        <meta name="twitter:description" content="Tips, panduan, dan informasi rental mobil terpercaya di Berau untuk perjalanan Anda.">
        <meta name="twitter:image"       content="{{ asset('assets/tentang1.png') }}">
    @endsection
    {{-- ------------ HALAMAN ------------ --}}
    <div x-data="artikelPage()" class="min-h-screen pt-24 bg-gradient-to-br from-zinc-50 to-blue-50">

        {{-- ---------- HEADER ---------- --}}
        <header class="bg-white border-b shadow-sm">
            <div class="px-4 py-16 mx-auto text-center max-w-7xl" data-aos="fade-right">
                <h1 class="mb-4 text-4xl font-bold text-black md:text-5xl">
                    Artikel & Tips Rental Mobil Terpercaya di Berau
                </h1>

                <p class="max-w-2xl mx-auto text-xl text-zinc-600">
                    Temukan tips, panduan, dan informasi terbaru seputar rental mobil untuk perjalanan yang lebih nyaman
                </p>
            </div>
        </header>

        <main class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">

            {{-- ---------- SEARCH & TOGGLE ---------- --}}
            <section class="p-6 mb-8 bg-white shadow-lg rounded-xl" data-aos="fade-down">
                <div class="flex flex-col items-center justify-between gap-4 lg:flex-row">

                    {{-- Input Cari --}}
                    <div class="relative flex-1 w-full max-w-md">
                        <span class="absolute -translate-y-1/2 text-zinc-700 left-3 top-1/2">🔍</span>
                        <input type="text"
                               x-model="search"
                               placeholder="Cari artikel rental mobil..."
                               class="w-full rounded-lg text-black border border-zinc-300 py-3 pl-10 pr-4 focus:border-transparent focus:ring-2 focus:ring-[#800000]">
                    </div>

                    {{-- Hitung hasil & Toggle Grid/List --}}
                    <div class="flex items-center gap-4">
                        <span x-show="search.trim()"
                              class="text-sm text-zinc-600"
                              x-text="filtered.length + ' artikel ditemukan'"></span>

                        <div class="flex p-1 rounded-lg bg-zinc-100">
                            <button @click="view='grid'"
                                    :class="view==='grid' ? 'bg-white shadow-sm' : 'hover:bg-zinc-200'"
                                    class="p-2 rounded-md"
                                    title="Grid View">⏹️</button>
                            <button @click="view='list'"
                                    :class="view==='list' ? 'bg-white shadow-sm' : 'hover:bg-zinc-200'"
                                    class="p-2 rounded-md"
                                    title="List View">☰</button>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ---------- DAFTAR ARTIKEL ---------- --}}
            <template x-if="filtered.length">
                <div :class="view==='grid'
                              ? 'grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3'
                              : 'space-y-6'">

                    <template x-for="article in filtered" :key="article.id">
                        <article
                            class="overflow-hidden transition-all duration-300 bg-white shadow-lg group rounded-xl hover:-translate-y-1 hover:shadow-xl"
                            :class="view==='list' ? 'flex' : ''">

                            {{-- Gambar --}}
                            <div :class="view==='list' ? 'w-80 flex-shrink-0' : 'w-full'">
                                <img :src="article.gambar"
                                     :alt="article.judul"
                                     class="object-cover w-full transition-transform duration-300 group-hover:scale-105"
                                     :class="view==='list' ? 'h-full' : 'h-48'">
                            </div>

                            {{-- Konten --}}
                            <div class="p-6" :class="view==='list' ? 'flex-1' : ''">

                                <h3 class="mb-2 text-xl font-bold text-zinc-900 transition-colors group-hover:text-[#800000]"
                                    x-text="article.judul"></h3>

                                <p class="mb-4 leading-relaxed text-zinc-600"
                                   x-text="article.sub_judul"></p>

                                {{-- Tags --}}
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <template x-for="tag in article.tags.split(',')" :key="tag">
                                        <span
                                            class="px-2 py-1 text-xs rounded-full text-zinc-600 bg-zinc-100"
                                            x-text="'#' + tag.trim()"></span>
                                    </template>
                                </div>

                                {{-- Footer --}}
                                <div class="flex items-center justify-between pt-4 border-t border-zinc-100">
                                    <div class="flex items-center space-x-3">
                                        <span class="flex h-9 w-9 p-2 items-center justify-center rounded-full bg-[#800000]">
                                            {{ svg('akar-person') }}
                                        </span>
                                        <div>
                                            <p class="text-sm font-medium text-zinc-900"
                                               x-text="article.author"></p>
                                            <div class="flex items-center space-x-1 text-xs text-zinc-500">
                                                {{-- <span>📅</span> --}}
                                                <x-uni-calender-o />
                                                <span x-text="new Date(article.created_at).toLocaleDateString('id-ID')"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a :href="'/artikel/detail/' + article.id"
                                       class="group flex items-center space-x-1 text-sm font-medium text-[#800000] hover:text-[#800000]/70">
                                        <span>Baca Selengkapnya</span> {{ svg('majestic-arrow-right-line') }}
                                    </a>
                                </div>
                            </div>
                        </article>
                    </template>
                </div>
            </template>

            {{-- ---------- EMPTY STATE ---------- --}}
            <template x-if="!filtered.length">
                <div class="py-16 text-center">
                    <div class="flex items-center justify-center w-24 h-24 mx-auto mb-4 rounded-full bg-zinc-100">🔍</div>
                    <h3 class="mb-2 text-xl font-semibold text-zinc-900"
                        x-text="search.trim() ? 'Artikel tidak ditemukan' : 'Belum ada artikel'"></h3>
                    <p class="text-zinc-600"
                       x-text="search.trim()
                                ? 'Tidak ada artikel yang cocok dengan \"' + search + '\". Coba ubah kata kunci pencarian.'
                                : 'Artikel akan muncul di sini ketika tersedia'"></p>

                    <button x-show="search.trim()"
                            @click="search=''"
                            class="mt-4 rounded-lg bg-[#800000] px-4 py-2 text-white transition-colors hover:bg-[#800000]/90">
                        Hapus Pencarian
                    </button>
                </div>
            </template>
        </main>
    </div>

    {{-- ------------ Alpine & Logic ------------ --}}
    @push('scripts')
        {{-- Alpine CDN, gunakan sekali saja di layout jika sudah --}}
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

        <script>
            function artikelPage() {
                return {
                    /* Daftar artikel dikirim dari controller */
                    articles: @json($data),
                    search: '',
                    view: 'grid',
                    /* Hasil terfilter */
                    get filtered() {
                        if (!this.search.trim()) return this.articles;
                        let s = this.search.toLowerCase().trim();
                        return this.articles.filter(a =>
                            (a.judul + ' ' + a.sub_judul + ' ' + a.author + ' ' + a.tags)
                                .toLowerCase()
                                .includes(s)
                        );
                    }
                }
            }
        </script>
    @endpush
</x-layouts.layout>
