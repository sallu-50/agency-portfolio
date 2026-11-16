<?php

namespace App\Filament\Resources\AnnotationTools\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AnnotationToolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->placeholder('e.g. CVAT, Label Studio, labelbox'),
                TextInput::make('category')
                    ->placeholder('e.g. Computer Vision, Audio, NLP'),
                TextInput::make('website_url')
                    ->url()
                    ->placeholder('https://...'),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
                Textarea::make('svg_logo')
                    ->required()
                    ->rows(4)
                    ->helperText('Paste the raw SVG markup for this tool/platform logo')
                    ->columnSpanFull(),
            ]);
    }
}
