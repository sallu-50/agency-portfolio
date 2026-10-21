<?php

namespace App\Filament\Resources\TeamMembers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
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
                ImageColumn::make('image')
                    ->label('Photo')
                    ->disk('public')
                    ->circular(),
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->weight('bold'),
                TextColumn::make('role')
                    ->label('Designation')
                    ->searchable(),
                TextColumn::make('designation_rank')
                    ->label('Formation Order')
                    ->badge()
                    ->formatStateUsing(fn (int $state): string => match ($state) {
                        1 => '1. CEO',
                        2 => '2. Project Manager',
                        3 => '3. Operation Manager',
                        4 => '4. Team Lead',
                        5 => '5. QA Lead',
                        6 => '6. Senior Data Annotator',
                        7 => '7. Data Annotator',
                        default => "{$state}. Other",
                    })
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
                    ->sortable(),
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
