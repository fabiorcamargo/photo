<?php

namespace App\Filament\Resources\PortifolioResource\Pages;

use App\Filament\Resources\PortifolioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortifolios extends ListRecords
{
    protected static string $resource = PortifolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
