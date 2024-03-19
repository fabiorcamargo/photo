<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortifolioPhotoResource\Pages;
use App\Filament\Resources\PortifolioPhotoResource\RelationManagers;
use App\Models\PortifolioPhoto;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortifolioPhotoResource extends Resource
{
    protected static ?string $model = PortifolioPhoto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('portifolio_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('file')
                    ->required()
                    ->numeric(),
                    Forms\Components\Section::make('Images')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('media')
                            ->collection('portifolio-images')
                            ->disk('media')
                            ->multiple()
                            ->imageEditorAspectRatios([
                                '1:1',
                                '4:5',
                                '9:16',
                                '16:9'
                            ])
                            ->hiddenLabel()
                            ->moveFiles()
                            ->responsiveImages(),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('portifolio.name')
                    ->numeric()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('name')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('description')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('folder')
                // ->searchable(),
                Tables\Columns\ImageColumn::make('file')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('tags')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPortifolioPhotos::route('/'),
            'create' => Pages\CreatePortifolioPhoto::route('/create'),
            'view' => Pages\ViewPortifolioPhoto::route('/{record}'),
            'edit' => Pages\EditPortifolioPhoto::route('/{record}/edit'),
        ];
    }
}
