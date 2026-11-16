<?php

namespace App\Filament\Resources\JobOpenings\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class JobOpeningForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->placeholder('e.g. Data Annotator (CV / NLP / Audio)'),
                TextInput::make('role_key')
                    ->placeholder('Short role value e.g. Data Annotator'),
                TextInput::make('department')
                    ->placeholder('e.g. Data Annotation, Quality Assurance'),
                TextInput::make('location')
                    ->required()
                    ->default('Mymensingh, Bangladesh'),
                TextInput::make('employment_type')
                    ->required()
                    ->default('Full-Time'),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
                Textarea::make('short_description')
                    ->columnSpanFull(),
            ]);
    }
}
