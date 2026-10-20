<?php

namespace App\Filament\Resources\BeforeAfterSliders\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class BeforeAfterSlidersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('before_image')
                    ->label('Before')
                    ->disk('public')
                    ->square()
                    ->defaultImageUrl(asset('image/team-2.jpg')),

                ImageColumn::make('after_image')
                    ->label('After')
                    ->disk('public')
                    ->square()
                    ->defaultImageUrl(asset('image/team-3.jpg')),

                TextColumn::make('title')
                    ->label('Comparison Title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->description(fn ($record) => $record->before_label.' ➔ '.$record->after_label),

                TextColumn::make('category')
                    ->badge()
                    ->color('primary')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->numeric()
                    ->sortable(),

                ToggleColumn::make('is_active')
                    ->label('Live')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime('M j, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
