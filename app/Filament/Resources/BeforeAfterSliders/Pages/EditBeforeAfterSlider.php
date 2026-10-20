<?php

namespace App\Filament\Resources\BeforeAfterSliders\Pages;

use App\Filament\Resources\BeforeAfterSliders\BeforeAfterSliderResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBeforeAfterSlider extends EditRecord
{
    protected static string $resource = BeforeAfterSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
