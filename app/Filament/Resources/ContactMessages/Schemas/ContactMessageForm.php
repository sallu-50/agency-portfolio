<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ContactMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type')
                    ->default('contact')
                    ->disabled(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('country'),
                TextInput::make('service'),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('guideline_file')
                    ->label('Project Guideline File')
                    ->disk('public')
                    ->openable()
                    ->downloadable()
                    ->columnSpan(1),
                FileUpload::make('sample_file')
                    ->label('Sample Data File')
                    ->disk('public')
                    ->openable()
                    ->downloadable()
                    ->columnSpan(1),
                Toggle::make('is_read')
                    ->required(),
            ]);
    }
}
