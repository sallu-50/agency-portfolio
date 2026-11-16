<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    public function run(): void
    {
        $industries = [
            [
                'name' => 'Automotive & Autonomous Driving',
                'slug' => 'automotive',
                'icon' => 'truck',
                'badge_color' => 'blue',
                'short_description' => 'Training data for perception and driver-assistance models.',
                'what_we_label' => [
                    'LiDAR 3D cuboids, lane and road markings, pedestrian and vehicle tracking, camera-LiDAR sensor fusion.',
                ],
                'tags' => [
                    'LiDAR Annotation',
                    'Video Annotation',
                    'Image Annotation',
                ],
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Healthcare & Medical AI',
                'slug' => 'healthcare',
                'icon' => 'activity',
                'badge_color' => 'blue',
                'short_description' => 'Careful labeling for diagnostic and clinical models.',
                'what_we_label' => [
                    'CT and MRI segmentation, medical image classification, clinical note tagging, on de-identified data with strict access control.',
                ],
                'tags' => [
                    'Image Segmentation',
                    'Text Annotation',
                    'Data Collection',
                ],
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Retail & E-Commerce',
                'slug' => 'retail',
                'icon' => 'shopping-bag',
                'badge_color' => 'blue',
                'short_description' => 'Cleaner catalogs and smarter product search.',
                'what_we_label' => [
                    'Product attributes, category mapping, shelf and SKU detection, review sentiment.',
                ],
                'tags' => [
                    'Image Annotation',
                    'NLP Annotation',
                    'Data Collection',
                ],
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Agriculture & Drone Imagery',
                'slug' => 'agriculture',
                'icon' => 'sun',
                'badge_color' => 'blue',
                'short_description' => 'Aerial and field data for crop-monitoring models.',
                'what_we_label' => [
                    'Crop and weed segmentation, plant health classification from multispectral images, field boundary mapping.',
                ],
                'tags' => [
                    'Image Segmentation',
                    'Polygon Annotation',
                    'Video Annotation',
                ],
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Voice AI & Conversational Systems',
                'slug' => 'voice-ai',
                'icon' => 'mic',
                'badge_color' => 'blue',
                'short_description' => 'Speech and language data for assistants and chatbots.',
                'what_we_label' => [
                    'Multi-language transcription, speaker diarization, sound event tagging, intent and entity labeling.',
                ],
                'tags' => [
                    'Audio Transcription',
                    'NLP Annotation',
                ],
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'LLM & Generative AI',
                'slug' => 'llm',
                'icon' => 'cpu',
                'badge_color' => 'blue',
                'short_description' => 'Human feedback data for model training and evaluation.',
                'what_we_label' => [
                    'RLHF preference ranking, prompt and response evaluation, instruction data creation, safety and quality review.',
                ],
                'tags' => [
                    'RLHF',
                    'Text Annotation',
                    'Data Collection',
                ],
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($industries as $industry) {
            Industry::updateOrCreate(
                ['slug' => $industry['slug']],
                $industry
            );
        }
    }
}
