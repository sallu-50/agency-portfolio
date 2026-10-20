<?php

namespace App\Filament\Resources\BeforeAfterSliders;

use App\Filament\Resources\BeforeAfterSliders\Pages\CreateBeforeAfterSlider;
use App\Filament\Resources\BeforeAfterSliders\Pages\EditBeforeAfterSlider;
use App\Filament\Resources\BeforeAfterSliders\Pages\ListBeforeAfterSliders;
use App\Filament\Resources\BeforeAfterSliders\Schemas\BeforeAfterSliderForm;
use App\Filament\Resources\BeforeAfterSliders\Tables\BeforeAfterSlidersTable;
use App\Models\BeforeAfterSlider;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class BeforeAfterSliderResource extends Resource
{
    protected static ?string $model = BeforeAfterSlider::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    protected static string|UnitEnum|null $navigationGroup = 'Site Content';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Before & After Sliders';

    protected static ?string $modelLabel = 'Before & After Comparison';

    protected static ?string $pluralModelLabel = 'Before & After Sliders';

    public static function form(Schema $schema): Schema
    {
        return BeforeAfterSliderForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BeforeAfterSlidersTable::configure($table);
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
            'index' => ListBeforeAfterSliders::route('/'),
            'create' => CreateBeforeAfterSlider::route('/create'),
            'edit' => EditBeforeAfterSlider::route('/{record}/edit'),
        ];
    }
}
