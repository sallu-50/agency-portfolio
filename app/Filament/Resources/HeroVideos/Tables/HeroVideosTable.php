<?php

namespace App\Filament\Resources\HeroVideos\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class HeroVideosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('ভিডিও শিরোনাম (Title)')
                    ->description(fn ($record) => $record->sub_caption)
                    ->weight('bold')
                    ->searchable(),
                TextColumn::make('badge_text')
                    ->label('ব্যাজ (Badge)')
                    ->badge()
                    ->color('success'),
                TextColumn::make('video_path')
                    ->label('ভিডিও পাথ (Path / URL)')
                    ->limit(40),
                ToggleColumn::make('is_active')
                    ->label('লাইভ আছে (Live)'),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
