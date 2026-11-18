<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')
            ->columns([
                TextColumn::make('title')
                    ->label('সার্ভিসের নাম (Title)')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('category')
                    ->label('ক্যাটেগরি (Category)')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Core' => 'success',
                        'Specialized' => 'info',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('স্লাগ (Slug)')
                    ->badge()
                    ->searchable(),
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
