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
                    ->searchable()
                    ->sortable(),
                TextColumn::make('designation_rank')
                    ->label('Position / Order #')
                    ->badge()
                    ->formatStateUsing(fn ($record, int $state): string => "#{$state} ".($record->role ?? ''))
                    ->color(fn (int $state): string => match (true) {
                        $state === 1 => 'danger',
                        $state <= 3 => 'warning',
                        $state <= 5 => 'info',
                        $state <= 7 => 'success',
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
