<?php

namespace App\Filament\Resources\ArtikelResource\Pages;

use App\Filament\Resources\ArtikelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArtikel extends CreateRecord
{
    protected static string $resource = ArtikelResource::class;

     protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id(); // ambil ID user yang login
        return $data;
    }
       public static function mutateFormDataBeforeSave(array $data): array
    {
        // Optional: untuk update juga pakai user login
        $data['user_id'] = auth()->id();
        return $data;
    }
        protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); 
    }
}
