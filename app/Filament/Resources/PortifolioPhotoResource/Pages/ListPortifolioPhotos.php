<?php

namespace App\Filament\Resources\PortifolioPhotoResource\Pages;

use App\Filament\Resources\PortifolioPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortifolioPhotos extends ListRecords
{
    protected static string $resource = PortifolioPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
