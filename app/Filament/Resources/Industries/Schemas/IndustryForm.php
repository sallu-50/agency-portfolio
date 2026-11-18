<?php

namespace App\Filament\Resources\Industries\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class IndustryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('ইন্ডাস্ট্রি তথ্য (Industry Details)')
                    ->description('এই তথ্যগুলো Industries পেজ (/industries) এবং হোমপেজের ইন্ডাস্ট্রিজ সেকশনে প্রদর্শিত হবে।')
                    ->components([
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->label('ইন্ডাস্ট্রির নাম (Industry Name)')
                                ->placeholder('e.g. Automotive & Autonomous Driving')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                            TextInput::make('slug')
                                ->label('সিস্টেম স্লাগ (Unique Slug)')
                                ->placeholder('e.g. automotive')
                                ->required(),
                        ]),

                        Grid::make(2)->schema([
                            Select::make('icon')
                                ->label('আইকন (Feather Icon)')
                                ->options([
                                    'truck' => 'Truck (অটোমোটিভ / যানবাহন)',
                                    'activity' => 'Activity (মেডিকেল / হেলথকেয়ার)',
                                    'shopping-bag' => 'Shopping Bag (রিটেইল / ই-কমার্স)',
                                    'cpu' => 'CPU (রোবোটিক্স / ম্যানুফ্যাকচারিং)',
                                    'shield' => 'Shield (সিকিউরিটি / নজরদারি)',
                                    'sun' => 'Sun (কৃষি / এগ্রিকালচার)',
                                    'video' => 'Video (মিডিয়া / এন্টারটেইনমেন্ট)',
                                    'compass' => 'Compass (জিওস্পেশিয়াল / ম্যাপিং)',
                                    'database' => 'Database (ডেটা / ক্লাউড)',
                                ])
                                ->default('box')
                                ->required(),

                            Select::make('badge_color')
                                ->label('ব্যাজের রঙ (Badge Color)')
                                ->options([
                                    'blue' => 'Blue (নীল)',
                                    'emerald' => 'Emerald (সবুজ)',
                                    'purple' => 'Purple (বেগুনী)',
                                    'amber' => 'Amber (হলুদ / সোনালী)',
                                    'rose' => 'Rose (গোলাপী)',
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
                            ->placeholder('এই ইন্ডাস্ট্রিতে মার্ভেইট এআই কীভাবে ডেটা সল্যুশন দেয়')
                            ->rows(3)
                            ->columnSpanFull(),

                        Textarea::make('what_we_label')
                            ->label('কী কী লেবেল ও অ্যানোটেশন করা হয় (What We Label)')
                            ->helperText('👉 বুলেট বা লাইন ব্রেক দিয়ে লিখুন যা কার্ডে পয়েন্ট আকারে দেখাবে')
                            ->rows(3)
                            ->columnSpanFull(),

                        Textarea::make('tags')
                            ->label('প্রাসঙ্গিক ট্যাগসমূহ (Tags)')
                            ->helperText('👉 কমা দিয়ে লিখুন (যেমন: LiDAR, 3D Cuboids, Sensor Fusion)')
                            ->rows(2)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
