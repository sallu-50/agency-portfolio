<?php

namespace App\Filament\Resources\JobOpenings;

use App\Filament\Resources\JobOpenings\Pages\ListJobOpenings;
use App\Filament\Resources\JobOpenings\Schemas\JobOpeningForm;
use App\Filament\Resources\JobOpenings\Tables\JobOpeningsTable;
use App\Models\JobOpening;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class JobOpeningResource extends Resource
{
    protected static ?string $model = JobOpening::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    protected static string|UnitEnum|null $navigationGroup = 'Site Content';

    protected static ?int $navigationSort = 6;

    protected static ?string $navigationLabel = 'Job Openings (চাকরির সার্কুলার)';

    protected static ?string $modelLabel = 'Job Opening';

    protected static ?string $pluralModelLabel = 'Job Openings';

    public static function form(Schema $schema): Schema
    {
        return JobOpeningForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JobOpeningsTable::configure($table);
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
            'index' => ListJobOpenings::route('/'),
        ];
    }
}
