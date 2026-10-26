<?php

namespace App\Filament\Resources\BeforeAfterSliders\Schemas;

use Filament\Forms\Components\FileUpload;
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
                                ->label('Comparison Title (Optional)')
                                ->placeholder('e.g. Photo Retouching / Model Edit (Optional)')
                                ->nullable()
                                ->maxLength(255),

                            TextInput::make('category')
                                ->label('Category (Optional)')
                                ->placeholder('e.g. Photo Retouching, E-commerce (Optional)')
                                ->nullable()
                                ->maxLength(100),
                        ]),

                        Textarea::make('description')
                            ->label('Description / Work Summary')
                            ->placeholder('Describe what edits or annotations were made between the raw and final image...')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Section::make('Comparison Image 1 (Required)')
                    ->description('Primary comparison slider for this section')
                    ->schema([
                        Grid::make(2)->schema([
                            FileUpload::make('before_image')
                                ->label('1. Before Image (Original / Raw)')
                                ->helperText('Recommended 16:9 (e.g. 1920x1080 or 1280x720). Maximum size: 2 MB.')
                                ->image()
                                ->disk('public')
                                ->directory('comparison-sliders')
                                ->maxSize(2048)
                                ->imageEditor()
                                ->required(),

                            FileUpload::make('after_image')
                                ->label('1. After Image (Edited / Annotated)')
                                ->helperText('Must have identical dimensions/ratio as Before Image. Maximum size: 2 MB.')
                                ->image()
                                ->disk('public')
                                ->directory('comparison-sliders')
                                ->maxSize(2048)
                                ->imageEditor()
                                ->required(),
                        ]),
                    ]),

                Section::make('Comparison Image 2 (Optional)')
                    ->description('Second comparison slider in this section')
                    ->collapsible()
                    ->schema([
                        Grid::make(2)->schema([
                            FileUpload::make('before_image_2')
                                ->label('2. Before Image (Original / Raw)')
                                ->helperText('Recommended 16:9. Maximum size: 2 MB.')
                                ->image()
                                ->disk('public')
                                ->directory('comparison-sliders')
                                ->maxSize(2048)
                                ->imageEditor()
                                ->nullable(),

                            FileUpload::make('after_image_2')
                                ->label('2. After Image (Edited / Annotated)')
                                ->helperText('Must have identical dimensions/ratio as Before Image. Maximum size: 2 MB.')
                                ->image()
                                ->disk('public')
                                ->directory('comparison-sliders')
                                ->maxSize(2048)
                                ->imageEditor()
                                ->nullable(),
                        ]),
                    ]),

                Section::make('Comparison Image 3 (Optional)')
                    ->description('Third comparison slider in this section')
                    ->collapsible()
                    ->schema([
                        Grid::make(2)->schema([
                            FileUpload::make('before_image_3')
                                ->label('3. Before Image (Original / Raw)')
                                ->helperText('Recommended 16:9. Maximum size: 2 MB.')
                                ->image()
                                ->disk('public')
                                ->directory('comparison-sliders')
                                ->maxSize(2048)
                                ->imageEditor()
                                ->nullable(),

                            FileUpload::make('after_image_3')
                                ->label('3. After Image (Edited / Annotated)')
                                ->helperText('Must have identical dimensions/ratio as Before Image. Maximum size: 2 MB.')
                                ->image()
                                ->disk('public')
                                ->directory('comparison-sliders')
                                ->maxSize(2048)
                                ->imageEditor()
                                ->nullable(),
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
