<?php

namespace App\Http\Controllers;

use App\Models\galery;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    //
        public function index()
    {
         $dataGaleri = galery::all()->map(function ($galeri) {
            // Tambahkan full URL ke gambar
            $galeri->gambar = $galeri->gambar 
                ? asset('storage/' . $galeri->gambar) 
                : null;

            return $galeri;
        });

        return response()->json(
            [
                'status' => 200,
                'data' => [
                    'galeri' => $dataGaleri
                ]
            ]
        );  
    }
}
