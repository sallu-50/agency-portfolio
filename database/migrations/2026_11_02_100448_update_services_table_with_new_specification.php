<?php

use App\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasColumn('services', 'button_text')) {
            Schema::table('services', function (Blueprint $table) {
                $table->string('button_text')->nullable()->after('features');
            });
        }

        $services = [
            [
                'slug' => 'computer-vision',
                'title' => 'Image Annotation',
                'category' => 'Core',
                'icon' => 'image',
                'badge_color' => 'blue',
                'short_description' => 'Computer vision labeling for detection and segmentation models.',
                'description' => 'Computer vision labeling for detection and segmentation models. We provide a wide range of computer vision annotation services to power your machine learning models, from autonomous driving to retail and medical imaging.',
                'features' => [
                    '2D bounding boxes, polygons and keypoints',
                    'Semantic and instance segmentation',
                    'Classification and attribute tagging',
                ],
                'button_text' => 'Explore image annotation',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'slug' => 'video-annotation',
                'title' => 'Video Annotation',
                'category' => 'Specialized',
                'icon' => 'video',
                'badge_color' => 'blue',
                'short_description' => 'Frame-accurate labeling for tracking and action recognition.',
                'description' => 'Frame-accurate labeling for tracking and action recognition. Our video annotation services are designed to help you understand motion, kinematics, and human behavior across high frame-rate video streams.',
                'features' => [
                    'Multi-object tracking across frames',
                    'Temporal action localization',
                    'Human activity and gesture labeling',
                ],
                'button_text' => 'Explore video annotation',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'slug' => 'lidar-3d',
                'title' => 'LiDAR & 3D Annotation',
                'category' => 'Specialized',
                'icon' => 'box',
                'badge_color' => 'blue',
                'short_description' => 'Point cloud labeling for autonomous driving and robotics.',
                'description' => 'Point cloud labeling for autonomous driving and robotics. High-precision 3D point cloud and LiDAR annotation services for autonomous systems, robotics, and spatial AI.',
                'features' => [
                    '3D cuboid labeling',
                    'Point cloud segmentation',
                    'Sensor-fusion (camera + LiDAR) labeling',
                ],
                'button_text' => 'Explore LiDAR annotation',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'slug' => 'nlp',
                'title' => 'Text & NLP Annotation',
                'category' => 'Core',
                'icon' => 'type',
                'badge_color' => 'blue',
                'short_description' => 'Language data for NLP models and LLM training and evaluation.',
                'description' => 'Language data for NLP models and LLM training and evaluation. High-quality NLP annotation services to train and validate your language models.',
                'features' => [
                    'Named entity recognition and entity linking',
                    'Sentiment analysis and intent classification',
                    'RLHF and prompt/response evaluation',
                ],
                'button_text' => 'Explore NLP annotation',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'slug' => 'audio-annotation',
                'title' => 'Audio Annotation & Transcription',
                'category' => 'Specialized',
                'icon' => 'mic',
                'badge_color' => 'blue',
                'short_description' => 'Speech and sound data labeled for voice AI.',
                'description' => 'Speech and sound data labeled for voice AI. Our audio annotation services help you build robust voice and sound recognition models with extreme phonetic precision.',
                'features' => [
                    'Timestamped multi-language transcription',
                    'Speaker diarization',
                    'Sound event and noise tagging',
                ],
                'button_text' => 'Explore audio annotation',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'slug' => 'data-collection',
                'title' => 'Data Collection',
                'category' => 'Core',
                'icon' => 'database',
                'badge_color' => 'blue',
                'short_description' => 'Custom datasets sourced for your model’s use case.',
                'description' => 'Custom datasets sourced for your model’s use case. We specialize in collecting high-quality, diverse, and ethically sourced datasets to meet the specific needs of your AI projects.',
                'features' => [
                    'Image, audio, video and text collection',
                    'Geographic and demographic diversity',
                    'Privacy-compliant collection protocols',
                ],
                'button_text' => 'Explore data collection',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['slug' => $service['slug']], $service);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('services', 'button_text')) {
            Schema::table('services', function (Blueprint $table) {
                $table->dropColumn('button_text');
            });
        }
    }
};
