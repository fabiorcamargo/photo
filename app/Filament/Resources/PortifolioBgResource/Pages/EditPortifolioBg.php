<?php

namespace App\Filament\Resources\PortifolioBgResource\Pages;

use App\Filament\Resources\PortifolioBgResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortifolioBg extends EditRecord
{
    protected static string $resource = PortifolioBgResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
