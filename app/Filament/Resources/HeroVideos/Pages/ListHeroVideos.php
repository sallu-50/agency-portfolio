<?php

namespace App\Filament\Resources\HeroVideos\Pages;

use App\Filament\Resources\HeroVideos\HeroVideoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHeroVideos extends ListRecords
{
    protected static string $resource = HeroVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
