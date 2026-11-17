<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('label')
                    ->label('সেটিংস এর বিষয় (Setting Name)')
                    ->disabled()
                    ->dehydrated(false),
                Textarea::make('value')
                    ->label('মান / Value (যা ওয়েবসাইটে প্রদর্শিত হবে)')
                    ->helperText(fn ($record) => match ($record?->key) {
                        'contact_email' => '👉 এই ইমেলটি ওয়েবসাইট এর সব জায়গায় কাজ করে (Header, Footer, Contact, About, Careers, Team ও Policy পেজ)।',
                        'contact_phone' => '👉 সরাসরি যোগাযোগের ফোন নম্বর (Contact পেজ ও কল বাটনে আপডেট হবে)।',
                        'whatsapp_number' => '👉 হোয়াটসঅ্যাপ নম্বর কান্ট্রি কোড সহ (যেমন: 8801753499696)। চ্যাট লিংকে আপডেট হবে।',
                        'office_address' => '👉 অফিস ঠিকানা (Footer, Contact, About ও Careers পেজে প্রদর্শিত হবে)।',
                        'sla_response_time' => '👉 ক্লায়েন্ট রেসপন্স টাইম গ্যারান্টি (যেমন: Within 24 hours)।',
                        'accuracy_rate' => '👉 কোয়ালিটি একিউরেসি রেট (যেমন: 99.8%)।',
                        'linkedin_url' => '👉 কোম্পানির লিঙ্কডইন পেজ লিঙ্ক।',
                        'facebook_url' => '👉 ফেসবুক পেজ লিঙ্ক।',
                        'copyright_text' => '👉 ফুটারের কপিরাইট টেক্সট (যেমন: &copy; 2026 Marveit AI. All rights reserved.)।',
                        default => 'ওয়েবসাইটে যা দেখাতে চান তা লিখুন।',
                    })
                    ->rows(3)
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
