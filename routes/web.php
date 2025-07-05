<?php

use Illuminate\Support\Facades\Route;
// use Inertia\Inertia;
use App\Models\Artikel;
use App\Models\galery;
use App\Models\Mobil;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/sitemap.xml', function () {
    $artikel = Artikel::latest()->get();
    // $category = artikel->tags;
    return response()->view('sitemap', compact('artikel'))->header('Content-Type','text/xml');
});


Route::get('/', function () {
    $armada = Mobil::all()->map(function ($mobil) {

            $mobil->gambar = $mobil->gambar 
                ? asset('storage/' . $mobil->gambar) 
                : null;

            return $mobil;
        });

    $galeri = galery::all()->map(function ($galeri) {
    // Tambahkan full URL ke gambar
    $galeri->gambar = $galeri->gambar 
        ? asset('storage/' . $galeri->gambar) 
            : null;

        return $galeri;
    });

    return view('welcome', [
        'galeri' => $galeri,
        'armada' => $armada,
        'loading' => false,
    ]);
});

Route::get('/armada', function () {
     $mobil = Mobil::all()->map(function ($mobil) {
            // Tambahkan full URL ke gambar
            $mobil->gambar = $mobil->gambar 
                ? asset('storage/' . $mobil->gambar) 
                : null;

            return $mobil;
        });

    return view('armada', [
        'mobil'   => $mobil,
        'loading' => false, 
    ]);
})->name('armada');

Route::get('/galeri', function () {
    $isLoading = false; // Ubah true untuk simulasi loading
    $data = galery::all()->map(function ($galeri) {
        // Tambahkan full URL ke gambar
        $galeri->gambar = $galeri->gambar 
            ? asset('storage/' . $galeri->gambar) 
                : null;

        return $galeri;
    });
    
    return view('galery', compact('data', 'isLoading'));
});

Route::get('/tentangkami', function () {
    return view('tentang');
});

Route::get('/artikel', function () {
    $data = Artikel::select(
                'id', 'judul', 'sub_judul', 'author',
                'gambar', 'tags', 'created_at', 'updated_at'
            )
            ->latest()
            ->get()
            ->map(function ($data) {
                // Tambahkan full URL ke gambar
                $data->gambar = $data->gambar 
                    ? asset('storage/' . $data->gambar) 
                    : null;

                return $data; // WAJIB ADA agar hasil map tidak NULL
            })
            ->toArray();

    return view('artikel', ['data' => $data]);
})->name('artikel');

Route::get('/artikel/detail/{id}', function ($id) {
    $artikel = \App\Models\Artikel::findOrFail($id);
    $artikel->gambar = $artikel->gambar
        ? asset('storage/' . $artikel->gambar)
        : asset('default/noimage.jpg'); // fallback

    return view('artikel-detail', compact('artikel'));
})->name('artikel.detail');




Route::get('/preview/artikel/{slug}', function ($slug) {
    $artikel = Artikel::where('id', $slug)->firstOrFail();

    return response()->view('preview.artikel', compact('artikel'));
});
