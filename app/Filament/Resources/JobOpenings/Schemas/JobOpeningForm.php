<?php

namespace App\Filament\Resources\JobOpenings\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class JobOpeningForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('চাকরির সার্কুলার তথ্য (Job Opening Details)')
                    ->description('এই তথ্যগুলো সরাসরি Careers পেজের (/careers) চাকরির সার্কুলার লিস্ট ও ড্রপডাউনে প্রদর্শিত হবে।')
                    ->components([
                        TextInput::make('title')
                            ->label('পদের নাম / সার্কুলার শিরোনাম (Job Title)')
                            ->placeholder('e.g. Data Annotator (CV / NLP / Audio)')
                            ->required()
                            ->columnSpanFull(),

                        Grid::make(2)->schema([
                            TextInput::make('role_key')
                                ->label('সংক্ষিপ্ত রোল (Short Role Key)')
                                ->placeholder('e.g. Data Annotator')
                                ->helperText('আবেদন ফর্মে রোল সিলেক্ট করার ড্রপডাউনে ব্যবহৃত হয়'),

                            TextInput::make('department')
                                ->label('বিভাগ / ডিপার্টমেন্ট (Department)')
                                ->placeholder('e.g. Data Annotation, Quality Assurance'),
                        ]),

                        Grid::make(2)->schema([
                            TextInput::make('location')
                                ->label('কাজের স্থান (Location)')
                                ->placeholder('e.g. Netrakona, Bangladesh or Remote')
                                ->required()
                                ->default('Netrakona, Bangladesh'),

                            Select::make('employment_type')
                                ->label('চাকরির ধরন (Employment Type)')
                                ->options([
                                    'Full-Time' => 'Full-Time (পূর্ণকালীন)',
                                    'Part-Time' => 'Part-Time (খণ্ডকালীন)',
                                    'Contract' => 'Contract (চুক্তিভিত্তিক)',
                                    'Remote' => 'Remote (দূরবর্তী / অনলাইন)',
                                    'Hybrid' => 'Hybrid (অফিস ও রিমোট)',
                                ])
                                ->default('Full-Time')
                                ->required(),
                        ]),

                        Grid::make(2)->schema([
                            TextInput::make('sort_order')
                                ->label('প্রদর্শনের ক্রম (Sort Order)')
                                ->numeric()
                                ->default(0)
                                ->required(),

                            Toggle::make('is_active')
                                ->label('সার্কুলারটি লাইভ থাকবে (Active & Open for Applications)')
                                ->default(true),
                        ]),

                        Textarea::make('short_description')
                            ->label('সংক্ষিপ্ত কাজের বিবরণ ও দায়িত্ব (Job Description)')
                            ->placeholder('এই পদে কী কী কাজ করতে হবে তার সংক্ষিপ্ত বিবরণ লিখুন')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
