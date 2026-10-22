<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Services
        $services = [
            [
                'slug' => 'data-collection',
                'title' => 'Data Collection',
                'category' => 'Core',
                'icon' => 'database',
                'badge_color' => 'blue',
                'short_description' => 'Diverse datasets tailored to needs.',
                'description' => 'We specialize in collecting high-quality, diverse, and ethically sourced datasets to meet the specific needs of your AI projects. Our data collection services cover a wide range of data types, including images, text, audio, and video.',
                'features' => [
                    'Multi-Modal Data Gathering (Image, Audio, Video, Text)',
                    'Geographic & Cultural Diversity Sourcing',
                    'Ethical & Privacy-Compliant Protocols (GDPR / HIPAA)',
                    'Custom Scraping & Synthetic Data Generation',
                    'Strict Consent and Anonymization Pipelines',
                ],
                'sort_order' => 1,
            ],
            [
                'slug' => 'computer-vision',
                'title' => 'Image & Computer Vision',
                'category' => 'Core',
                'icon' => 'image',
                'badge_color' => 'green',
                'short_description' => 'Bounding boxes, segmentation & 3D LiDAR.',
                'description' => 'We provide a wide range of computer vision annotation services to power your machine learning models, from autonomous driving to retail and medical imaging.',
                'features' => [
                    '2D / 3D Bounding Boxes',
                    'Polygonal & Semantic Segmentation',
                    'LiDAR Point Cloud 3D Cuboids',
                    'Keypoint / Landmark Detection & Skeletal Tracking',
                    'Instance & Panoptic Segmentation',
                ],
                'sort_order' => 2,
            ],
            [
                'slug' => 'nlp',
                'title' => 'NLP & Text Annotation',
                'category' => 'Core',
                'icon' => 'type',
                'badge_color' => 'purple',
                'short_description' => 'NER, sentiment analysis & LLM RLHF.',
                'description' => 'High-quality NLP annotation services to train and validate your language models. Our expertise covers named entity recognition, sentiment analysis, and conversational AI alignment.',
                'features' => [
                    'Named Entity Recognition (NER) & Entity Linking',
                    'Sentiment Analysis & Intent Classification',
                    'LLM RLHF & Human-in-the-loop Prompt Evaluation',
                    'Dialogue Quality & Multi-turn Conversational Tagging',
                    'Content Moderation & Toxicity Categorization',
                ],
                'sort_order' => 3,
            ],
            [
                'slug' => 'audio-annotation',
                'title' => 'Audio Transcription',
                'category' => 'Specialized',
                'icon' => 'mic',
                'badge_color' => 'yellow',
                'short_description' => 'Speech-to-text & acoustic event tagging.',
                'description' => 'Our audio annotation services help you build robust voice and sound recognition models with extreme phonetic precision and multi-speaker separation.',
                'features' => [
                    'Timestamped Audio Transcription (Multi-Language)',
                    'Speaker Diarization (identifying who spoke and when)',
                    'Acoustic Sound Event & Environmental Noise Tagging',
                    'Emotion & Pitch Recognition from Speech',
                ],
                'sort_order' => 4,
            ],
            [
                'slug' => 'video-annotation',
                'title' => 'Video Analysis',
                'category' => 'Specialized',
                'icon' => 'video',
                'badge_color' => 'red',
                'short_description' => 'Object tracking across frames & activities.',
                'description' => 'Our video annotation services are designed to help you understand motion, kinematics, and human behavior across high frame-rate video streams.',
                'features' => [
                    'Multi-Object Tracking (MOT) Across Frames',
                    'Video Segmentation & Temporal Action Localization',
                    'Human Activity & Gesture Recognition',
                    'Kinematic Pose Estimation & Trajectory Analysis',
                ],
                'sort_order' => 5,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['slug' => $service['slug']], $service);
        }

        // 2. Seed Designations
        $this->call(DesignationSeeder::class);

        // 3. Seed Team Members
        $team = [
            [
                'name' => 'Ebrahim Khalil',
                'role' => 'CEO',
                'gender' => 'man',
                'department_badge' => 'Executive',
                'badge_color' => 'blue',
                'category' => 'leadership',
                'image' => 'image/team-1.jpg',
                'bio' => 'Over 10 years scaling human-in-the-loop AI annotation workflows for global enterprises and autonomous systems.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Abdullah Al Salman',
                'role' => 'Project Manager',
                'gender' => 'man',
                'department_badge' => 'Management',
                'badge_color' => 'purple',
                'category' => 'leadership',
                'image' => 'image/team-2.jpg',
                'bio' => 'Spearheads client deliverables, project timelines, multi-disciplinary pod workflows, and milestone completion.',
                'sort_order' => 1,
            ],
            [
                'name' => 'David Wong',
                'role' => 'Operation Manager',
                'gender' => 'man',
                'department_badge' => 'Operations',
                'badge_color' => 'yellow',
                'category' => 'leadership',
                'image' => 'image/team-4.jpg',
                'bio' => 'Oversees 24/7 turnaround pipelines, SLA enforcement, annotator training curricula, and SOC 2 adherence.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Marcus Vance',
                'role' => 'Team Lead',
                'gender' => 'man',
                'department_badge' => 'Team Lead',
                'badge_color' => 'green',
                'category' => 'leadership cv',
                'image' => 'image/team-6.jpg',
                'bio' => 'Leads daily annotation pods, task assignments, edge-case resolution, and annotator performance benchmarking.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Dr. Sarah Chen',
                'role' => 'QA Lead',
                'gender' => 'women',
                'department_badge' => 'Quality Assurance',
                'badge_color' => 'purple',
                'category' => 'leadership qa',
                'image' => 'image/team-3.jpg',
                'bio' => 'PhD in Cognitive ML. Architect of multi-tier consensus algorithms, ground-truth validation, and 99.8% precision SLA.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Farhan Kabir',
                'role' => 'Senior Data Annotator',
                'gender' => 'man',
                'department_badge' => 'Data Annotation',
                'badge_color' => 'green',
                'category' => 'cv',
                'image' => 'image/team-2.jpg',
                'bio' => 'Expert in 3D sensor fusion, complex LiDAR point clouds, polygon segmentation, and multimodal data labeling.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Amina Begum',
                'role' => 'Data Annotator',
                'gender' => 'women',
                'department_badge' => 'Data Annotation',
                'badge_color' => 'blue',
                'category' => 'nlp cv',
                'image' => 'image/team-3.jpg',
                'bio' => 'Specializes in high-accuracy bounding boxes, conversational text sentiment classification, and semantic masks.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Linnea Zhang',
                'role' => 'Team Lead',
                'gender' => 'women',
                'department_badge' => 'Computer Vision',
                'badge_color' => 'green',
                'category' => 'cv',
                'image' => 'image/team-5.jpg',
                'bio' => 'Expert in semantic segmentation, polygon masks, and 3D bounding cubes for autonomous vehicle vision datasets.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Elena Rostova',
                'role' => 'Team Lead',
                'gender' => 'women',
                'department_badge' => 'Audio & Speech',
                'badge_color' => 'yellow',
                'category' => 'audio',
                'image' => 'image/team-7.jpg',
                'bio' => 'Supervises phonetic alignments, noise classification, multi-speaker diarization, and acoustic event tagging.',
                'sort_order' => 3,
            ],
            [
                'name' => 'Rajesh Patel',
                'role' => 'QA Lead',
                'gender' => 'man',
                'department_badge' => 'Compliance & QA',
                'badge_color' => 'blue',
                'category' => 'qa',
                'image' => 'image/team-8.jpg',
                'bio' => 'Enforces GDPR, HIPAA, and ISO 27001 data masking, managing independent consensus arbitration panels.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Tasnim Ahmed',
                'role' => 'QA Lead',
                'gender' => 'women',
                'department_badge' => 'Quality Assurance',
                'badge_color' => 'blue',
                'category' => 'qa',
                'image' => 'image/team-8.jpg',
                'bio' => 'Automated and manual cross-checks to ensure client deliverables consistently meet 99.8% precision SLA.',
                'sort_order' => 3,
            ],
            [
                'name' => 'Michael Scott',
                'role' => 'Data Annotator',
                'gender' => 'man',
                'department_badge' => 'Audio & Speech',
                'badge_color' => 'yellow',
                'category' => 'audio',
                'image' => 'image/team-6.jpg',
                'bio' => 'Accurate timestamping, multi-lingual transcription, and conversational speech datasets for voice AI models.',
                'sort_order' => 2,
            ],
        ];

        foreach ($team as $member) {
            TeamMember::updateOrCreate(['name' => $member['name']], $member);
        }

        // 3. Seed Default Admin User
        User::updateOrCreate(
            ['email' => 'admin@marveit.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 4. Seed Portfolio Projects
        $this->call(PortfolioItemSeeder::class);

        // 5. Seed Before & After Sliders
        $this->call(BeforeAfterSliderSeeder::class);
    }
}
