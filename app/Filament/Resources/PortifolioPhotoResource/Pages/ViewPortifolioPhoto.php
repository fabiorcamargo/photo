<?php

namespace App\Filament\Resources\PortifolioPhotoResource\Pages;

use App\Filament\Resources\PortifolioPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPortifolioPhoto extends ViewRecord
{
    protected static string $resource = PortifolioPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
