<?php

namespace App\Filament\Resources\HeroVideos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroVideosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('poster_image')
                    ->label('Poster')
                    ->disk('public')
                    ->defaultImageUrl(asset('favicon.svg'))
                    ->circular(false),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->weight('bold'),

                TextColumn::make('video_path')
                    ->label('Video File')
                    ->formatStateUsing(fn (string $state): string => basename($state))
                    ->color('primary')
                    ->searchable(),

                TextColumn::make('badge_text')
                    ->label('Badge')
                    ->badge()
                    ->color('info'),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
