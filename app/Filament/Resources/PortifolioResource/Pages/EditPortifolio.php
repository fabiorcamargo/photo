<?php

namespace App\Filament\Resources\PortifolioResource\Pages;

use App\Filament\Resources\PortifolioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortifolio extends EditRecord
{
    protected static string $resource = PortifolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
