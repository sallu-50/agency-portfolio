<?php

namespace App\Filament\Resources\QualityPillars\Pages;

use App\Filament\Resources\QualityPillars\QualityPillarResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListQualityPillars extends ListRecords
{
    protected static string $resource = QualityPillarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
