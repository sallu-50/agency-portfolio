<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'The Ultimate Guide to Human-in-the-Loop Data Annotation for Autonomous Driving',
                'slug' => 'guide-human-in-the-loop-autonomous-driving',
                'category' => 'Computer Vision',
                'excerpt' => 'Explore how multi-sensor fusion, LiDAR point cloud labeling, and strict QA protocols enable autonomous vehicle perception models to achieve zero-defect benchmarks.',
                'content' => '<h2>Introduction to Autonomous Perception Datasets</h2>
<p>Modern autonomous driving systems rely heavily on deep neural networks trained across millions of synchronized camera frames, radar reflections, and LiDAR point clouds. However, even state-of-the-art foundation models struggle with occluded road agents, harsh weather reflections, and dynamic edge cases.</p>

<h3>The Critical Role of Human-in-the-Loop (HITL) Validation</h3>
<p>While automated pre-labeling accelerates throughput, human annotators remain irreplaceable for:</p>
<ul>
    <li><strong>3D Bounding Cuboids:</strong> Precision yaw, pitch, and roll alignment within centimeter accuracy.</li>
    <li><strong>Temporal Tracking:</strong> Maintaining continuous object IDs across changing camera perspectives.</li>
    <li><strong>Challenging Environmental Artifacts:</strong> Identifying lane markings obscured by snow, glare, or road construction.</li>
</ul>

<h3>Multi-Tier Consensus Quality Assurance</h3>
<p>At Marveit AI, we enforce a two-tier annotator agreement protocol. Discrepant bounding boxes trigger automated arbitration by senior domain reviewers, ensuring our client deliveries consistently maintain a 99.8%+ benchmark score.</p>

<blockquote>"High-accuracy training data is the foundation of vehicle safety. A 1% error rate on perception labels can lead to critical misclassifications in autonomous path planners."</blockquote>

