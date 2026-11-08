<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\BeforeAfterSlider;
use App\Models\ContactMessage;
use App\Models\HeroVideo;
use App\Models\PortfolioItem;
use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AgencySiteTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_home_page_loads_successfully_without_leadership_team_section(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('High-Quality', false);
        $response->assertSee('Data Annotation', false);
        $response->assertSee('Data Collection', false);
        // Leadership team spotlight must not be present on the home page
        $response->assertDontSee('Meet Our Leadership Team', false);
    }

    public function test_services_index_page_loads_all_services(): void
    {
        $response = $this->get(route('services.index'));

        $response->assertStatus(200);
        $response->assertSee('AI Annotation', false);
        $response->assertSee('Services', false);
        $response->assertSee('Data Collection', false);
        $response->assertSee('Image Annotation', false);
        $response->assertSee('Text &amp; NLP Annotation', false);
    }

    public function test_home_page_displays_services_with_requested_specification_and_buttons(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);

        // Verify titles
        $response->assertSee('Image Annotation', false);
        $response->assertSee('Video Annotation', false);
        $response->assertSee('LiDAR &amp; 3D Annotation', false);
        $response->assertSee('Text &amp; NLP Annotation', false);
        $response->assertSee('Audio Annotation &amp; Transcription', false);
        $response->assertSee('Data Collection', false);

        // Verify button labels
        $response->assertSee('Explore image annotation', false);
        $response->assertSee('Explore video annotation', false);
        $response->assertSee('Explore LiDAR annotation', false);
        $response->assertSee('Explore NLP annotation', false);
        $response->assertSee('Explore audio annotation', false);
        $response->assertSee('Explore data collection', false);

        // Verify key features
        $response->assertSee('2D bounding boxes, polygons and keypoints', false);
        $response->assertSee('Multi-object tracking across frames', false);
        $response->assertSee('3D cuboid labeling', false);
        $response->assertSee('Named entity recognition and entity linking', false);
        $response->assertSee('Timestamped multi-language transcription', false);
        $response->assertSee('Image, audio, video and text collection', false);
    }

    public function test_home_page_displays_annotation_tools_and_platforms_section(): void
    {
        $this->markTestSkipped('Annotation tools and platforms section is temporarily commented out.');

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Annotation Tools and Platforms We Work With', false);
        $response->assertSee('We work inside industry-standard annotation platforms, or on your own, so your data stays in your existing workflow.', false);

        // Verify platforms
        $response->assertSee('CVAT', false);
        $response->assertSee('Label Studio', false);
        $response->assertSee('Labelbox', false);
        $response->assertSee('V7', false);
        $response->assertSee('SuperAnnotate', false);
        $response->assertSee('Scale AI', false);
        $response->assertSee('Supervisely', false);
        $response->assertSee('Audacity', false);
        $response->assertSee('Praat', false);
        $response->assertSee('Prodigy', false);
        $response->assertSee('Doccano', false);
        $response->assertSee('Custom / Client', false);
    }

    public function test_home_page_displays_why_ai_teams_choose_marveit_section(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Why AI Teams Choose Marveit for Data Annotation', false);
        $response->assertSee('Accurate labels, predictable delivery and careful data handling, backed by a process you can audit, not just promises.', false);

        // Verify 6 pillars
        $response->assertSee('Multi-Stage Quality Control', false);
        $response->assertSee('Every batch goes through annotator work, peer review and senior QA sign-off', false);

        $response->assertSee('Pilot First, Then Scale', false);
        $response->assertSee('We start with a small pilot on your own data', false);

        $response->assertSee('Teams That Scale With Your Roadmap', false);
        $response->assertSee('Go from a few hundred files to millions without losing consistency', false);

        $response->assertSee('Secure Data Handling', false);
        $response->assertSee('NDA signed before any data is shared', false);

        $response->assertSee('Works in Your Tools', false);
        $response->assertSee('We label in CVAT, Label Studio, Labelbox, V7, SuperAnnotate', false);

        $response->assertSee('Clear Communication', false);
        $response->assertSee('A dedicated project manager, regular progress reports and a fast feedback loop', false);

        // Verify bottom CTA sub-block
        $response->assertSee('See our quality process on your own data.', false);
        $response->assertSee('Start Free Trial', false);
        $response->assertSee('Talk to an Expert', false);
    }

    public function test_home_page_displays_industries_served_section(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Data Annotation Services for Every AI Industry', false);
        $response->assertSee('From self-driving perception to medical imaging and voice AI, we label your data to your guidelines and your industry’s formats.', false);

        // Verify 6 cards
        $response->assertSee('Automotive &amp; Autonomous Driving', false);
        $response->assertSee('Training data for perception and driver-assistance models.', false);
        $response->assertSee('LiDAR 3D cuboids, lane and road markings', false);

        $response->assertSee('Healthcare &amp; Medical AI', false);
        $response->assertSee('Careful labeling for diagnostic and clinical models.', false);
        $response->assertSee('CT and MRI segmentation, medical image classification', false);

        $response->assertSee('Retail &amp; E-Commerce', false);
        $response->assertSee('Cleaner catalogs and smarter product search.', false);

        $response->assertSee('Agriculture &amp; Drone Imagery', false);
        $response->assertSee('Aerial and field data for crop-monitoring models.', false);

        $response->assertSee('Voice AI &amp; Conversational Systems', false);
        $response->assertSee('Speech and language data for assistants and chatbots.', false);

        $response->assertSee('LLM &amp; Generative AI', false);
        $response->assertSee('Human feedback data for model training and evaluation.', false);

        // Verify bottom CTA sub-block
        $response->assertSee('Don’t see your industry? We write custom annotation guidelines for any domain.', false);
    }

    public function test_home_page_displays_sample_data_cta_section(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Let’s Label a Sample of Your Data', false);
        $response->assertSee('Send us a small sample and see our annotation quality before you commit.', false);
        $response->assertSee('We follow your guidelines, sign an NDA first, and share an accuracy report with every delivery.', false);
        $response->assertSee('Start Free Trial', false);
    }

    public function test_service_detail_pages_load_successfully(): void
    {
        $services = ['data-collection', 'computer-vision', 'nlp', 'audio-annotation', 'video-annotation', 'lidar-3d'];

        foreach ($services as $slug) {
            $response = $this->get(route('services.show', $slug));
            $response->assertStatus(200);
            $response->assertSee('Pipeline Overview', false);
        }
    }

    public function test_team_page_loads_with_leadership_team_and_formation_order(): void
    {
        $response = $this->get(route('team'));

        $response->assertStatus(200);
        $response->assertSee('Meet Our', false);
        $response->assertSee('Leadership Team', false);
        $response->assertSee('Ebrahim Khalil', false);

        // Test filtered department
        $filteredResponse = $this->get(route('team', ['dept' => 'cv']));
        $filteredResponse->assertStatus(200);
        $filteredResponse->assertSee('Linnea Zhang', false);
    }

    public function test_team_members_follow_designation_hierarchy_formation(): void
    {
        // Create team members for each rank
        TeamMember::create([
            'name' => 'John Data Annotator',
            'role' => 'Data Annotator',
            'department_badge' => 'Annotation',
            'badge_color' => 'blue',
            'category' => 'cv',
            'bio' => 'Data annotation professional',
        ]);

        TeamMember::create([
            'name' => 'Alice Project Manager',
            'role' => 'Project Manager',
            'department_badge' => 'Management',
            'badge_color' => 'purple',
            'category' => 'leadership',
            'bio' => 'Senior project manager',
        ]);

        TeamMember::create([
            'name' => 'Bob Senior Annotator',
            'role' => 'Senior Data Annotator',
            'department_badge' => 'Annotation',
            'badge_color' => 'green',
            'category' => 'cv',
            'bio' => 'Senior data annotator',
        ]);

        $orderedMembers = TeamMember::where('is_active', true)->inHierarchyOrder()->get();

        // Verify ranks are ordered: CEO (1) -> PM (2) -> Operation Manager (3) -> Team Lead (4) -> QA Lead (5) -> Senior Annotator (6) -> Data Annotator (7)
        $previousRank = 0;
        foreach ($orderedMembers as $member) {
            $this->assertGreaterThanOrEqual($previousRank, $member->designation_rank);
            $previousRank = $member->designation_rank;
        }

        // Verify public team page lists Alice Project Manager before Bob Senior Annotator and John Data Annotator
        $response = $this->get(route('team'));
        $content = $response->getContent();

        $posPM = strpos($content, 'Alice Project Manager');
        $posSr = strpos($content, 'Bob Senior Annotator');
        $posDA = strpos($content, 'John Data Annotator');

        $this->assertNotFalse($posPM);
        $this->assertNotFalse($posSr);
        $this->assertNotFalse($posDA);
        $this->assertTrue($posPM < $posSr, 'Project Manager should appear before Senior Data Annotator');
        $this->assertTrue($posSr < $posDA, 'Senior Data Annotator should appear before Data Annotator');
    }

    public function test_team_cards_only_display_photo_name_and_designation(): void
    {
        $response = $this->get(route('team'));
        $response->assertStatus(200);

        // Name, designation, and image are present
        $response->assertSee('Ebrahim Khalil', false);
        $response->assertSee('CEO', false);

        // Bio is NOT present on the team cards
        $response->assertDontSee('Over 10 years scaling human-in-the-loop', false);
    }

    public function test_contact_page_loads_successfully(): void
    {
        $response = $this->get(route('contact'));

        $response->assertStatus(200);
        $response->assertSee('Contact Marveit AI', false);
        $response->assertSee('Reply within 24 hours', false);
        $response->assertSee('WhatsApp', false);
        $response->assertSee('ebrahim@marveit.com', false);
        $response->assertSee('Request a Quote', false);
        $response->assertSee('Send My Request', false);
    }

    public function test_contact_form_submission_stores_message_and_redirects(): void
    {
        $formData = [
            'name' => 'Alice Walker',
            'email' => 'alice@example.com',
            'phone' => '+1-202-555-0143',
            'service' => 'Image & Computer Vision',
            'message' => 'We require 50,000 polygon segmentation labels for highway ADAS datasets.',
        ];

        $response = $this->post(route('contact.store'), $formData);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Alice Walker',
            'email' => 'alice@example.com',
            'service' => 'Image & Computer Vision',
        ]);
    }

    public function test_contact_form_validates_required_fields(): void
    {
        $response = $this->post(route('contact.store'), [
            'name' => '',
            'email' => 'not-an-email',
            'message' => '',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
        $this->assertEquals(0, ContactMessage::count());
    }

    public function test_legacy_html_redirects_work(): void
    {
        $this->get('/index.html')->assertRedirect('/');
        $this->get('/team.html')->assertRedirect('/team');
        $this->get('/contact.html')->assertRedirect('/contact');
        $this->get('/data-collection.html')->assertRedirect('/services/data-collection');
        $this->get('/computer-vision.html')->assertRedirect('/services/computer-vision');
    }

    public function test_navbar_contains_highlighted_portfolio_option(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Case Studies', false);
        $response->assertSee('Team', false);
        $response->assertSee('Resources', false);
        $response->assertSee('Contact', false);
    }

    public function test_public_portfolio_page_loads_with_seeded_projects(): void
    {
        $response = $this->get(route('portfolio'));

        $response->assertStatus(200);
        $response->assertSee('Computer Vision', false);
    }

    public function test_public_portfolio_detail_page_loads(): void
    {
        $project = PortfolioItem::first();

        $response = $this->get(route('portfolio.show', $project->slug));

        $response->assertStatus(200);
        $response->assertSee(e($project->title), false);
        $response->assertSee('Project Overview', false);
    }

    public function test_admin_guest_is_redirected_to_filament_login(): void
    {
        $response = $this->get('/admin');

        $response->assertRedirect('/admin/login');
    }

    public function test_authenticated_admin_can_access_filament_dashboard(): void
    {
        $admin = User::where('email', 'admin@marveit.com')->first();

        $response = $this->actingAs($admin)->get('/admin');
        $response->assertStatus(200);
        $response->assertSee('Marveit AI Control', false);
    }

    public function test_authenticated_admin_can_view_filament_portfolio_resource(): void
    {
        $admin = User::where('email', 'admin@marveit.com')->first();

        $response = $this->actingAs($admin)->get('/admin/portfolio-items');
        $response->assertStatus(200);
        $response->assertSee('Portfolio', false);
    }

    public function test_authenticated_admin_can_view_filament_before_after_sliders_resource(): void
    {
        $admin = User::where('email', 'admin@marveit.com')->first();

        $response = $this->actingAs($admin)->get('/admin/before-after-sliders');
        $response->assertStatus(200);
        $response->assertSee('Before &amp; After Sliders', false);
    }

    public function test_authenticated_admin_can_view_filament_contact_messages_resource(): void
    {
        $admin = User::where('email', 'admin@marveit.com')->first();

        $response = $this->actingAs($admin)->get('/admin/contact-messages');
        $response->assertStatus(200);
        $response->assertSee('Contact Messages', false);
    }

    public function test_portfolio_page_displays_dedicated_before_after_showcase_section(): void
    {
        $response = $this->get(route('portfolio'));

        $response->assertStatus(200);
        $response->assertSee('comparisons-showcase', false);
        $response->assertSee('before-after-widget', false);
        $response->assertSee('before-after-slider.js', false);
        $response->assertSee('Autonomous Vehicle LiDAR', false);
    }

    public function test_before_after_slider_model_image_accessors(): void
    {
        $slider = BeforeAfterSlider::firstOrFail();

        $this->assertNotNull($slider->before_image_url);
        $this->assertNotNull($slider->after_image_url);
        $this->assertTrue($slider->is_active);
    }

    public function test_portfolio_page_displays_multiple_independent_comparison_sections(): void
    {
        $section2 = BeforeAfterSlider::create([
            'title' => 'Structural Crack & Thermal Leak Analysis',
            'description' => 'Real-time thermal imaging and high-resolution optical drone inspection for commercial roofs.',
            'category' => 'Thermal Inspection',
            'before_image' => 'image/team-2.jpg',
            'after_image' => 'image/team-3.jpg',
            'before_image_2' => 'image/team-4.jpg',
            'after_image_2' => 'image/team-5.jpg',
            'sort_order' => 10,
            'is_active' => true,
        ]);

        $response = $this->get(route('portfolio'));

        $response->assertStatus(200);
        $response->assertSee('comparison-section-1', false);
        $response->assertSee('comparison-section-'.$section2->id, false);
        $response->assertSee('Structural Crack &amp; Thermal Leak Analysis', false);
        $response->assertSee('Real-time thermal imaging and high-resolution optical drone inspection', false);
        $response->assertSee('slider-'.$section2->id.'-1', false);
        $response->assertSee('slider-'.$section2->id.'-2', false);

        $section2->delete();
    }

    public function test_free_trial_page_loads_with_required_fields(): void
    {
        $response = $this->get(route('free-trial'));

        $response->assertStatus(200);
        $response->assertSee('Free Trial', false);
        $response->assertSee('Start Your Free Data Annotation Pilot', false);
        $response->assertSee('Full Name', false);
        $response->assertSee('Business Email', false);
        $response->assertSee('Company', false);
        $response->assertSee('Country', false);
        $response->assertSee('Phone / WhatsApp', false);
        $response->assertSee('What do you need labeled?', false);
        $response->assertSee('Project details', false);
        $response->assertSee('Project Guidelines', false);
        $response->assertSee('Sample Data', false);
        $response->assertSee('Request My Free Pilot', false);
    }

    public function test_user_can_submit_free_trial_with_guideline_and_sample_files(): void
    {
        Storage::fake('public');

        $guideline = UploadedFile::fake()->create('annotation_guidelines.pdf', 500, 'application/pdf');
        $sampleData = UploadedFile::fake()->create('sample_frames.zip', 1200, 'application/zip');

        $response = $this->post(route('free-trial.store'), [
            'name' => 'Dr. Alex Vance',
            'email' => 'alex@robotics-ai.io',
            'company' => 'Robotics AI Inc.',
            'country' => 'United States',
            'phone' => '+1 415 555 2671',
            'service' => 'Computer Vision',
            'message' => 'Need 2D bounding boxes on 15,000 traffic surveillance frames.',
            'project_guideline' => $guideline,
            'sample_data' => $sampleData,
            'needs_nda' => true,
        ]);

        $response->assertRedirect(route('free-trial'));
        $response->assertSessionHas('success');

        $message = ContactMessage::where('email', 'alex@robotics-ai.io')->first();
        $this->assertNotNull($message);
        $this->assertEquals('Dr. Alex Vance', $message->name);
        $this->assertEquals('Robotics AI Inc.', $message->company);
        $this->assertEquals('United States', $message->country);
        $this->assertTrue((bool) $message->needs_nda);
        $this->assertEquals('free_trial', $message->type);
        $this->assertTrue($message->is_free_trial);
        $this->assertNotNull($message->guideline_file);
        $this->assertNotNull($message->sample_file);

        Storage::disk('public')->assertExists($message->guideline_file);
        Storage::disk('public')->assertExists($message->sample_file);
    }

    public function test_free_trial_requires_mandatory_fields(): void
    {
        $response = $this->post(route('free-trial.store'), []);

        $response->assertSessionHasErrors(['name', 'email', 'country', 'message']);
    }

    public function test_home_page_displays_uploaded_hero_video_when_present(): void
    {
        $video = HeroVideo::create([
            'title' => 'Watch our specialized workflow',
            'sub_caption' => 'High-throughput annotation demo',
            'badge_text' => '99.9% QA',
            'video_path' => 'hero-videos/sample-workflow.mp4',
            'poster_image' => 'hero-videos/posters/poster.jpg',
            'is_active' => true,
        ]);

        $response = $this->get(route('home'));
        $response->assertStatus(200);
        $response->assertSee('Watch our specialized workflow', false);
        $response->assertSee('High-throughput annotation demo', false);
        $response->assertSee('99.9% QA', false);
        $response->assertSee('hero-videos/sample-workflow.mp4', false);

        $video->delete();
    }

    public function test_home_page_renders_default_placeholder_when_no_hero_video_active(): void
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200);
        $response->assertSee('Watch our workflow', false);
        $response->assertSee('See how we label data with precision &amp; strict SLAs', false);
    }

    public function test_public_resources_index_page_loads_with_seeded_articles(): void
    {
        $response = $this->get(route('resources.index'));

        $response->assertStatus(200);
        $response->assertSee('Resources', false);
        $response->assertSee('Articles', false);
        $response->assertSee('Computer Vision', false);
    }

    public function test_public_article_detail_page_loads(): void
    {
        $article = Article::first();

        $response = $this->get(route('resources.show', $article->slug));

        $response->assertStatus(200);
        $response->assertSee(e($article->title), false);
    }

    public function test_authenticated_admin_can_view_filament_articles_resource(): void
    {
        $admin = User::where('email', 'admin@marveit.com')->first();

        $response = $this->actingAs($admin)->get('/admin/articles');

        $response->assertStatus(200);
        $response->assertSee('Articles &amp; Resources', false);
    }

    public function test_footer_displays_five_column_structure_and_all_specified_content(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);

        // Column 1: Logo & Text & Social
        $response->assertSee('Human-in-the-loop data annotation for computer vision, NLP, audio and video AI.', false);
        $response->assertSee('Accurate labels, secure data handling and clear delivery, built around your guidelines.', false);
        $response->assertSee('https://www.linkedin.com/company/marveit', false);
        $response->assertSee('https://www.facebook.com/marveit', false);

        // Column 2: Services
        $response->assertSee('Services</h4>', false);
        $response->assertSee('Data Collection</a>', false);
        $response->assertSee('Image Annotation</a>', false);
        $response->assertSee('Video Annotation</a>', false);
        $response->assertSee('LiDAR & 3D Annotation</a>', false);
        $response->assertSee('NLP & Text Annotation</a>', false);
        $response->assertSee('Audio Annotation & Transcription</a>', false);

        // Column 3: Industries
        $response->assertSee('Industries</h4>', false);
        $response->assertSee('/#automotive', false);
        $response->assertSee('/#healthcare', false);
        $response->assertSee('/#retail', false);
        $response->assertSee('/#agriculture', false);
        $response->assertSee('/#voice-ai', false);
        $response->assertSee('/#llm', false);

        // Column 4: Company
        $response->assertSee('Company</h4>', false);
        $response->assertSee('About Us</a>', false);
        $response->assertSee('Team</a>', false);
        $response->assertSee('Case Studies</a>', false);
        $response->assertSee('Resources</a>', false);
        $response->assertSee('Contact Us</a>', false);

        // Column 5: Get in Touch
        $response->assertSee('Get in Touch</h4>', false);
        $response->assertSee('Tell us about your dataset and model goals. A technical lead will reply within 24 hours.', false);
        $response->assertSee('ebrahim@marveit.com', false);
        $response->assertSee('Mymensingh, Bangladesh | Serving clients worldwide', false);
        $response->assertSee('WhatsApp Chat', false);

        // Bottom Bar
        $response->assertSee('&copy; 2026 Marveit AI. All rights reserved.', false);
        $response->assertSee('Privacy Policy</a>', false);
        $response->assertSee('Terms of Service</a>', false);
    }
}
