<?php

namespace Database\Seeders;

use App\Models\AnnotationTool;
use Illuminate\Database\Seeder;

class AnnotationToolSeeder extends Seeder
{
    public function run(): void
    {
        $tools = [
            [
                'name' => 'CVAT',
                'svg_logo' => '<svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none"><rect x="2" y="2" width="28" height="28" rx="6" fill="#1677FF" /><text x="16" y="22" text-anchor="middle" fill="#FFFFFF" font-family="system-ui, -apple-system, sans-serif" font-size="18" font-weight="800">C</text></svg>',
                'category' => 'Computer Vision',
                'website_url' => 'https://www.cvat.ai',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Label Studio',
                'svg_logo' => '<svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="12" fill="#FF4D4F" /><path d="M10.5 16H21.5M16 10.5V21.5" stroke="#FFFFFF" stroke-width="3" stroke-linecap="butt" /></svg>',
                'category' => 'Multi-modal',
                'website_url' => 'https://labelstud.io',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'labelbox',
                'svg_logo' => '<svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none"><rect x="3" y="3" width="26" height="26" rx="5" stroke="#0A2540" stroke-width="3.6" /><rect x="11" y="11" width="10" height="10" fill="#00D4B2" /></svg>',
                'category' => 'Enterprise AI',
                'website_url' => 'https://labelbox.com',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'V7',
                'svg_logo' => '<svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none"><path d="M5 6L16 26L27 6" stroke="#7C3AED" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" /></svg>',
                'category' => 'Computer Vision',
                'website_url' => 'https://www.v7labs.com',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'SuperAnnotate',
                'svg_logo' => '<svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none"><polygon points="16,4 28,16 16,28 4,16" fill="#10B981" /><circle cx="16" cy="16" r="4.2" fill="#FFFFFF" /></svg>',
                'category' => 'Computer Vision & LLM',
                'website_url' => 'https://www.superannotate.com',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'supervisely',
                'svg_logo' => '<svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none"><rect x="4" y="4" width="24" height="24" rx="4.5" fill="#000000" /><circle cx="12" cy="12" r="3" fill="#38BDF8" /><circle cx="20" cy="20" r="3" fill="#38BDF8" /></svg>',
                'category' => 'Computer Vision & 3D',
                'website_url' => 'https://supervisely.com',
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Audacity',
                'svg_logo' => '<svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none"><path d="M5 22C5 9.5 27 9.5 27 22" stroke="#2563EB" stroke-width="3.6" stroke-linecap="round" /><path d="M11 18V26M16 14V30M21 18V26" stroke="#EA580C" stroke-width="2.4" stroke-linecap="butt" /></svg>',
                'category' => 'Audio Annotation',
                'website_url' => 'https://www.audacityteam.org',
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Praat',
                'svg_logo' => '<svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none"><path d="M6 10.5C12.5 5.8 20.5 12.2 25 18C20.5 23.8 12.5 27.6 6 22Z" fill="#B45309" /><path d="M21 10C28 16.5 24 25 17 29.5" stroke="#1D4ED8" stroke-width="3" stroke-linecap="butt" /></svg>',
                'category' => 'Phonetics & Speech',
                'website_url' => 'https://www.fon.hum.uva.nl/praat/',
                'sort_order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'prodigy',
                'svg_logo' => '<svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="12" fill="#000000" /><polygon points="12,11 22,16 12,21" fill="#FACC15" /></svg>',
                'category' => 'NLP & spaCy',
                'website_url' => 'https://prodi.gy',
                'sort_order' => 9,
                'is_active' => true,
            ],
            [
                'name' => 'doccano',
                'svg_logo' => '<svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none"><rect x="4" y="4" width="24" height="24" rx="4.5" fill="#4F46E5" /><path d="M9.5 11.5H22.5M9.5 16.5H22.5M9.5 21.5H17.5" stroke="#FFFFFF" stroke-width="2.2" /></svg>',
                'category' => 'Text & NLP',
                'website_url' => 'https://github.com/doccano/doccano',
                'sort_order' => 10,
                'is_active' => true,
            ],
        ];

        foreach ($tools as $tool) {
            AnnotationTool::updateOrCreate(
                ['name' => $tool['name']],
                $tool
            );
        }
    }
}
