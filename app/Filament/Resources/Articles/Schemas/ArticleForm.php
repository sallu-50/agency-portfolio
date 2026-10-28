<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Article Content & Details')
                    ->description('Write and manage the article publication')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->label('Article Title')
                                ->required()
                                ->maxLength(255)
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                            TextInput::make('slug')
                                ->label('Slug / URL')
                                ->required()
                                ->unique(ignoreRecord: true)
                                ->maxLength(255),
                        ]),

                        Grid::make(2)->schema([
                            Select::make('category')
                                ->label('Category')
                                ->options([
                                    'AI Research' => 'AI Research',
                                    'Computer Vision' => 'Computer Vision',
                                    'NLP & LLMs' => 'NLP & LLMs',
                                    'Annotation Standards' => 'Annotation Standards',
                                    'Industry Insights' => 'Industry Insights',
                                    'Best Practices' => 'Best Practices',
                                ])
                                ->required()
                                ->default('AI Research'),

                            TextInput::make('read_time')
                                ->label('Estimated Read Time')
                                ->default('5 min read')
                                ->placeholder('e.g. 6 min read'),
                        ]),

                        Textarea::make('excerpt')
                            ->label('Article Excerpt / Summary')
                            ->placeholder('Short teaser displayed on the resources feed and search cards')
                            ->rows(3)
                            ->columnSpanFull(),

                        RichEditor::make('content')
                            ->label('Article Body')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Section::make('Featured Media & Author')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Featured Cover Image')
                            ->image()
                            ->disk('public')
                            ->directory('articles')
                            ->imageEditor()
                            ->columnSpanFull(),

                        Grid::make(2)->schema([
                            TextInput::make('author_name')
                                ->label('Author Name')
                                ->default('Marveit AI Research')
                                ->required(),

                            TextInput::make('author_role')
                                ->label('Author Title / Role')
                                ->default('Technical Team')
                                ->placeholder('e.g. Senior Machine Learning Engineer'),
                        ]),

                        TextInput::make('tags')
                            ->label('Tags (Comma-separated)')
                            ->placeholder('e.g. RLHF, Bounding Box, Model Training, Dataset Curation')
                            ->columnSpanFull(),
                    ]),

                Section::make('Publishing Settings')
                    ->schema([
                        Grid::make(4)->schema([
                            Toggle::make('is_published')
                                ->label('Published & Live')
                                ->default(true),

                            Toggle::make('is_featured')
                                ->label('Featured Hero Article')
                                ->default(false),

                            DateTimePicker::make('published_at')
                                ->label('Publish Date')
                                ->default(now()),

                            TextInput::make('sort_order')
                                ->label('Sort Order')
                                ->numeric()
                                ->default(0),
                        ]),
                    ]),
            ]);
    }
}
