<?php

namespace App\Filament\Resources\Articles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ArticlesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Cover')
                    ->disk('public')
                    ->square()
                    ->defaultImageUrl(url('/image/crack-defect-raw.jpg')),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(40)
                    ->description(fn ($record) => $record->category),

                TextColumn::make('category')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Computer Vision' => 'success',
                        'NLP & LLMs' => 'info',
                        'Annotation Standards' => 'warning',
                        'AI Research' => 'primary',
                        default => 'gray',
                    })
                    ->searchable()
                    ->sortable(),

                TextColumn::make('author_name')
                    ->label('Author')
                    ->toggleable(),

                TextColumn::make('read_time')
                    ->label('Read Time')
                    ->toggleable(),

                IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->sortable(),

                ToggleColumn::make('is_published')
                    ->label('Live')
                    ->sortable(),

                TextColumn::make('published_at')
                    ->label('Published')
                    ->date('M d, Y')
                    ->sortable(),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'AI Research' => 'AI Research',
                        'Computer Vision' => 'Computer Vision',
                        'NLP & LLMs' => 'NLP & LLMs',
                        'Annotation Standards' => 'Annotation Standards',
                        'Industry Insights' => 'Industry Insights',
                        'Best Practices' => 'Best Practices',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
