<?php

namespace App\Filament\Resources\JenisMobilResource\Pages;

use App\Filament\Resources\JenisMobilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisMobil extends EditRecord
{
    protected static string $resource = JenisMobilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
        protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); 
    }
}
