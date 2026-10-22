<?php

namespace App\Filament\Resources\Designations\Schemas;

use App\Models\Designation;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DesignationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Designation Name')
                    ->placeholder('e.g. Chief Technology Officer (CTO)')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('rank')
                    ->label('Hierarchy Order / Position Number')
                    ->helperText('Lower number appears first on the Team page (e.g. 1 = Top/First, 2 = Second, 3 = Third)')
                    ->numeric()
                    ->minValue(1)
                    ->default(fn () => (Designation::max('rank') ?? 0) + 1)
                    ->required(),
            ]);
    }
}
