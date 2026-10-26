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
                Section::make('Video File (.mp4)')
                    ->description('Upload the video file to showcase on the home page')
                    ->schema([
                        FileUpload::make('video_path')
                            ->label('Direct Video File (.mp4)')
                            ->helperText('Supported formats: MP4, WebM. Recommended resolution: 1920x1080 or 1280x720 (16:9 ratio). Max size: 100 MB.')
                            ->acceptedFileTypes(['video/mp4', 'video/webm', 'video/quicktime'])
                            ->disk('public')
                            ->directory('hero-videos')
                            ->maxSize(102400)
                            ->downloadable()
                            ->openable()
                            ->columnSpanFull()
                            ->required(),

                        FileUpload::make('poster_image')
                            ->label('Poster / Cover Thumbnail (Optional)')
                            ->helperText('Image shown before the video starts playing. Recommended: 1920x1080 (16:9 ratio), max 4 MB.')
                            ->image()
                            ->disk('public')
                            ->directory('hero-videos/posters')
                            ->maxSize(4096)
                            ->imageEditor()
                            ->columnSpanFull(),
                    ]),

                Section::make('Video Overlay & Captions')
                    ->description('Overlay text displayed on top of the video before playing')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->label('Overlay Title')
                                ->default('Watch our workflow')
                                ->placeholder('e.g. Watch our workflow')
                                ->maxLength(255),

                            TextInput::make('badge_text')
                                ->label('Quality / Highlight Badge')
                                ->default('99.8% Precision')
                                ->placeholder('e.g. 99.8% Precision')
                                ->maxLength(100),
                        ]),

                        TextInput::make('sub_caption')
                            ->label('Sub-caption / Short Description')
                            ->default('See how we label data with precision & strict SLAs')
                            ->placeholder('e.g. See how we label data with precision & strict SLAs')
                            ->columnSpanFull()
                            ->maxLength(255),

                        Toggle::make('is_active')
                            ->label('Active on Home Page')
                            ->helperText('If enabled, this video will be displayed in the hero section on the homepage.')
                            ->default(true)
                            ->required(),
                    ]),
            ]);
    }
}
