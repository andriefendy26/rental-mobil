<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $artikel->judul }}</title>

    <!-- Meta SEO -->
    <meta property="og:title" content="{{ $artikel->judul }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($artikel->narasi), 100) }}">
    <meta property="og:image" content="{{ asset('storage/' . $artikel->gambar) }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://cvtujuhsembilanotorentcar.com/artikel/{{ $artikel->id }}">

    <meta name="twitter:card" content="summary_large_image">
</head>
<body>
    <script>
        window.location.href = "https://cvtujuhsembilanotorentcar.com/artikel/detail/{{$artikel->id}}";
    </script>
</body>
</html>
