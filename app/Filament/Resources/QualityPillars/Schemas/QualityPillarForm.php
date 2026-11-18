<?php

namespace App\Filament\Resources\QualityPillars\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class QualityPillarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('কোয়ালিটি পিলার তথ্য (Quality Pillar Details)')
                    ->description('এই তথ্যগুলো হোমপেজ এবং এবাউট পেজের "Quality Assurance / Pillars" সেকশনে প্রদর্শিত হবে।')
                    ->components([
                        TextInput::make('title')
                            ->label('পিলারের শিরোনাম (Pillar Title)')
                            ->placeholder('e.g. Multi-Stage Quality Control')
                            ->required()
                            ->columnSpanFull(),

                        Grid::make(2)->schema([
                            Select::make('icon')
                                ->label('আইকন (Icon)')
                                ->options([
                                    'check-circle' => 'Check Circle (চেক মার্ক)',
                                    'trending-up' => 'Trending Up (উন্নতি / গ্রোথ)',
                                    'users' => 'Users (টিম / দল)',
                                    'shield' => 'Shield (নিরাপত্তা / ট্রাস্ট)',
                                    'sliders' => 'Sliders (কন্ট্রোল / কাস্টমাইজেশন)',
                                    'lock' => 'Lock (গোপনীয়তা / সিকিউরিটি)',
                                    'award' => 'Award (গুণগত মান / একিউরেসি)',
                                    'target' => 'Target (নির্ভুল লক্ষ্যমাত্রা)',
                                    'clock' => 'Clock (সময় / টার্নঅ্যারাউন্ড)',
                                    'zap' => 'Zap (দ্রুত গতি / পারফর্মেন্স)',
                                ])
                                ->default('check-circle')
                                ->required(),

                            Select::make('target_page')
                                ->label('কোন পেজে প্রদর্শিত হবে (Target Page)')
                                ->options([
                                    'home' => 'হোম পেজ (Home Page)',
                                    'about' => 'এবাউট পেজ (About Page)',
                                    'both' => 'উভয় পেজে (Both Home & About)',
                                ])
                                ->default('home')
                                ->required(),
                        ]),

                        Grid::make(2)->schema([
                            TextInput::make('sort_order')
                                ->label('প্রদর্শনের ক্রম (Sort Order)')
                                ->helperText('ছোট সংখ্যা আগে প্রদর্শিত হবে (যেমন: ১, ২, ৩...)')
                                ->numeric()
                                ->default(0)
                                ->required(),

                            Toggle::make('is_active')
                                ->label('ওয়েবসাইটে সক্রিয় থাকবে (Live on Website)')
                                ->default(true),
                        ]),

                        Textarea::make('description')
                            ->label('বিস্তারিত বিবরণ (Description)')
                            ->helperText('এই পিলারের বিস্তারিত কার্যপদ্ধতি বা প্যারাগ্রাফ')
                            ->required()
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
