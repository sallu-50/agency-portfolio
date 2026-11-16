<?php

namespace App\Filament\Resources\AnnotationTools\Pages;

use App\Filament\Resources\AnnotationTools\AnnotationToolResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAnnotationTool extends EditRecord
{
    protected static string $resource = AnnotationToolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
