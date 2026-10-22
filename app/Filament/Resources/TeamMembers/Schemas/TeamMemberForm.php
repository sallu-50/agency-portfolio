<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use App\Models\Designation;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->placeholder('e.g. John Doe')
                    ->required(),

                Select::make('designation_id')
                    ->label('Designation')
                    ->relationship('designation', 'name', modifyQueryUsing: fn ($query) => $query->orderBy('rank', 'asc'))
                    ->searchable()
                    ->preload()
                    ->required()
                    ->createOptionForm([
                        TextInput::make('name')
                            ->label('Designation Title')
                            ->placeholder('e.g. Chief Technology Officer (CTO)')
                            ->required()
                            ->unique(table: 'designations', column: 'name'),
                        TextInput::make('rank')
                            ->label('Order / Position Number (কত নম্বরে থাকবে)')
                            ->numeric()
                            ->minValue(1)
                            ->default(fn () => (Designation::max('rank') ?? 0) + 1)
                            ->helperText('Lower number appears first (e.g. 1 = Top/First, 2 = Second)')
                            ->required(),
                    ])
                    ->helperText('Select a designation or click + to create a new designation with its order number'),

                TextInput::make('sort_order')
                    ->label('Order within Same Designation')
                    ->numeric()
                    ->minValue(1)
                    ->default(1)
                    ->helperText('Used to arrange members with identical designations'),

                FileUpload::make('image')
                    ->label('Photo')
                    ->image()
                    ->disk('public')
                    ->directory('team')
                    ->nullable()
                    ->helperText('Upload photo or leave empty for default avatar'),
            ]);
    }
}
