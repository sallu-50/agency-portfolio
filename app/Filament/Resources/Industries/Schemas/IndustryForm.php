<?php

namespace App\Filament\Resources\Industries\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class IndustryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->placeholder('e.g. Automotive & Autonomous Driving'),
                TextInput::make('slug')
                    ->required()
                    ->placeholder('e.g. automotive'),
                TextInput::make('icon')
                    ->required()
                    ->default('box')
                    ->placeholder('Feather icon name e.g. truck, activity, shopping-bag, cpu, shield, sun'),
                TextInput::make('badge_color')
                    ->default('blue'),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
                Textarea::make('short_description')
                    ->columnSpanFull(),
                Textarea::make('what_we_label')
                    ->helperText('List of items/bullets')
                    ->columnSpanFull(),
                Textarea::make('tags')
                    ->helperText('Pill tags')
                    ->columnSpanFull(),
            ]);
    }
}
