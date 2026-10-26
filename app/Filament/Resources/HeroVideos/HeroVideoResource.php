<?php

namespace App\Filament\Resources\HeroVideos;

use App\Filament\Resources\HeroVideos\Pages\CreateHeroVideo;
use App\Filament\Resources\HeroVideos\Pages\EditHeroVideo;
use App\Filament\Resources\HeroVideos\Pages\ListHeroVideos;
use App\Filament\Resources\HeroVideos\Schemas\HeroVideoForm;
use App\Filament\Resources\HeroVideos\Tables\HeroVideosTable;
use App\Models\HeroVideo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HeroVideoResource extends Resource
{
    protected static ?string $model = HeroVideo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedVideoCamera;

    protected static string|UnitEnum|null $navigationGroup = 'Site Content';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = 'Home Hero Video';

    protected static ?string $modelLabel = 'Hero Video';

    protected static ?string $pluralModelLabel = 'Hero Videos';

    public static function form(Schema $schema): Schema
    {
        return HeroVideoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HeroVideosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHeroVideos::route('/'),
            'create' => CreateHeroVideo::route('/create'),
            'edit' => EditHeroVideo::route('/{record}/edit'),
        ];
    }
}
