<?php

namespace Database\Seeders;

use App\Models\PortfolioItem;
use Illuminate\Database\Seeder;

class PortfolioItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolioItems = [
            [
                'title' => 'Autonomous Vehicle 3D LiDAR & Bounding Cuboids',
                'slug' => 'autonomous-vehicle-3d-lidar',
                'category' => 'Computer Vision',
                'client_name' => 'Tier-1 Global Automotive OEM',
                'image' => 'image/team-2.jpg',
                'short_description' => 'Annotated over 450,000 multi-sensor synchronized LiDAR point cloud frames with strict sub-centimeter bounding precision.',
                'description' => 'A comprehensive multi-sensor calibration project involving continuous frame-by-frame 3D object tracking, cuboid orientation estimation, and pedestrian kinematics for high-speed highway autonomous driving benchmarks.',
                'metrics' => '99.9% Geometric Precision • 450K Frames',
                'tags' => ['LiDAR', '3D Cuboids', 'Autonomous Driving', 'Sensor Fusion'],
                'case_study_url' => 'https://example.com/case-studies/lidar',
                'is_featured' => true,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Medical MRI & CT Scan Organ Segmentation',
                'slug' => 'medical-mri-organ-segmentation',
                'category' => 'Computer Vision',
                'client_name' => 'Digital Health AI Institute',
                'image' => 'image/team-3.jpg',
                'short_description' => 'Pixel-accurate polygonal and semantic mask delineation for multi-slice abdominal CT and brain MRI diagnostics.',
                'description' => 'Collaborated with certified radiologists to deliver HIPAA-compliant high-resolution polygonal segmentation of internal organs, lesions, and anomalous cell structures across thousands of DICOM volumetric series.',
                'metrics' => '99.8% Clinical IoU • 85K DICOM Scans',
                'tags' => ['Healthcare', 'Semantic Segmentation', 'DICOM', 'HIPAA'],
                'case_study_url' => 'https://example.com/case-studies/medical',
                'is_featured' => true,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Multilingual LLM RLHF & Prompt Safety Alignment',
                'slug' => 'multilingual-llm-rlhf-alignment',
                'category' => 'NLP & LLM',
                'client_name' => 'Next-Gen Foundation Model Lab',
                'image' => 'image/team-6.jpg',
                'short_description' => 'Multi-turn conversational grading, hallucination tagging, and human preference pair ranking across 12 languages.',
                'description' => 'Provided human-in-the-loop alignment data for a 70B parameter frontier model. Evaluated reasoning chains, factuality verification, bias mitigation, and safety red-teaming guidelines.',
                'metrics' => '120K Graded Pairs • 12 Languages',
                'tags' => ['LLM Alignment', 'RLHF', 'Red Teaming', 'Safety'],
                'case_study_url' => 'https://example.com/case-studies/rlhf',
                'is_featured' => true,
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Retail Visual Search & Smart Shelf SKU Tracking',
                'slug' => 'retail-visual-search-sku-tracking',
                'category' => 'Computer Vision',
                'client_name' => 'Omnichannel Retail Enterprise',
                'image' => 'image/team-5.jpg',
                'short_description' => 'Hierarchical product categorization, barcode verification, and out-of-stock shelf detection.',
                'description' => 'Annotated high-density supermarket store aisles containing over 100,000 unique SKUs. Built training datasets for automated robotic inventory carts and mobile visual shopping engines.',
                'metrics' => '100K+ SKUs • 99.7% Agreement',
                'tags' => ['Retail AI', 'Object Detection', 'Hierarchy Tagging'],
                'case_study_url' => 'https://example.com/case-studies/retail',
                'is_featured' => false,
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Acoustic Noise Tagging & Conversational Diarization',
                'slug' => 'acoustic-noise-tagging-diarization',
                'category' => 'Audio & Speech',
                'client_name' => 'Smart Assistant Voice Platform',
                'image' => 'image/team-7.jpg',
                'short_description' => 'Timestamped multi-speaker audio transcription and acoustic background noise classification across diverse dialects.',
                'description' => 'Trained automatic speech recognition models with phonetically precise word-level timestamps, speaker separation in noisy environments, and emotional inflection tagging.',
                'metrics' => '2,500 Hours Audio • 99.4% WER Match',
                'tags' => ['Speech AI', 'Diarization', 'Acoustic Events'],
                'case_study_url' => 'https://example.com/case-studies/audio',
                'is_featured' => false,
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Geographic & Cultural Diversity Image Sourcing',
                'slug' => 'geographic-cultural-diversity-sourcing',
                'category' => 'Data Collection',
                'client_name' => 'Global Tech Conglomerate',
                'image' => 'image/team-1.jpg',
                'short_description' => 'Ethically collected and model-consented image and video datasets across 18 countries to eliminate demographic bias.',
                'description' => 'Conducted on-the-ground consented data gathering covering varied skin tones, ambient lighting setups, local apparel, and everyday household environments for balanced AI computer vision models.',
                'metrics' => '18 Countries • 100% Consent Rate',
                'tags' => ['Ethical AI', 'Data Collection', 'Bias Mitigation'],
                'case_study_url' => 'https://example.com/case-studies/collection',
                'is_featured' => true,
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($portfolioItems as $item) {
            PortfolioItem::updateOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
