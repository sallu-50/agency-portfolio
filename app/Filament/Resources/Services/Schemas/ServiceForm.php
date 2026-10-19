<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('category')
                    ->required()
                    ->default('Core'),
                TextInput::make('icon')
                    ->required()
                    ->default('database'),
                TextInput::make('badge_color')
                    ->required()
                    ->default('blue'),
                TextInput::make('short_description'),
                Textarea::make('description')
                    ->columnSpanFull(),
                Textarea::make('features')
                    ->columnSpanFull(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
