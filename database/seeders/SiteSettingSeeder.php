<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Contact & Office
            ['key' => 'contact_email', 'value' => 'ebrahim@marveit.com', 'group' => 'contact', 'label' => 'Direct Contact Email', 'type' => 'email', 'sort_order' => 1],
            ['key' => 'careers_email', 'value' => 'ebrahim@marveit.com', 'group' => 'contact', 'label' => 'Careers Contact Email', 'type' => 'email', 'sort_order' => 2],
            ['key' => 'contact_phone', 'value' => '+880 1753 499696', 'group' => 'contact', 'label' => 'Phone Number', 'type' => 'text', 'sort_order' => 3],
            ['key' => 'whatsapp_number', 'value' => '8801753499696', 'group' => 'contact', 'label' => 'WhatsApp Number', 'type' => 'text', 'sort_order' => 4],
            ['key' => 'office_address', 'value' => 'Mymensingh, Bangladesh', 'group' => 'contact', 'label' => 'Primary Office Address', 'type' => 'text', 'sort_order' => 5],
            ['key' => 'sla_response_time', 'value' => 'Within 24 hours', 'group' => 'contact', 'label' => 'SLA Turnaround Guarantee', 'type' => 'text', 'sort_order' => 6],
            ['key' => 'accuracy_rate', 'value' => '99.8%', 'group' => 'general', 'label' => 'QA Accuracy Benchmark', 'type' => 'text', 'sort_order' => 7],

            // Social & External Links
            ['key' => 'linkedin_url', 'value' => 'https://www.linkedin.com/company/marveit', 'group' => 'social', 'label' => 'LinkedIn Profile URL', 'type' => 'url', 'sort_order' => 8],
            ['key' => 'facebook_url', 'value' => 'https://www.facebook.com/marveit', 'group' => 'social', 'label' => 'Facebook Profile URL', 'type' => 'url', 'sort_order' => 9],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com/marveitai', 'group' => 'social', 'label' => 'Twitter/X Profile URL', 'type' => 'url', 'sort_order' => 10],
            ['key' => 'github_url', 'value' => 'https://github.com/marveit-ai', 'group' => 'social', 'label' => 'GitHub Profile URL', 'type' => 'url', 'sort_order' => 11],

            // Branding & Footer
            ['key' => 'site_name', 'value' => 'Marveit AI', 'group' => 'branding', 'label' => 'Agency Name', 'type' => 'text', 'sort_order' => 12],
            ['key' => 'tagline', 'value' => 'High-Precision Data Annotation & AI Training Pipelines', 'group' => 'branding', 'label' => 'Tagline', 'type' => 'text', 'sort_order' => 13],
            ['key' => 'copyright_text', 'value' => '&copy; 2026 Marveit AI. All rights reserved.', 'group' => 'branding', 'label' => 'Footer Copyright Notice', 'type' => 'text', 'sort_order' => 14],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
