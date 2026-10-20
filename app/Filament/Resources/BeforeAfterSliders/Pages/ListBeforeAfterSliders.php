<?php

namespace App\Filament\Resources\BeforeAfterSliders\Pages;

use App\Filament\Resources\BeforeAfterSliders\BeforeAfterSliderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBeforeAfterSliders extends ListRecords
{
    protected static string $resource = BeforeAfterSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
