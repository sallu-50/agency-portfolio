<?php

namespace App\Filament\Resources\HeroVideos\Pages;

use App\Filament\Resources\HeroVideos\HeroVideoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHeroVideo extends EditRecord
{
    protected static string $resource = HeroVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
