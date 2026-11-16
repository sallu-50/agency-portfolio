<?php

namespace App\Filament\Resources\AnnotationTools\Pages;

use App\Filament\Resources\AnnotationTools\AnnotationToolResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnnotationTools extends ListRecords
{
    protected static string $resource = AnnotationToolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
