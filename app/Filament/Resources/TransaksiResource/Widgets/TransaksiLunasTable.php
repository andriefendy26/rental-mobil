<?php

namespace App\Filament\Resources\TransaksiResource\Widgets;

use App\Models\Transaksi;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class TransaksiLunasTable extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                 Transaksi::query()->where('isDone', 1) 
            )
            ->columns([
                // ...
                IconColumn::make('isDone')->boolean()->trueIcon('heroicon-o-check-badge')
                    ->falseIcon('heroicon-o-clock')->falseColor('gray')
                    ->trueColor('success')->label(" ")->alignCenter(),
                TextColumn::make('statusText')->label('Status Transaksi')->getStateUsing(fn ($record) => $record->isDone ? 'Selesai' : 'Menunggu'),
                TextColumn::make('Customer.nama'),
                ImageColumn::make('Customer.foto_ktp')->label('KTP'),
                TextColumn::make('mobil_id'),
                TextColumn::make('supir_id'),
                TextColumn::make('tanggal_rental'),
                TextColumn::make('tanggal_pengembalian'),
                TextColumn::make('denda'),
                TextColumn::make('total_biaya'),
            ]);
    }
}
