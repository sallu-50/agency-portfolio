<?php

namespace App\Filament\Resources\AnnotationTools\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AnnotationToolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('টুল ও প্ল্যাটফর্ম তথ্য (Tool & Platform Details)')
                    ->description('হোমপেজ ও এবাউট পেজের "Tool Stack / Annotation Tools" সেকশনে প্রদর্শিত লোগো ও তথ্য।')
                    ->components([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label('টুল / প্ল্যাটফর্মের নাম (Tool Name)')
                                ->placeholder('e.g. CVAT, Label Studio, Labelbox')
                                ->required(),

                            TextInput::make('category')
                                ->label('ক্যাটেগরি (Category)')
                                ->placeholder('e.g. Computer Vision, Multi-modal, NLP'),
                        ]),

                        TextInput::make('website_url')
                            ->label('টুলের ওয়েবসাইট লিঙ্ক (Website URL)')
                            ->url()
                            ->placeholder('https://...'),

                        Grid::make(2)->schema([
                            TextInput::make('sort_order')
                                ->label('প্রদর্শনের ক্রম (Sort Order)')
                                ->numeric()
                                ->default(0)
                                ->required(),

                            Toggle::make('is_active')
                                ->label('ওয়েবসাইটে সক্রিয় থাকবে (Live on Website)')
                                ->default(true),
                        ]),

                        Textarea::make('svg_logo')
                            ->label('লোগো SVG কোড (Raw SVG Markup)')
                            ->helperText('👉 প্ল্যাটফর্ম লোগোর SVG কোড এখানে পেস্ট করুন (যেমন: <svg ...>...</svg>)')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
