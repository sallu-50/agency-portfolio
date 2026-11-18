<?php

namespace App\Filament\Resources\AnnotationTools;

use App\Filament\Resources\AnnotationTools\Pages\ListAnnotationTools;
use App\Filament\Resources\AnnotationTools\Schemas\AnnotationToolForm;
use App\Filament\Resources\AnnotationTools\Tables\AnnotationToolsTable;
use App\Models\AnnotationTool;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AnnotationToolResource extends Resource
{
    protected static ?string $model = AnnotationTool::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedWrenchScrewdriver;

    protected static string|UnitEnum|null $navigationGroup = 'Site Content';

    protected static ?int $navigationSort = 7;

    protected static ?string $navigationLabel = 'Annotation Tools (অ্যানোটেশন টুলস)';

    protected static ?string $modelLabel = 'Annotation Tool';

    protected static ?string $pluralModelLabel = 'Annotation Tools';

    public static function form(Schema $schema): Schema
    {
        return AnnotationToolForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnnotationToolsTable::configure($table);
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
            'index' => ListAnnotationTools::route('/'),
        ];
    }
}
