<?php

namespace App\Filament\Resources\JobOpenings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class JobOpeningsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')
            ->columns([
                TextColumn::make('title')
                    ->label('পদের নাম (Title)')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('department')
                    ->label('ডিপার্টমেন্ট (Department)')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('location')
                    ->label('স্থান (Location)')
                    ->searchable(),
                TextColumn::make('employment_type')
                    ->label('ধরন (Type)')
                    ->badge()
                    ->color('info')
                    ->searchable(),
                TextColumn::make('sort_order')
                    ->label('ক্রম (Order)')
                    ->numeric()
                    ->sortable(),
                ToggleColumn::make('is_active')
                    ->label('লাইভ সার্কুলার (Active)'),
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
