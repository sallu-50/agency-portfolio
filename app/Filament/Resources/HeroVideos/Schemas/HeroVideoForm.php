<?php

namespace App\Filament\Resources\HeroVideos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HeroVideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('ভিডিও ফাইল ও কভার ছবি (Video & Poster)')
                    ->description('হোমপেজের হিরো সেকশনে যে ভিডিওটি চলবে তার লিঙ্ক ও কভার ইমেজ।')
                    ->components([
                        TextInput::make('video_path')
                            ->label('ভিডিও ফাইল লিঙ্ক বা পাথ (Video URL / MP4 Path)')
                            ->helperText('👉 সরাসরি কোনো ভিডিও URL (যেমন https://...mp4) অথবা লোকাল ভিডিও পাথ লিখুন।')
                            ->required()
                            ->columnSpanFull(),

                        FileUpload::make('poster_image')
                            ->label('কভার ছবি / থাম্বনেইল (Poster Thumbnail)')
                            ->helperText('👉 ভিডিও প্লে হওয়ার আগে যে ছবিটি দেখা যাবে।')
                            ->image()
                            ->disk('public')
                            ->directory('hero-videos/posters')
                            ->columnSpanFull(),
                    ]),

                Section::make('ভিডিও টেক্সট ও ব্যাজ (Video Overlay & Captions)')
                    ->description('ভিডিওর ওপর যে শিরোনাম ও তথ্য প্রদর্শিত হবে।')
                    ->components([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->label('ভিডিওর শিরোনাম (Overlay Title)')
                                ->default('Watch our workflow')
                                ->placeholder('e.g. Watch our workflow')
                                ->required(),

                            TextInput::make('badge_text')
                                ->label('কোয়ালিটি ব্যাজ (Badge Text)')
                                ->default('99.8% Precision')
                                ->placeholder('e.g. 99.8% Precision'),
                        ]),

                        TextInput::make('sub_caption')
                            ->label('সংক্ষিপ্ত বিবরণ (Sub-caption)')
                            ->default('See how we label data with precision & strict SLAs')
                            ->placeholder('e.g. See how we label data with precision & strict SLAs')
                            ->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('হোমপেজে প্রদর্শিত হবে (Active on Homepage)')
                            ->helperText('চালু রাখলে হোমপেজের হিরো সেকশনে এই ভিডিওটি লাইভ থাকবে।')
                            ->default(true),
                    ]),
            ]);
    }
}
