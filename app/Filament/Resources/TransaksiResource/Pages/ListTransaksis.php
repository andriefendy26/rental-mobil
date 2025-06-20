<?php

namespace App\Filament\Resources\TransaksiResource\Pages;

use App\Filament\Resources\TransaksiResource;
use App\Filament\Resources\TransaksiResource\Widgets\TransaksiLunasTable;
use App\Filament\Resources\TransaksiResource\Widgets\TransaksiPendingTable;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransaksis extends ListRecords
{
    protected static string $resource = TransaksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
      protected function getFooterWidgets(): array
    {
        return [
            TransaksiLunasTable::class,
            // TransaksiPendingTable::class,
        ];
    }
}
