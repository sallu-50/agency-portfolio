<?php

namespace App\Filament\Resources\BeforeAfterSliders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BeforeAfterSliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Comparison Overview')
                    ->description('Title and category for this before/after comparison')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->label('Comparison Title')
                                ->placeholder('e.g. LiDAR 3D Bounding vs Raw Point Cloud')
                                ->required()
                                ->maxLength(255),

                            Select::make('category')
                                ->label('Category')
                                ->options([
                                    'Computer Vision' => 'Computer Vision',
                                    'Photo Retouching' => 'Photo Retouching',
                                    'Background Removal' => 'Background Removal',
                                    'Medical Imaging' => 'Medical Imaging',
                                    'Autonomous Driving' => 'Autonomous Driving',
                                    'Object Detection' => 'Object Detection',
                                ])
                                ->default('Computer Vision')
                                ->required(),
                        ]),

                        Textarea::make('description')
                            ->label('Description / Work Summary')
                            ->placeholder('Describe what edits or annotations were made between the raw and final image...')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Section::make('Comparison Images')
                    ->description('Upload the original (before) image and the edited/annotated (after) image')
                    ->schema([
                        Grid::make(2)->schema([
                            FileUpload::make('before_image')
                                ->label('1. Before Image (Original / Raw)')
                                ->helperText('The original unedited or pre-annotation image')
                                ->image()
                                ->disk('public')
                                ->directory('comparison-sliders')
                                ->imageEditor()
                                ->required(),

                            FileUpload::make('after_image')
                                ->label('2. After Image (Edited / Annotated)')
                                ->helperText('The retouched, annotated or final result image')
                                ->image()
                                ->disk('public')
                                ->directory('comparison-sliders')
                                ->imageEditor()
                                ->required(),
                        ]),

                        Grid::make(2)->schema([
                            TextInput::make('before_label')
                                ->label('Before Label Badge')
                                ->placeholder('e.g. Raw Image / Original')
                                ->default('Before')
                                ->required()
                                ->maxLength(50),

                            TextInput::make('after_label')
                                ->label('After Label Badge')
                                ->placeholder('e.g. Annotated / Edited')
                                ->default('After')
                                ->required()
                                ->maxLength(50),
                        ]),
                    ]),

                Section::make('Display Settings')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('sort_order')
                                ->label('Display Order')
                                ->helperText('Lower numbers appear first')
                                ->numeric()
                                ->default(0),

                            Toggle::make('is_active')
                                ->label('Active on Public Site')
                                ->default(true),
                        ]),
                    ]),
            ]);
    }
}
