<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('সার্ভিস পরিচিতি ও তথ্য (Service Details)')
                    ->description('এই তথ্যগুলো হোমপেজের সার্ভিস গ্রিড এবং সার্ভিস বিস্তারিত পেজে প্রদর্শিত হবে।')
                    ->components([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->label('সার্ভিসের নাম / শিরোনাম (Service Title)')
                                ->placeholder('e.g. Image Annotation')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                            TextInput::make('slug')
                                ->label('সিস্টেম স্লাগ (Unique Slug)')
                                ->placeholder('e.g. image-annotation')
                                ->required(),
                        ]),

                        Grid::make(2)->schema([
                            Select::make('category')
                                ->label('ক্যাটেগরি (Category)')
                                ->options([
                                    'Core' => 'Core (মূল সেবা)',
                                    'Specialized' => 'Specialized (বিশেষায়িত সেবা)',
                                ])
                                ->default('Core')
                                ->required(),

                            Select::make('icon')
                                ->label('আইকন (Icon)')
                                ->options([
                                    'image' => 'Image (ছবি / কম্পিউটার ভিশন)',
                                    'video' => 'Video (ভিডিও অ্যানোটেশন)',
                                    'box' => 'Box (লিডার ও থ্রিডি কিউবয়েড)',
                                    'type' => 'Type / Text (টেক্সট ও এনএলপি)',
                                    'mic' => 'Mic (অডিও ও স্পিচ মডেলিং)',
                                    'database' => 'Database (ডেটা সংগ্রহ ও কিউরেশন)',
                                ])
                                ->default('database')
                                ->required(),
                        ]),

                        Grid::make(2)->schema([
                            TextInput::make('button_text')
                                ->label('বাটন টেক্সট (Button Text)')
                                ->placeholder('e.g. Explore image annotation')
                                ->default('Explore service')
                                ->required(),

                            Select::make('badge_color')
                                ->label('ব্যাজের রঙ (Badge Color)')
                                ->options([
                                    'blue' => 'Blue (নীল)',
                                    'emerald' => 'Emerald (সবুজ)',
                                    'purple' => 'Purple (বেগুনী)',
                                    'amber' => 'Amber (হলুদ)',
                                ])
                                ->default('blue')
                                ->required(),
                        ]),

                        Grid::make(2)->schema([
                            TextInput::make('sort_order')
                                ->label('প্রদর্শনের ক্রম (Sort Order)')
                                ->numeric()
                                ->default(0)
                                ->required(),

                            Toggle::make('is_active')
                                ->label('ওয়েবসাইটে সক্রিয় থাকবে (Live on Website)')
                                ->default(true),
                        ]),

                        Textarea::make('short_description')
                            ->label('সংক্ষিপ্ত বিবরণ (Short Description)')
                            ->placeholder('সার্ভিস কার্ডে দেখানোর জন্য ১-২ লাইনের বিবরণ')
                            ->rows(2)
                            ->columnSpanFull(),

                        Textarea::make('description')
                            ->label('বিস্তারিত বিবরণ (Full Description)')
                            ->placeholder('সার্ভিস ডিটেইলস পেজের মূল প্যারাগ্রাফ')
                            ->rows(3)
                            ->columnSpanFull(),

                        Textarea::make('features')
                            ->label('মূল ফিচার তালিকা (Key Features)')
                            ->helperText('👉 কার্ডে পয়েন্ট আকারে দেখানোর জন্য লাইন ব্রেক দিয়ে ৩টি ফিচার লিখুন')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
