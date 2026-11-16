<?php

namespace App\Filament\Resources\QualityPillars\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class QualityPillarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->placeholder('e.g. Multi-Stage Quality Control'),
                TextInput::make('icon')
                    ->required()
                    ->default('check-circle')
                    ->placeholder('Feather icon name e.g. check-circle, trending-up, users, shield, sliders, lock'),
                Select::make('target_page')
                    ->required()
                    ->options([
                        'home' => 'Home Page',
                        'about' => 'About Page',
                        'both' => 'Both Home & About',
                    ])
                    ->default('home'),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
                Textarea::make('description')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
