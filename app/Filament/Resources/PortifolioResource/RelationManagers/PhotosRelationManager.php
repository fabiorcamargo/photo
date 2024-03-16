<?php

namespace App\Filament\Resources\PortifolioResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PhotosRelationManager extends RelationManager
{
    protected static string $relationship = 'photos';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\SpatieMediaLibraryFileUpload::make('file')
                    ->disk('media')
                    ->collection('portifolio-images')
                    ->multiple()
                    ->hiddenLabel()
                    ->reorderable()
                    //->responsiveImages()
                    ->optimize('webp'),
            ]);

        // SpatieMediaLibraryFileUpload::make('file')
        //     ->conversion('thumb')

    }

    public function table(Table $table): Table
    {
        return $table

            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('file')
                    ->disk('media')
                    ->collection('portifolio-images'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
}
