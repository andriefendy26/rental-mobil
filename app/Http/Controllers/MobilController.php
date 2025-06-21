<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    //
    public function index()
    {
         $dataMobil = Mobil::all()->map(function ($mobil) {
            // Tambahkan full URL ke gambar
            $mobil->gambar = $mobil->gambar 
                ? asset('storage/' . $mobil->gambar) 
                : null;

            return $mobil;
        });

        return response()->json(
            [
                'status' => 200,
                'data' => [
                    'mobil' => $dataMobil
                ]
            ]
        );  
    }
}
