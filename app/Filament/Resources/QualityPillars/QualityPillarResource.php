<?php

namespace App\Filament\Resources\QualityPillars;

use App\Filament\Resources\QualityPillars\Pages\CreateQualityPillar;
use App\Filament\Resources\QualityPillars\Pages\EditQualityPillar;
use App\Filament\Resources\QualityPillars\Pages\ListQualityPillars;
use App\Filament\Resources\QualityPillars\Schemas\QualityPillarForm;
use App\Filament\Resources\QualityPillars\Tables\QualityPillarsTable;
use App\Models\QualityPillar;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class QualityPillarResource extends Resource
{
    protected static ?string $model = QualityPillar::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShieldCheck;

    protected static string|UnitEnum|null $navigationGroup = 'Site Content';

    protected static ?int $navigationSort = 8;

    public static function form(Schema $schema): Schema
    {
        return QualityPillarForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return QualityPillarsTable::configure($table);
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
            'index' => ListQualityPillars::route('/'),
            'create' => CreateQualityPillar::route('/create'),
            'edit' => EditQualityPillar::route('/{record}/edit'),
        ];
    }
}
