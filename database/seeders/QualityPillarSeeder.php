<?php

namespace Database\Seeders;

use App\Models\QualityPillar;
use Illuminate\Database\Seeder;

class QualityPillarSeeder extends Seeder
{
    public function run(): void
    {
        $pillars = [
            // Home Page Pillars
            [
                'title' => 'Multi-Stage Quality Control',
                'description' => 'Every batch goes through annotator work, peer review and senior QA sign-off. We audit random samples against your guidelines and send an accuracy report with each delivery.',
                'icon' => 'check-circle',
                'target_page' => 'home',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Pilot First, Then Scale',
                'description' => 'We start with a small pilot on your own data. We refine the guidelines with you and calibrate annotators on gold-standard samples before scaling to full production.',
                'icon' => 'trending-up',
                'target_page' => 'home',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Teams That Scale With Your Roadmap',
                'description' => 'Go from a few hundred files to millions without losing consistency. Trained annotator teams ramp up in 3 days, with the same QA process at every volume.',
                'icon' => 'users',
                'target_page' => 'home',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Secure Data Handling',
                'description' => 'NDA signed before any data is shared. Encrypted transfers, role-based access and PII anonymization where required. We can also work inside your VPN or environment.',
                'icon' => 'shield',
                'target_page' => 'home',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Works in Your Tools',
                'description' => 'We label in CVAT, Label Studio, Labelbox, V7, SuperAnnotate, Supervisely, Audacity, Praat, Prodigy, Doccano or in your own platform, so your pipeline and formats stay unchanged.',
                'icon' => 'sliders',
                'target_page' => 'home',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Clear Communication',
                'description' => 'A dedicated project manager, regular progress reports and a fast feedback loop. If a batch misses your accuracy target, we correct it at no extra cost.',
                'icon' => 'message-square',
                'target_page' => 'home',
                'sort_order' => 6,
                'is_active' => true,
            ],

            // About Page Pillars
            [
                'title' => 'Multi-Stage Quality Control',
                'description' => 'Every batch undergoes primary annotation, peer consensus review, and senior QA sign-off against your exact edge-case guidelines.',
                'icon' => 'check-circle',
                'target_page' => 'about',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Pilot First, Then Scale',
                'description' => 'We deliver a labeled pilot sample within 24 hours so you can audit our precision on gold-standard examples before committing.',
                'icon' => 'trending-up',
                'target_page' => 'about',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Dedicated Domain Pods',
                'description' => 'Scale from hundreds of validation frames to millions of production annotations with calibrated teams trained specifically on your ontology.',
                'icon' => 'users',
                'target_page' => 'about',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Enterprise Data Isolation',
                'description' => 'Bilateral NDA signed upfront, encrypted transfers, strict role-based access control, and optional work directly inside your private VPN.',
                'icon' => 'lock',
                'target_page' => 'about',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Seamless Tooling Integration',
                'description' => 'We operate natively in CVAT, Label Studio, Labelbox, V7, SuperAnnotate, Prodigy, Doccano, or your proprietary annotation pipeline.',
                'icon' => 'sliders',
                'target_page' => 'about',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Direct Technical Communication',
                'description' => 'Work directly with a dedicated project manager via Slack, Teams, or email—with responses within 24 hours and free QA rework if targets miss.',
                'icon' => 'message-square',
                'target_page' => 'about',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($pillars as $pillar) {
            QualityPillar::updateOrCreate(
                [
                    'title' => $pillar['title'],
                    'target_page' => $pillar['target_page'],
                ],
                $pillar
            );
        }
    }
}
