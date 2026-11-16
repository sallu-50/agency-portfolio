<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->placeholder('e.g. contact_email, office_address, whatsapp_number'),
                TextInput::make('label')
                    ->placeholder('Human readable label e.g. Direct Contact Email'),
                Select::make('group')
                    ->required()
                    ->options([
                        'general' => 'General',
                        'contact' => 'Contact & Office',
                        'social' => 'Social Links',
                        'branding' => 'Branding & Layout',
                    ])
                    ->default('general'),
                Select::make('type')
                    ->options([
                        'text' => 'Single Line Text',
                        'email' => 'Email Address',
                        'url' => 'Web URL',
                        'textarea' => 'Multi-line Text',
                    ])
                    ->default('text'),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
                Textarea::make('value')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
