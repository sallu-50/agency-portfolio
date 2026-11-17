<?php

namespace App\Filament\Resources\SiteSettings\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Table;

class SiteSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')
            ->paginated(false)
            ->columns([
                TextColumn::make('label')
                    ->label('সেটিংস এর বিষয় (Setting Name)')
                    ->description(fn ($record) => match ($record->key) {
                        'contact_email' => '👉 ওয়েবসাইটের সকল পেজের মূল ইমেল (Footer, Contact, Careers, Team, About)',
                        'contact_phone' => '👉 কন্টাক্ট পেজ ও সরাসরি ফোন কল নম্বর',
                        'whatsapp_number' => '👉 হোয়াটসঅ্যাপ চ্যাট নম্বর (Footer, Contact, Services ও Portfolio)',
                        'office_address' => '👉 অফিস ঠিকানা (Footer, Contact, About ও Careers পেজ)',
                        'sla_response_time' => '👉 রেসপন্স টাইম গ্যারান্টি (Within 24 hours)',
                        'accuracy_rate' => '👉 কোয়ালিটি একিউরেসি পার্সেন্টেজ (99.8%)',
                        'linkedin_url' => '👉 ফুটার LinkedIn পেজ লিঙ্ক',
                        'facebook_url' => '👉 ফুটার Facebook পেজ লিঙ্ক',
                        'twitter_url' => '👉 টুইটার / X প্রোফাইল লিঙ্ক',
                        'github_url' => '👉 গিটহাব প্রোফাইল লিঙ্ক',
                        'site_name' => '👉 এজেন্সির নাম (Marveit AI)',
                        'tagline' => '👉 মূল ট্যাগলাইন',
                        'copyright_text' => '👉 ফুটার কপিরাইট টেক্সট',
                        default => $record->key,
                    })
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextInputColumn::make('value')
                    ->label('মান / Value (ক্লিক করে সরাসরি পরিবর্তন করতে পারবেন)')
                    ->searchable()
                    ->grow(),
                TextColumn::make('group')
                    ->label('ক্যাটেগরি')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'contact' => 'success',
                        'social' => 'info',
                        'branding' => 'warning',
                        default => 'gray',
                    })
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
