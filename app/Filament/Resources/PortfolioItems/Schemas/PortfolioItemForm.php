<?php

namespace App\Filament\Resources\PortfolioItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PortfolioItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Project Overview')
                    ->description('Primary details about this portfolio case study')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->label('Project Title')
                                ->required()
                                ->maxLength(255)
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                            TextInput::make('slug')
                                ->required()
                                ->unique(ignoreRecord: true)
                                ->maxLength(255),
                        ]),

                        Grid::make(2)->schema([
                            Select::make('category')
                                ->options([
                                    'Computer Vision' => 'Computer Vision',
                                    'NLP & Text' => 'NLP & Text',
                                    'Audio Transcription' => 'Audio Transcription',
                                    'Data Collection' => 'Data Collection',
                                    'LiDAR & 3D' => 'LiDAR & 3D',
                                    'Healthcare AI' => 'Healthcare AI',
                                ])
                                ->required()
                                ->default('Computer Vision'),

                            TextInput::make('client_name')
                                ->label('Client / Industry')
                                ->placeholder('e.g. Autonomous Mobility Labs'),
                        ]),

                        TextInput::make('short_description')
                            ->label('Card Brief (1-2 sentences)')
                            ->placeholder('Quick summary shown on project card')
                            ->maxLength(255),

                        Textarea::make('description')
                            ->label('Full Case Study / Details')
                            ->rows(5)
                            ->columnSpanFull(),
                    ]),

                Section::make('Visuals & Links')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Featured Thumbnail / Preview')
                            ->image()
                            ->disk('public')
                            ->directory('portfolio')
                            ->imageEditor()
                            ->columnSpanFull(),

                        Grid::make(2)->schema([
                            TextInput::make('metrics')
                                ->label('Highlights / Key Metrics')
                                ->placeholder('e.g. 99.8% Precision • 500K Frames'),

                            TextInput::make('case_study_url')
                                ->label('Live Demo / External URL')
                                ->url()
                                ->placeholder('https://example.com'),
                        ]),

                        Textarea::make('tags')
                            ->label('Tags (Comma-separated)')
                            ->placeholder('YOLOv8, 3D Bounding, LiDAR, Sensor Fusion')
                            ->columnSpanFull(),
                    ]),

                Section::make('Before & After Image Comparison (Optional)')
                    ->description('Upload original and edited/annotated versions of the same image. Clients can drag an interactive comparison slider.')
                    ->collapsible()
                    ->schema([
                        Grid::make(2)->schema([
                            FileUpload::make('before_image')
                                ->label('Before / Original Image')
                                ->helperText('Raw, untouched, or pre-annotation image')
                                ->image()
                                ->disk('public')
                                ->directory('portfolio/before-after')
                                ->imageEditor(),

                            FileUpload::make('after_image')
                                ->label('After / Edited Image')
                                ->helperText('Annotated, retouched, or final image')
                                ->image()
                                ->disk('public')
                                ->directory('portfolio/before-after')
                                ->imageEditor(),
                        ]),

                        Grid::make(2)->schema([
                            TextInput::make('before_label')
                                ->label('Before Label')
                                ->default('Before')
                                ->placeholder('e.g. Raw Image / Before')
                                ->maxLength(50),

                            TextInput::make('after_label')
                                ->label('After Label')
                                ->default('After')
                                ->placeholder('e.g. Annotated / After')
                                ->maxLength(50),
                        ]),
                    ]),

                Section::make('Publishing Settings')
                    ->schema([
                        Grid::make(3)->schema([
                            TextInput::make('sort_order')
                                ->numeric()
                                ->default(0)
                                ->helperText('Lower numbers appear first'),

                            Toggle::make('is_featured')
                                ->label('Featured Project')
                                ->default(false),

                            Toggle::make('is_active')
                                ->label('Published & Live')
                                ->default(true),
                        ]),
                    ]),
            ]);
    }
}
