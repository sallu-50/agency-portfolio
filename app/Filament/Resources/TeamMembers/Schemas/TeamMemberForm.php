<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use App\Models\TeamMember;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Full Name')
                    ->placeholder('e.g. Alex Morgan')
                    ->required(),

                Select::make('role')
                    ->label('Designation (Formation Hierarchy)')
                    ->options(function () {
                        $preset = [
                            'CEO' => '1. CEO',
                            'Project Manager' => '2. Project Manager',
                            'Operation Manager' => '3. Operation Manager',
                            'Team Lead' => '4. Team Lead',
                            'QA Lead' => '5. QA Lead',
                            'Senior Data Annotator' => '6. Senior Data Annotator',
                            'Data Annotator' => '7. Data Annotator',
                        ];

                        $existing = TeamMember::distinct()->pluck('role', 'role')->toArray();
                        foreach ($existing as $val) {
                            if (! isset($preset[$val])) {
                                $preset[$val] = $val;
                            }
                        }

                        return $preset;
                    })
                    ->searchable()
                    ->createOptionUsing(fn (string $value) => $value)
                    ->required()
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        if (! $state) {
                            return;
                        }

                        $rank = TeamMember::getDesignationRank($state);

                        if (! $get('sort_order')) {
                            $set('sort_order', $rank);
                        }

                        if (! $get('department_badge')) {
                            $badge = match ($rank) {
                                1 => 'Executive',
                                2 => 'Project Management',
                                3 => 'Operations',
                                4 => 'Team Lead',
                                5 => 'Quality Assurance',
                                6 => 'Data Annotation',
                                7 => 'Data Annotation',
                                default => 'Annotation',
                            };
                            $set('department_badge', $badge);
                        }

                        if (! $get('category')) {
                            $cat = match ($rank) {
                                1, 2, 3, 4 => 'leadership',
                                5 => 'qa',
                                6, 7 => 'cv',
                                default => 'leadership',
                            };
                            $set('category', $cat);
                        }

                        if (! $get('badge_color')) {
                            $color = match ($rank) {
                                1 => 'blue',
                                2 => 'purple',
                                3 => 'yellow',
                                4 => 'green',
                                5 => 'purple',
                                6 => 'green',
                                7 => 'blue',
                                default => 'blue',
                            };
                            $set('badge_color', $color);
                        }
                    }),

                TextInput::make('department_badge')
                    ->label('Department Badge')
                    ->placeholder('e.g. Executive, Operations, Team Lead, Data Annotation')
                    ->datalist([
                        'Executive',
                        'Project Management',
                        'Operations',
                        'Team Lead',
                        'Quality Assurance',
                        'Data Annotation',
                        'Computer Vision',
                        'NLP & LLMs',
                        'Audio & Speech',
                    ])
                    ->required(),

                Select::make('badge_color')
                    ->label('Badge Color')
                    ->options([
                        'blue' => 'Blue',
                        'green' => 'Green',
                        'purple' => 'Purple',
                        'yellow' => 'Yellow',
                        'red' => 'Red',
                    ])
                    ->default('blue')
                    ->required(),

                Select::make('category')
                    ->label('Department Category (Filter Tab)')
                    ->options([
                        'leadership' => 'Leadership',
                        'cv' => 'Computer Vision',
                        'nlp' => 'NLP & LLMs',
                        'audio' => 'Audio & Speech',
                        'qa' => 'Quality Assurance',
                    ])
                    ->searchable()
                    ->createOptionUsing(fn (string $value) => $value)
                    ->default('leadership')
                    ->required(),

                FileUpload::make('image')
                    ->label('Profile Photo')
                    ->image()
                    ->disk('public')
                    ->directory('team')
                    ->nullable()
                    ->helperText('Leave empty to use the default avatar'),

                Textarea::make('bio')
                    ->label('Short Bio')
                    ->placeholder('1-2 sentences summarizing experience & focus...')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('sort_order')
                    ->label('Sub-sort Order')
                    ->helperText('Formation is auto-sorted by Designation (CEO → Project Manager → Operation Manager → Team Lead → QA Lead → Senior Data Annotator → Data Annotator).')
                    ->numeric()
                    ->default(0)
                    ->required(),

                Toggle::make('is_active')
                    ->label('Active on Site')
                    ->default(true)
                    ->required(),
            ]);
    }
}