<h3>Conclusion</h3>
<p>As Level 3 and Level 4 autonomous systems scale worldwide, the bottleneck shifts from model parameters to data verification integrity. Investing in specialized, disciplined human labeling workforces is the most dependable path to commercial safety deployment.</p>',
                'image' => 'image/crack-defect-raw.jpg',
                'author_name' => 'Ebrahim Hossain',
                'author_role' => 'Principal AI Architect',
                'read_time' => '6 min read',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(2),
                'tags' => 'Computer Vision, Autonomous Driving, LiDAR, HITL, Data Annotation',
                'sort_order' => 1,
            ],
            [
                'title' => 'Why Data Quality Trumps Model Architecture in Enterprise Computer Vision',
                'slug' => 'data-quality-trumps-model-architecture',
                'category' => 'AI Research',
                'excerpt' => 'A data-centric AI approach consistently outperforms hyperparameter optimization. Discover how clean annotations can boost model accuracy by over 18%.',
                'content' => '<h2>The Shift Towards Data-Centric AI</h2>
<p>For years, machine learning engineers spent the majority of their cycles testing new backbones, tuning learning rates, and stacking layers. Yet empirical research demonstrates that clean, systematically audited datasets yield substantially higher gains than architectural iterations alone.</p>

<h3>Common Dataset Degeneracies in Production</h3>
<p>When computer vision pipelines fail in production environments, the root cause is rarely an inadequate loss function. Rather, common issues include:</p>
<ul>
    <li><strong>Ambiguous boundary polygons:</strong> Inconsistent edge margins causing detector jitter.</li>
    <li><strong>Label noise:</strong> Class confusion between visually similar industrial defect categories.</li>
    <li><strong>Severe distribution skew:</strong> Over-representation of daytime lighting conditions.</li>
</ul>

<h3>Practical Steps to Audit Your Labels</h3>
<ol>
    <li>Run automated out-of-distribution detection before sending batches to model training.</li>
    <li>Conduct blind re-annotation checks on 5% random slices to evaluate inter-annotator reliability.</li>
    <li>Provide comprehensive guidelines with visual edge-case catalogs to annotation teams.</li>
</ol>

<p>By shifting from model tuning to systematic dataset hygiene, engineering teams save weeks of compute and achieve reliable deployment benchmarks.</p>',
                'image' => 'image/crack-defect-annotated.jpg',
                'author_name' => 'Dr. Ariful Islam',
                'author_role' => 'Lead Data Scientist',
                'read_time' => '5 min read',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(5),
                'tags' => 'Data-Centric AI, Computer Vision, Dataset Quality, Labeling Standards',
                'sort_order' => 2,
            ],
            [
                'title' => 'RLHF & Prompt Tuning: Crafting Multi-Turn Datasets for Specialized LLMs',
                'slug' => 'rlhf-multi-turn-datasets-specialized-llms',
                'category' => 'NLP & LLMs',
                'excerpt' => 'How expert human feedback, pairwise ranking, and safety red-teaming turn raw foundation models into domain-expert enterprise assistants.',
                'content' => '<h2>Taming Foundation Models for Enterprise Domains</h2>
<p>General-purpose Large Language Models (LLMs) often hallucinate or fail when confronted with highly technical medical, legal, or financial inquiries. Reinforcement Learning from Human Feedback (RLHF) and Direct Preference Optimization (DPO) bridge this gap.</p>

<h3>The Anatomy of High-Value Preference Datasets</h3>
<p>Creating robust alignment datasets requires domain-matter specialists who evaluate candidate outputs against multi-dimensional criteria:</p>
<ul>
    <li><strong>Factuality & Grounding:</strong> Verifying assertions against internal knowledge bases.</li>
    <li><strong>Tone & Brand Alignment:</strong> Adhering to professional persona constraints.</li>
    <li><strong>Safety & Red-Teaming:</strong> Stress-testing against prompt injection and sensitive data leakage.</li>
</ul>

<h3>Pairwise Scoring vs. Direct Editing</h3>
<p>Our empirical workflows show that a combined pipeline—where specialists rank model generations and then edit suboptimal responses—delivers the steepest loss reduction during policy model fine-tuning.</p>',
                'image' => 'image/team-1.jpg',
                'author_name' => 'Marveit NLP Lab',
                'author_role' => 'Language & Alignment Research',
                'read_time' => '7 min read',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(9),
                'tags' => 'NLP, RLHF, LLMs, DPO, Prompt Engineering',
                'sort_order' => 3,
            ],
            [
                'title' => 'Edge Cases in Medical Imaging Annotation: Strict HIPAA Compliance & QA',
                'slug' => 'medical-imaging-annotation-hipaa-qa',
                'category' => 'Annotation Standards',
                'excerpt' => 'Navigating radiology segmentation, anonymized DICOM workflows, and certified clinician signoffs for FDA-grade diagnostic AI applications.',
                'content' => '<h2>The High Stakes of Clinical AI Validation</h2>
<p>Medical artificial intelligence operates in a zero-tolerance domain. A mislabeled nodule or blurred segmentation boundary in an MRI or CT scan can disrupt life-saving clinical decision support tools.</p>

<h3>De-Identification & Regulatory Compliance</h3>
<p>Prior to entering human annotation queues, all patient scans must undergo automated de-identification adhering to HIPAA and GDPR requirements. Metadata headers containing Protected Health Information (PHI) are stripped while maintaining coordinate spatial fidelity.</p>

<h3>Clinical Verification Loops</h3>
<p>Annotation pipelines for diagnostic models should mandate verified healthcare practitioners or radiologists in the secondary review tier, confirming anatomical boundary accuracy before finalizing ground truth masks.</p>',
                'image' => 'image/team-2.jpg',
                'author_name' => 'Ebrahim Hossain',
                'author_role' => 'Principal AI Architect',
                'read_time' => '4 min read',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(14),
                'tags' => 'Healthcare AI, Medical Imaging, DICOM, HIPAA, Segmentation',
                'sort_order' => 4,
            ],
        ];

        foreach ($articles as $article) {
            Article::updateOrCreate(['slug' => $article['slug']], $article);
        }
    }
}
