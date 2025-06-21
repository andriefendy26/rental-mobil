<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Artikel;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArtikelResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;
    protected static ?string $navigationIcon = 'heroicon-s-presentation-chart-line';
    //  protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
             ->schema([
                Tabs::make('Heading')
                    ->tabs([
                        Tab::make('Cover Blog')
                            ->columnSpanFull()
                            ->schema([
                                FileUpload::make('gambar')
                                    ->image()
                                    // ->enableDownload()
                                    // ->enableOpen()
                                    ->directory('blogs')
                                    // ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                    //     return (string) str($file->getClientOriginalName())->prepend('blogs-');
                                    // }),
                            ]),
                        Tab::make('Description Blog')
                            ->columnSpanFull()
                            ->schema([
                                TextInput::make('judul')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('sub_judul')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('author')
                                    ->required()
                                    ->maxLength(255),
                                TagsInput::make('tags')
                                    ->required()
                                    ->separator(','),
                            ]),
                        Tab::make('Content Blog')
                            ->columnSpanFull()
                            ->schema([
                                RichEditor::make('content')
                                    ->columnSpanFull()
                                    ->required()
                                    ->toolbarButtons([
                                        'attachFiles',
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'codeBlock',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ])
                            ]),
                    ])
                    ->columnSpanFull()
            ]);
    }


    public static function table(Table $table): Table
     {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('judul'),
                // Tables\Columns\TextColumn::make('content'),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('tags'),
                Tables\Columns\TextColumn::make('author'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
