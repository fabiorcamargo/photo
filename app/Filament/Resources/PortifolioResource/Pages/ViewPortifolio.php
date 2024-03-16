<?php

namespace App\Filament\Resources\PortifolioResource\Pages;

use App\Filament\Resources\PortifolioResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPortifolio extends ViewRecord
{
    protected static string $resource = PortifolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
