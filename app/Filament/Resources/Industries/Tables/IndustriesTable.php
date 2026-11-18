<?php

namespace App\Filament\Resources\Industries\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class IndustriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')
            ->columns([
                TextColumn::make('name')
                    ->label('ইন্ডাস্ট্রির নাম (Name)')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('slug')
                    ->label('স্লাগ (Slug)')
                    ->badge()
                    ->searchable(),
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
