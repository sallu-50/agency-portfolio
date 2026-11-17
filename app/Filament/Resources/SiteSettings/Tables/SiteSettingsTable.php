<?php

namespace App\Filament\Resources\SiteSettings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiteSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')
            ->columns([
                TextColumn::make('label')
                    ->label('সেটিংস এর বিষয় (Setting)')
                    ->description(fn ($record) => match ($record->key) {
                        'contact_email' => 'ওয়েবসাইটের সকল পেজের মূল ইমেল',
                        'contact_phone' => 'কন্টাক্ট পেজ ও ফোন নম্বর',
                        'whatsapp_number' => 'হোয়াটসঅ্যাপ চ্যাট লিঙ্ক নম্বর',
                        'office_address' => 'ফুটার, কন্টাক্ট, এবাউট ও ক্যারিয়ার্স ঠিকানা',
                        'sla_response_time' => 'রেসপন্স টাইম গ্যারান্টি (Within 24 hours)',
                        'accuracy_rate' => 'কোয়ালিটি একিউরেসি মেম্বার (99.8%)',
                        'linkedin_url' => 'ফুটার LinkedIn লিঙ্ক',
                        'facebook_url' => 'ফুটার Facebook লিঙ্ক',
                        'copyright_text' => 'ফুটার কপিরাইট নোটিশ',
                        default => $record->key,
                    })
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('value')
                    ->label('বর্তমান মান (Value)')
                    ->limit(60)
                    ->searchable()
                    ->wrap(),
                TextColumn::make('group')
                    ->label('ক্যাটেগরি (Group)')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'contact' => 'success',
                        'social' => 'info',
                        'branding' => 'warning',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('সর্বশেষ আপডেট')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
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
