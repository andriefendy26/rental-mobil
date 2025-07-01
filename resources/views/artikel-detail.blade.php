<x-layouts.layout>
    @section('head')
        <title>{{ $artikel->judul }} – CV Tujuh Sembilan Oto</title> 
        <meta name="description" content="{{ $artikel->sub_judul ?? Str::limit(strip_tags($artikel->content), 155) }}">
        <meta name="keywords" content="{{ $artikel->tags }}">
        <link rel="canonical" href="{{ url('/artikel/detail/' . $artikel->id) }}" />

        {{-- Open Graph --}}
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{ $artikel->judul }} – CV Tujuh Sembilan Oto" />
        <meta property="og:description" content="{{ $artikel->sub_judul ?? Str::limit(strip_tags($artikel->content), 155) }}" />
        <meta property="og:image" content="{{ $artikel->gambar }}" />
        <meta property="og:url" content="{{ url('/artikel/detail/' . $artikel->id) }}" />

        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{ $artikel->judul }} – CV Tujuh Sembilan Oto" />
        <meta name="twitter:description" content="{{ $artikel->sub_judul ?? Str::limit(strip_tags($artikel->content), 155) }}" />
        <meta name="twitter:image" content="{{ $artikel->gambar }}" />
    @endsection
    <div class="min-h-screen pt-20 bg-zinc-50 force-light">
        {{-- Breadcrumb & Back Button --}}
        <div class="bg-white border-b shadow-sm">
            <div class="max-w-4xl px-4 py-4 mx-auto">
                <div class="flex items-center text-sm text-zinc-500">
                    <a href="{{ route('artikel') }}" class="flex items-center text-zinc-600 hover:text-[#800000]">
                        <span class="w-6 h-6 mr-2">{{ svg('majestic-arrow-left-line') }}</span> Kembali ke Blog
                    </a>
                </div>
            </div>
        </div>

        {{-- Artikel Detail --}}
        <div class="max-w-4xl px-4 py-10 mx-auto">
            <header class="mb-10">
                <h1 class="mb-4 text-4xl font-bold text-zinc-900">{{ $artikel->judul }}</h1>
                <p class="mb-6 text-xl leading-relaxed text-zinc-600">{{ $artikel->sub_judul }}</p>
            </header>

            {{-- Gambar Artikel --}}
            @if ($artikel->gambar)
                <div class="mb-8">
                    <img src="{{ $artikel->gambar }}" alt="{{ $artikel->judul }}"
                         class="object-cover w-full shadow h-96 rounded-xl" />
                </div>
            @endif

            {{-- Konten Artikel --}}
         <article class="prose prose-lg max-w-none [&_*]:!text-zinc-800">
            <div class="p-6 bg-white border shadow rounded-xl">
                {!! Purifier::clean($artikel->content) !!}
            </div>
        </article>

            {{-- Tags --}}
            @if ($artikel->tags)
                <div class="pt-6 mt-10 border-t">
                    <h3 class="mb-4 text-lg font-semibold text-zinc-900">🏷️ Tags:</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach (explode(',', $artikel->tags) as $tag)
                            <span class="px-3 py-1 text-sm rounded-full bg-zinc-100 text-zinc-700">
                                #{{ trim($tag) }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-layouts.layout>
