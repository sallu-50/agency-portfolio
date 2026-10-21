<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use App\Models\TeamMember;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->placeholder('e.g. John Doe')
                    ->required(),

                Select::make('role')
                    ->label('Designation')
                    ->options(function () {
                        $preset = [
                            'CEO' => 'CEO',
                            'Project Manager' => 'Project Manager',
                            'Operation Manager' => 'Operation Manager',
                            'Team Lead' => 'Team Lead',
                            'QA Lead' => 'QA Lead',
                            'Senior Data Annotator' => 'Senior Data Annotator',
                            'Data Annotator' => 'Data Annotator',
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
                    ->required(),

                FileUpload::make('image')
                    ->label('Photo')
                    ->image()
                    ->disk('public')
                    ->directory('team')
                    ->nullable()
                    ->helperText('Upload photo or leave empty for default avatar'),
            ]);
    }
}
