<?php

namespace App\Filament\Resources\TeamMembers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TeamMembersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('designation_rank', 'asc')
            ->columns([
                TextColumn::make('designation_rank')
                    ->label('Formation Rank')
                    ->badge()
                    ->color(fn (int $state): string => match ($state) {
                        1 => 'danger',
                        2 => 'warning',
                        3 => 'warning',
                        4 => 'info',
                        5 => 'primary',
                        6 => 'success',
                        7 => 'gray',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (int $state): string => match ($state) {
                        1 => '1 - CEO',
                        2 => '2 - Project Manager',
                        3 => '3 - Operation Manager',
                        4 => '4 - Team Lead',
                        5 => '5 - QA Lead',
                        6 => '6 - Senior Data Annotator',
                        7 => '7 - Data Annotator',
                        default => "{$state} - Custom",
                    })
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable()
                    ->weight('bold'),
                TextColumn::make('role')
                    ->label('Designation')
                    ->searchable(),
                TextColumn::make('department_badge')
                    ->badge()
                    ->searchable(),
                TextColumn::make('category')
                    ->badge()
                    ->searchable(),
                ImageColumn::make('image')
                    ->disk('public')
                    ->circular(),
                TextColumn::make('sort_order')
                    ->label('Sub-sort')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('is_active')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
