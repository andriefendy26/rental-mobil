<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Mobil;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MobilResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MobilResource\RelationManagers;
use Filament\Tables\Columns\ImageColumn;

class MobilResource extends Resource
{
    protected static ?string $model = Mobil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Armada';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('merek')->label('Merek Mobil')->require(),
                Forms\Components\TextInput::make('no_plat')->label('No Plat'),
                Forms\Components\TextInput::make('harga')->label('Harga Rental / Hari')->prefix('Rp')->numeric(),
                Forms\Components\Select::make('status')->label('Status')
                ->options([
                    'Jalan' => 'Jalan',
                    'Dipesan' => 'Dipesan',
                    'Kosong' => 'Kosong',
                    ])
                    ->required()->default('Kosong'),
                Forms\Components\Select::make('jenis_mobil_id')->relationship('JenisMobil', 'nama')->createOptionForm([
                   TextInput::make('nama'),
                ]),
                Forms\Components\TextInput::make('kapasitas')->label('Kapasitas')->numeric(),
                Forms\Components\TextInput::make('warna')->label('Warna')->default('Menyesuaikan'),
                Forms\Components\Select::make('bahan_bakar')->label('Bahan Bakar')->options([
                    'Solar' => 'Solar',
                    'Bensin/Solar' => 'Bensin/Solar',
                    'Bensin' => 'Bensin',
                    'Premium' => 'Premium',
                    'Pertalite' => 'Pertalite',
                    'Pertamax' => 'Pertamax',
                    'Pertamax Green' => 'Pertamax Green',
                    'Pertamax Turbo' => 'Pertamax Turbo',
                    'Pertamax Racing' => 'Pertamax Racing',
                ]),
                Forms\Components\Select::make('transmisi')->label('Transmisi')->options([
                    'Manual' => 'Manual',
                    'Otomatis' => 'Otomatis',
                    'CVT' => 'CVT',
                    'DCT' => 'DCT',
                    'AMT' => 'AMT',
                    'AT/MT' => 'AT/MT'
                ]),
                Forms\Components\FileUpload::make('gambar')->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                // TextColumn::make('no_mobil'),
                // TextColumn::make('nama_mobil'),
                TextColumn::make('merek'),
                TextColumn::make('no_plat'),
                TextColumn::make('harga'),
                TextColumn::make('status'),
                TextColumn::make('kapasitas'),
                TextColumn::make('warna'),
                TextColumn::make('bahan_bakar'),
                TextColumn::make('transmisi'),
                TextColumn::make('jenisMobil.nama')->label("Jenis"),
                ImageColumn::make('gambar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            // RelationManagers\JenisMobilsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMobils::route('/'),
            'create' => Pages\CreateMobil::route('/create'),
            'edit' => Pages\EditMobil::route('/{record}/edit'),
        ];
    }
    
}
