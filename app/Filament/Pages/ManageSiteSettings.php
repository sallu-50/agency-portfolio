<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Alignment;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

/**
 * @property-read Schema $form
 */
class ManageSiteSettings extends Page
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string|UnitEnum|null $navigationGroup = 'Settings';

    protected static ?string $navigationLabel = 'Site Settings (সাইট সেটিংস)';

    protected static ?string $title = 'সাইট সেটিংস (Site Settings)';

    protected static ?string $slug = 'site-settings';

    protected static ?int $navigationSort = 1;

    protected string $view = 'filament-panels::pages.page';

    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $this->form->fill([
            'contact_email' => SiteSetting::get('contact_email', 'ebrahim@marveit.com'),
            'contact_phone' => SiteSetting::get('contact_phone', '+880 1753 499696'),
            'whatsapp_number' => SiteSetting::get('whatsapp_number', '8801753499696'),
            'office_address' => SiteSetting::get('office_address', 'Netrakona, Bangladesh'),
            'sla_response_time' => SiteSetting::get('sla_response_time', 'Within 24 hours'),
            'accuracy_rate' => SiteSetting::get('accuracy_rate', '99.8%'),
            'linkedin_url' => SiteSetting::get('linkedin_url', 'https://www.linkedin.com/company/marveit'),
            'facebook_url' => SiteSetting::get('facebook_url', 'https://www.facebook.com/marveit'),
            'twitter_url' => SiteSetting::get('twitter_url', 'https://twitter.com/marveitai'),
            'github_url' => SiteSetting::get('github_url', 'https://github.com/marveit-ai'),
            'site_name' => SiteSetting::get('site_name', 'Marveit AI'),
            'tagline' => SiteSetting::get('tagline', 'High-Precision Data Annotation & AI Training Pipelines'),
            'copyright_text' => SiteSetting::get('copyright_text', '&copy; 2026 Marveit AI. All rights reserved.'),
        ]);
    }

    public function defaultForm(Schema $schema): Schema
    {
        return $schema
            ->statePath('data');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('যোগাযোগ ও অফিস তথ্য (Contact & Office Information)')
                    ->description('এই তথ্যগুলো পরিবর্তন করলে ওয়েবসাইটের Footer, Contact, About, Careers ও Team পেজে একযোগে পরিবর্তন হবে।')
                    ->components([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('contact_email')
                                    ->label('অফিসিয়াল ইমেল (Official Email Address)')
                                    ->helperText('Footer, Contact, About, Careers, Team ও Policy পেজের ইমেল লিঙ্ক।')
                                    ->email()
                                    ->required(),
                                TextInput::make('contact_phone')
                                    ->label('যোগাযোগের ফোন নম্বর (Phone Number)')
                                    ->helperText('Contact পেজ ও সরাসরি কল লিঙ্ক।')
                                    ->required(),
                                TextInput::make('whatsapp_number')
                                    ->label('হোয়াটসঅ্যাপ নম্বর (WhatsApp with Country Code)')
                                    ->helperText('যেমন: 8801753499696 (Footer, Contact ও Services এর চ্যাট বাটনে ব্যবহৃত হয়)।')
                                    ->required(),
                                TextInput::make('office_address')
                                    ->label('অফিস ঠিকানা (Office Address)')
                                    ->helperText('Footer, Contact, About ও Careers পেজের অফিস লোকেশন।')
                                    ->required(),
                                TextInput::make('sla_response_time')
                                    ->label('রেসপন্স টাইম গ্যারান্টি (SLA Turnaround Guarantee)')
                                    ->helperText('যেমন: Within 24 hours (Contact ও Careers পেজে প্রদর্শিত)।')
                                    ->required(),
                                TextInput::make('accuracy_rate')
                                    ->label('কোয়ালিটি একিউরেসি মেম্বার (Accuracy Benchmark)')
                                    ->helperText('যেমন: 99.8% (Quality ও Services সেকশনে প্রদর্শিত)।')
                                    ->required(),
                            ]),
                    ]),

                Section::make('সোশ্যাল মিডিয়া ও এক্সটার্নাল লিঙ্ক (Social Links)')
                    ->description('ফুটার ও কন্টাক্ট সেকশনে সোশ্যাল আইকনের লিঙ্ক।')
                    ->components([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('linkedin_url')
                                    ->label('LinkedIn Profile URL')
                                    ->url(),
                                TextInput::make('facebook_url')
                                    ->label('Facebook Profile URL')
                                    ->url(),
                                TextInput::make('twitter_url')
                                    ->label('Twitter / X Profile URL')
                                    ->url(),
                                TextInput::make('github_url')
                                    ->label('GitHub Profile URL')
                                    ->url(),
                            ]),
                    ]),

                Section::make('ব্র্যান্ডিং ও ফুটার টেক্সট (Branding & Footer)')
                    ->description('সাইটের নাম, মূল ট্যাগলাইন এবং কপিরাইট নোটিশ।')
                    ->components([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('site_name')
                                    ->label('কোম্পানি / এজেন্সির নাম (Agency Name)')
                                    ->required(),
                                TextInput::make('tagline')
                                    ->label('মূল ট্যাগলাইন (Tagline)')
                                    ->columnSpanFull()
                                    ->required(),
                                Textarea::make('copyright_text')
                                    ->label('ফুটার কপিরাইট নোটিশ (Copyright Text)')
                                    ->helperText('যেমন: &copy; 2026 Marveit AI. All rights reserved.')
                                    ->columnSpanFull()
                                    ->rows(2)
                                    ->required(),
                            ]),
                    ]),
            ]);
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getFormContentComponent(),
            ]);
    }

    public function getFormContentComponent(): Component
    {
        return Form::make([EmbeddedSchema::make('form')])
            ->id('form')
            ->livewireSubmitHandler('save')
            ->footer([
                Actions::make($this->getFormActions())
                    ->alignment(Alignment::Start)
                    ->key('form-actions'),
            ]);
    }

    /**
     * @return array<Action>
     */
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('সেটিংস সংরক্ষণ করুন (Save Settings)')
                ->submit('save')
                ->color('primary')
                ->keyBindings(['mod+s']),
        ];
    }

    public function save(): void
    {
        $state = $this->form->getState();

        foreach ($state as $key => $value) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        Notification::make()
            ->title('সকল সাইট সেটিংস সফলভাবে আপডেট ও সংরক্ষিত হয়েছে!')
            ->success()
            ->send();
    }
}
