<?php

namespace App\Filament\Resources\PortifolioPhotoResource\Pages;

use App\Filament\Resources\PortifolioPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortifolioPhoto extends EditRecord
{
    protected static string $resource = PortifolioPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
