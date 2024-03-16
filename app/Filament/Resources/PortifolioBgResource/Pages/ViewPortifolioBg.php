<?php

namespace App\Filament\Resources\PortifolioBgResource\Pages;

use App\Filament\Resources\PortifolioBgResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPortifolioBg extends ViewRecord
{
    protected static string $resource = PortifolioBgResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
