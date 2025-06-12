<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Supir;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SupirResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SupirResource\RelationManagers;

class SupirResource extends Resource
{
    protected static ?string $model = Supir::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                 Forms\Components\TextInput::make('nama')->label('Nama'),
                 Forms\Components\Select::make('jenis_kelamin')->label('Jenis Kelamin')->options([
                    'Laki Laki' => 'Laki Laki',
                    'Perempuan' => 'Perempuan',
                 ]),
                 Forms\Components\TextInput::make('NIK')->label('NIK')->numeric(),
                 Forms\Components\TextInput::make('no_sim')->label('No Sim')->numeric(),
                 Forms\Components\TextInput::make('telpon')->label('Telpon')->numeric(),
                 Forms\Components\TextInput::make('alamat')->label('Alamat'),
                 Forms\Components\Select::make('status')->label('Status')->options([
                     'busy' => 'busy',
                     'free' => 'free',
                     'booked' => 'booked',
                    ]),
                Forms\Components\TextInput::make('tarif')->label('Tarif')->numeric()->prefix('Rp'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nama'),
                TextColumn::make('jenis_kelamin'),
                TextColumn::make('NIK'),
                TextColumn::make('no_sim'),
                TextColumn::make('telpon'),
                TextColumn::make('alamat'),
                TextColumn::make('status'),
                TextColumn::make('tarif'),
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
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSupirs::route('/'),
            'create' => Pages\CreateSupir::route('/create'),
            'edit' => Pages\EditSupir::route('/{record}/edit'),
        ];
    }
}
