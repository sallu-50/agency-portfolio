<?php

namespace App\Filament\Resources\AnnotationTools\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class AnnotationToolsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')
            ->columns([
                TextColumn::make('name')
                    ->label('টুলের নাম (Name)')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('category')
                    ->label('ক্যাটেগরি (Category)')
                    ->badge()
                    ->searchable(),
                TextColumn::make('website_url')
                    ->label('ওয়েবসাইট লিঙ্ক (URL)')
                    ->limit(35),
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
