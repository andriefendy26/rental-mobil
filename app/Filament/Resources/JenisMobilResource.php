<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\JenisMobil;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JenisMobilResource\Pages;
use App\Filament\Resources\JenisMobilResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class JenisMobilResource extends Resource
{
    protected static ?string $model = JenisMobil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Armada';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nama'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
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
               RelationManagers\MobilRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJenisMobils::route('/'),
            'create' => Pages\CreateJenisMobil::route('/create'),
            'edit' => Pages\EditJenisMobil::route('/{record}/edit'),
        ];
    }
}
