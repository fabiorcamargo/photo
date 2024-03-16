<?php

namespace App\Filament\Resources\PortifolioBgResource\Pages;

use App\Filament\Resources\PortifolioBgResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortifolioBgs extends ListRecords
{
    protected static string $resource = PortifolioBgResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
