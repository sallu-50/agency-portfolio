<?php

namespace App\Filament\Resources\PortfolioItems\Tables;

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

class PortfolioItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->square()
                    ->defaultImageUrl(url('/image/computer-vision.png')),

                TextColumn::make('title')
                    ->label('Project Title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->description(fn ($record) => $record->client_name),

                TextColumn::make('category')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Computer Vision' => 'success',
                        'NLP & Text' => 'info',
                        'Audio Transcription' => 'warning',
                        'Data Collection' => 'primary',
                        'Healthcare AI' => 'danger',
                        default => 'gray',
                    })
                    ->searchable()
                    ->sortable(),

                TextColumn::make('metrics')
                    ->label('Key Metrics')
                    ->limit(35)
                    ->toggleable(),

                IconColumn::make('has_before_after')
                    ->label('Comparison Slider')
                    ->state(fn ($record) => $record->has_before_after)
                    ->boolean()
                    ->toggleable(),

                IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->sortable(),

                ToggleColumn::make('is_active')
                    ->label('Live')
                    ->sortable(),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'Computer Vision' => 'Computer Vision',
                        'NLP & Text' => 'NLP & Text',
                        'Audio Transcription' => 'Audio Transcription',
                        'Data Collection' => 'Data Collection',
                        'LiDAR & 3D' => 'LiDAR & 3D',
                        'Healthcare AI' => 'Healthcare AI',
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
