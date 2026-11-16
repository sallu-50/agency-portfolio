<?php

namespace Database\Seeders;

use App\Models\JobOpening;
use Illuminate\Database\Seeder;

class JobOpeningSeeder extends Seeder
{
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'Data Annotator (CV / NLP / Audio)',
                'role_key' => 'Data Annotator',
                'department' => 'Data Annotation',
                'location' => 'Mymensingh, Bangladesh',
                'employment_type' => 'Full-Time',
                'short_description' => 'Label image, video, 3D LiDAR, text and audio data adhering to rigorous production benchmarks.',
                'requirements' => [
                    'Strong attention to visual and spatial detail',
                    'Familiarity with CVAT, Label Studio, or other labeling software is a plus',
                    'Ability to follow strict ontology and guidelines',
                ],
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Senior Data Annotator',
                'role_key' => 'Senior Data Annotator',
                'department' => 'Data Annotation',
                'location' => 'Mymensingh, Bangladesh',
                'employment_type' => 'Full-Time',
                'short_description' => 'Lead complex annotation tasks, train junior annotators, and ensure edge-case resolution.',
                'requirements' => [
                    '1+ year experience in 2D/3D or NLP data annotation',
                    'Proven track record of high accuracy and throughput',
                    'Experience peer-reviewing junior annotator submissions',
                ],
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'QA Lead (Quality Assurance)',
                'role_key' => 'QA Lead',
                'department' => 'Quality Assurance',
                'location' => 'Mymensingh, Bangladesh',
                'employment_type' => 'Full-Time',
                'short_description' => 'Execute random batch audits, compute consensus IoU metrics, and sign off on client deliverable reports.',
                'requirements' => [
                    'Deep understanding of IoU, precision-recall, and error categorization',
                    'Experience crafting guideline documentation and edge-case handbooks',
                    'Strong communication and analytical skills',
                ],
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Annotation Team Lead',
                'role_key' => 'Team Lead',
                'department' => 'Operations & Management',
                'location' => 'Mymensingh, Bangladesh',
                'employment_type' => 'Full-Time',
                'short_description' => 'Manage dedicated annotation pods, coordinate shift throughput, and interface with client engineering leads.',
                'requirements' => [
                    'Proven leadership of teams with 10+ data annotators',
                    'Experience meeting tight client delivery deadlines and SLAs',
                    'Fluency in technical English for client sync meetings',
                ],
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($jobs as $job) {
            JobOpening::updateOrCreate(
                ['title' => $job['title']],
                $job
            );
        }
    }
}
