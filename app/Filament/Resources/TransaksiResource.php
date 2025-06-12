<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Transaksi;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\TransaksiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TransaksiResource\RelationManagers;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([

        // Select Customer
        Select::make('customer_id')
            ->relationship('customer', 'nama')
            ->createOptionForm([
                TextInput::make('nama')->required(),
            ])
            ->required(),

        // Select Mobil
        Select::make('mobil_id')
            ->relationship('mobil', 'merek')
            ->reactive()
            ->afterStateUpdated(function (callable $set, $state) {
                if ($state) {
                    $mobil = \App\Models\Mobil::find($state);
                    $set('harga_mobil', $mobil->harga ?? 0);
                }
            })
            ->createOptionForm([
                TextInput::make('merek')->required(),
            ])
            ->required(),

        // Select Supir (Opsional)
        Select::make('supir_id')
            ->relationship('supir', 'nama')
            ->reactive()
            ->afterStateUpdated(function (callable $set, $state) {
                if($state){
                    $supir = \App\Models\Supir::find($state);
                    $set('tarif_supir', $supir->tarif ?? 0);
                }
            })
            ->createOptionForm([
                TextInput::make('nama'),
            ]),

        // Tanggal Rental
        DatePicker::make('tanggal_rental')
            ->label('Tanggal Rental')
            ->minDate(Carbon::today())
            ->reactive()
            ->required(),

        // Tanggal Pengembalian
        DatePicker::make('tanggal_pengembalian')
            ->label('Tanggal Pengembalian')
            ->minDate(Carbon::today())
            ->reactive()
            ->afterStateUpdated(function ($state, callable $get, callable $set) {
                $tarif = $get('tarif_supir');
                $harga = $get('harga_mobil');
                $start = $get('tanggal_rental');
                $end = $get('tanggal_pengembalian');

                if ($start && $end && $harga) {
                    $days = Carbon::parse($start)->diffInDays(Carbon::parse($end));
                    $total = $days > 0 ? $days * $harga : 0;
                    if($tarif) {
                        $set('total_biaya', $total + $tarif);
                        return;
                    };
                    $set('total_biaya', $total);
                } else {
                    $set('total_biaya', 0);
                }
            })
            ->required(),

        // Denda
        TextInput::make('denda')
            ->label('Denda')
            ->numeric()
            ->prefix('Rp')
            ->default(0),

        // Harga Supir (disembunyikan)
        Hidden::make('tarif_supir')
            ->dehydrated(false),
        // Harga Mobil (disembunyikan)
        Hidden::make('harga_mobil')
            ->dehydrated(false),

        // Total Harga (otomatis dihitung)
        TextInput::make('total_biaya')
            ->label('Total Biaya')
            ->prefix('Rp')
            ->disabled()
            ->dehydrated()
            ->numeric(),

    ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Customer.nama'),
                TextColumn::make('mobil_id'),
                TextColumn::make('supir_id'),
                TextColumn::make('tanggal_rental'),
                TextColumn::make('tanggal_pengembalian'),
                TextColumn::make('denda'),
                TextColumn::make('total_biaya'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
