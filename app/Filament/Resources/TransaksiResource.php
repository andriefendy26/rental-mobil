<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Transaksi;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use App\Filament\Resources\TransaksiResource\Pages;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Get;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Enums\ActionsPosition;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'bi-archive';
    
    protected static ?string $navigationGroup = 'Transaksi';

    public static function form(Form $form): Form
{
    return $form->schema([

        // Select Customer
        Select::make('customer_id')
            ->relationship('customer', 'nama')
            ->required(),

        Select::make('mobil_id')
            ->relationship('mobil', 'merek')
            ->reactive()
            ->afterStateUpdated(function (callable $set, $state) {
                $mobil = \App\Models\Mobil::find($state);
                if($state || !$state || $state == null || $state == 0 || $state == '') {
                    $set('supir_id', null);
                    $set('total_biaya', null);
                    $set('tanggal_rental', null);
                    $set('tanggal_pengembalian', null);
                }

                if(!$mobil){
                    $set('harga_mobil', 0);
                }else {
                    $set('harga_mobil', $mobil->harga);
                }

            })        
            ->required(),

        // Select Supir (Opsional)
        Select::make('supir_id')
            ->relationship('supir', 'nama')
            ->reactive()
            ->afterStateUpdated(function (Get $get, callable $set, $state) {
                $supir = \App\Models\Supir::find($state);
                $total_harga = $get('total_harga');
                // $tarif_supir = $get('tarif_supir');
                if($state || !$state || $state == null || $state == 0 || $state == '') {
                    $set('total_biaya', null);
                    $set('tanggal_rental', null);
                    $set('tanggal_pengembalian', null);
                }      

                if($supir){
                    $set('tarif_supir', $supir->tarif);
                }else{ 
                    $set('tarif_supir', 0);
                }
            })
            ->nullable(),  
            
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
        // Total Harga (otomatis dihitung)
        Select::make('isDone')
              ->options([
                0 => 'Belum Lunas',
                1 => 'Lunas'
                ])->default(0)->label('Status Transaksi'),
        
    ]);
}

    public static function table(Table $table): Table
    {
        return $table
          ->query(
                 Transaksi::query()->where('isDone', 0) 
            )
            ->columns([
                IconColumn::make('isDone')->boolean()->trueIcon('heroicon-o-check-badge')
                    ->falseIcon('heroicon-o-clock')->falseColor('gray')
                    ->trueColor('success')->label(" ")->alignCenter(),
                TextColumn::make('statusText')->label('Status Transaksi')->getStateUsing(fn ($record) => $record->isDone ? 'Selesai' : 'Menunggu'),
                TextColumn::make('Customer.nama')->searchable(),
                // ImageColumn::make('Customer.foto_ktp')->label('KTP'),
                ImageColumn::make('Mobil.gambar')->label("Mobil"),
                // TextColumn::make('supir_id'),
                TextColumn::make('tanggal_rental'),
                TextColumn::make('tanggal_pengembalian'),
                TextColumn::make('tanggal_pengembalian_sebenarnya')->label("Aktual Pengembalian"),
                TextColumn::make('denda'),
                TextColumn::make('total_biaya'),
            ])
            ->filters([
                //
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->actions([
                Tables\Actions\Action::make('selesaikan')
                ->label('Selesaikan')
                ->icon('heroicon-o-check-circle')
                ->requiresConfirmation()
                ->form([
                    DatePicker::make('tanggal_pengembalian_aktual')
                    ->label('Tanggal Pengembalian Aktual')
                    ->required()
                    ->default(now()),
                    ])
                    ->action(function ($record, array $data) {
                        $tanggalPengembalianRencana = Carbon::parse($record->tanggal_pengembalian);
                        $tanggalAktual = Carbon::parse($data['tanggal_pengembalian_aktual']);
                        
                        // Hitung denda (misal: Rp50.000/hari keterlambatan)
                        $hariTerlambat = $tanggalAktual->greaterThan($tanggalPengembalianRencana)
                        ? $tanggalAktual->diffInDays($tanggalPengembalianRencana)
                        : 0;
                        
                        $dendaPerHari = $record->denda;
                        $dendaTotal = $hariTerlambat * $dendaPerHari;
                        
                        $record->update([
                            'tanggal_pengembalian_sebenarnya' => $tanggalAktual,
                            'total_biaya' => $record->total_biaya + $dendaTotal,
                            'isDone' => 1,
                        ]);
                    })
                    ->visible(fn ($record) => $record->isDone == 0),
                    Tables\Actions\DeleteAction::make()
                    ]
                    // , position: ActionsPosition::BeforeCells
                );
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
