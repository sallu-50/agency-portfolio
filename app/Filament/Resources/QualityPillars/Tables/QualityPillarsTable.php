<?php

namespace App\Filament\Resources\QualityPillars\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class QualityPillarsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')
            ->columns([
                TextColumn::make('title')
                    ->label('শিরোনাম (Title)')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('target_page')
                    ->label('কোন পেজে (Page)')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'home' => 'info',
                        'about' => 'warning',
                        'both' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'home' => 'Home Page',
                        'about' => 'About Page',
                        'both' => 'Both Pages',
                        default => $state,
                    })
                    ->sortable(),
                TextColumn::make('icon')
                    ->label('আইকন (Icon)')
                    ->badge(),
                TextColumn::make('sort_order')
                    ->label('ক্রম (Order)')
                    ->numeric()
                    ->sortable(),
                ToggleColumn::make('is_active')
                    ->label('লাইভ (Active)'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
