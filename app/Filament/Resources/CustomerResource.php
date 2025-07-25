<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Customer;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CustomerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CustomerResource\RelationManagers;
use Filament\Tables\Columns\ImageColumn;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-m-user-group';
    protected static ?string $navigationGroup = 'Transaksi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->label('Nama'),
                 Forms\Components\Select::make('jenis_kelamin')->label('Jenis Kelamin')->options([
                    'Laki Laki' => 'Laki Laki',
                    'Perempuan' => 'Perempuan',
                 ]),
                 Forms\Components\TextInput::make('telpon')->label('Telpon')->numeric(),
                 Forms\Components\TextInput::make('alamat')->label('Alamat'),
                 Forms\Components\TextInput::make('NIK')->label('NIK')->numeric(),
                 Forms\Components\FileUpload::make('foto_ktp')->image(),
                ]); 
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->searchable(),
                TextColumn::make('NIK')->searchable(),
                TextColumn::make('jenis_kelamin'),
                TextColumn::make('telpon'),
                TextColumn::make('alamat'),
                ImageColumn::make('foto_ktp'),
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
