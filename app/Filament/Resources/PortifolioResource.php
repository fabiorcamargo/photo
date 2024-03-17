<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortifolioResource\Pages;
use App\Filament\Resources\PortifolioResource\RelationManagers;
use App\Filament\Resources\PortifolioResource\RelationManagers\PhotosRelationManager;
use App\Forms\Components\ImageSelectField;
use App\Models\Portifolio;
use App\Models\PortifolioPhoto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortifolioResource extends Resource
{
    protected static ?string $model = Portifolio::class;

    protected static ?string $navigationIcon = 'heroicon-s-photo';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TagsInput::make('tags')
                    ->default(null),
                Forms\Components\TextInput::make('category')
                    ->maxLength(255)
                    ->default(null)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tags')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bg')
                    ->searchable(),
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
            PhotosRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortifolios::route('/'),
            'create' => Pages\CreatePortifolio::route('/create'),
            'view' => Pages\ViewPortifolio::route('/{record}'),
            'edit' => Pages\EditPortifolio::route('/{record}/edit'),
        ];
    }
}
