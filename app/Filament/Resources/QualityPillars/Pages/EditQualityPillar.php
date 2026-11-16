<?php

namespace App\Filament\Resources\QualityPillars\Pages;

use App\Filament\Resources\QualityPillars\QualityPillarResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditQualityPillar extends EditRecord
{
    protected static string $resource = QualityPillarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
