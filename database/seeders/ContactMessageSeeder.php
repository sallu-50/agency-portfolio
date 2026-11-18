<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                'name' => 'Dr. Julian Vance',
                'email' => 'julian.vance@apexrobotics.io',
                'phone' => '+1 (415) 890-4321',
                'company' => 'Apex Robotics',
                'country' => 'United States',
                'service' => 'LiDAR & 3D Annotation',
                'type' => 'free_trial',
                'needs_nda' => true,
                'message' => 'We are evaluating annotation partners for a high-density 3D LiDAR point cloud dataset captured by our warehouse AMR fleet. We would like to initiate a 100-frame free trial benchmark with strict 3D cuboid precision.',
                'is_read' => false,
                'created_at' => now()->subHours(2),
            ],
            [
                'name' => 'Sophia Lindqvist',
                'email' => 'sophia.l@bioscan-health.de',
                'phone' => '+49 89 2441 5500',
                'company' => 'BioScan Health AI',
                'country' => 'Germany',
                'service' => 'Image Annotation',
                'type' => 'contact',
                'needs_nda' => true,
                'message' => 'We require HIPAA and GDPR-compliant polygonal segmentation for abdominal MRI series. Can we arrange a call with your technical lead to review our annotation guidelines and secure transfer protocols?',
                'is_read' => true,
                'created_at' => now()->subDays(1),
            ],
            [
                'name' => 'Marcus Brody',
                'email' => 'mbrody@verbalogic.co.uk',
                'phone' => '+44 20 7946 0912',
                'company' => 'VerbaLogic AI',
                'country' => 'United Kingdom',
                'service' => 'NLP & Text Annotation',
                'type' => 'free_trial',
                'needs_nda' => false,
                'message' => 'Looking for multi-turn conversational preference ranking and RLHF prompt alignment across English and German. We would like to test sample evaluation with your NLP pod.',
                'is_read' => true,
                'created_at' => now()->subDays(3),
            ],
            [
                'name' => 'Tariq Al-Mansoor',
                'email' => 'tariq@droneagro.ae',
                'phone' => '+971 4 312 8900',
                'company' => 'DroneAgro Solutions',
                'country' => 'United Arab Emirates',
                'service' => 'Custom Dataset Collection',
                'type' => 'contact',
                'needs_nda' => true,
                'message' => 'We need multispectral aerial crop imagery labeled with semantic boundaries for crop stress and irrigation leak detection across 20,000 hectares.',
                'is_read' => true,
                'created_at' => now()->subDays(5),
            ],
        ];

        foreach ($messages as $msg) {
            ContactMessage::updateOrCreate(
                ['email' => $msg['email']],
                $msg
            );
        }
    }
}
