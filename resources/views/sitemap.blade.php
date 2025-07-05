<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->

<url>
<loc>{{ url('/') }}</loc>
<lastmod>{{ \Carbon\Carbon::parse(date('Y-m-d H:i:s'))->toIso8601String() }}</lastmod>
<priority>1.00</priority>
</url>

<url>
<loc>{{ url('/armada') }}</loc>
<lastmod>{{ \Carbon\Carbon::parse(date('Y-m-d H:i:s'))->toIso8601String() }}</lastmod>
<priority>0.80</priority>
</url>

<url>
<loc>{{ url('/artikel') }}</loc>
<lastmod>{{ \Carbon\Carbon::parse(date('Y-m-d H:i:s'))->toIso8601String() }}</lastmod>
<priority>0.80</priority>
</url>

<url>
<loc>{{ url('/galeri') }}</loc>
<lastmod>{{ \Carbon\Carbon::parse(date('Y-m-d H:i:s'))->toIso8601String() }}</lastmod>
<priority>0.80</priority>
</url>

<url>
<loc>{{ url('/tentangkami') }}</loc>
<lastmod>{{ \Carbon\Carbon::parse(date('Y-m-d H:i:s'))->toIso8601String() }}</lastmod>
<priority>0.80</priority>
</url>

@foreach ($artikel as $item )
    <url>
    <loc>{{ url('/artikel/detail/'. $item->id) }}</loc>
    <lastmod>{{ \Carbon\Carbon::parse(date('Y-m-d H:i:s'))->toIso8601String() }}</lastmod>
    <priority>1.00</priority>
    </url>
@endforeach


</urlset>