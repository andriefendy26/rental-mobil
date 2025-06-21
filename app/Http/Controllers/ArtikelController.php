<?php

namespace App\Http\Controllers;

use App\Models\Artikel as ModelsArtikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
     public function index()
    {
         $dataArtikel = ModelsArtikel::select('id', 'judul',"sub_judul", 'gambar', "author", "tags","created_at" ,"updated_at")->get()->map(function ($dataArtikel) {
            // Tambahkan full URL ke gambar
            $dataArtikel->gambar = $dataArtikel->gambar 
                ? asset('storage/' . $dataArtikel->gambar) 
                : null;

            return $dataArtikel;
        });

        return response()->json(
            [
                'status' => 200,
                'data' => [
                    'artikel' => $dataArtikel
                ]
            ]
        );  
    }

    public function getById($id){
        $dataArtikel = ModelsArtikel::find($id);
        
        if($dataArtikel){
            $dataArtikel->gambar = $dataArtikel->gambar ? asset('storage/'. $dataArtikel->gambar) : null;
        };

        return response()->json(
            [
                'status' => 200,
                'data' => [
                    'artikel' => $dataArtikel
                ]
            ]
        );     
    }
}
