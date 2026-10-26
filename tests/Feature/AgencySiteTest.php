<?php

namespace Tests\Feature;

use App\Models\BeforeAfterSlider;
use App\Models\ContactMessage;
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
        $response->assertSee('Image &amp; Computer Vision', false);
        $response->assertSee('NLP &amp; Text Annotation', false);
    }

    public function test_service_detail_pages_load_successfully(): void
    {
        $services = ['data-collection', 'computer-vision', 'nlp', 'audio-annotation', 'video-annotation'];

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
        $response->assertSee('GET IN TOUCH', false);
        $response->assertSee('WHATSAPP', false);
        $response->assertSee('ebrahim@marveit.com', false);
        $response->assertSee('Request a Benchmark Pilot', false);
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
        $response->assertSee('Portfolio', false);
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
        $response->assertSee('comparison-split-left', false);
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

    public function test_free_trial_page_loads_with_required_fields(): void
    {
        $response = $this->get(route('free-trial'));

        $response->assertStatus(200);
        $response->assertSee('Free Trial', false);
        $response->assertSee('Start Your', false);
        $response->assertSee('Full Name', false);
        $response->assertSee('Business Email', false);
        $response->assertSee('Country', false);
        $response->assertSee('Phone Number', false);
        $response->assertSee('Project Guideline', false);
        $response->assertSee('Sample Data', false);
    }

    public function test_user_can_submit_free_trial_with_guideline_and_sample_files(): void
    {
        Storage::fake('public');

        $guideline = UploadedFile::fake()->create('annotation_guidelines.pdf', 500, 'application/pdf');
        $sampleData = UploadedFile::fake()->create('sample_frames.zip', 1200, 'application/zip');

        $response = $this->post(route('free-trial.store'), [
            'name' => 'Dr. Alex Vance',
            'email' => 'alex@robotics-ai.io',
            'country' => 'United States',
            'phone' => '+1 415 555 2671',
            'service' => 'Computer Vision',
            'message' => 'Need 2D bounding boxes on 15,000 traffic surveillance frames.',
            'project_guideline' => $guideline,
            'sample_data' => $sampleData,
        ]);

        $response->assertRedirect(route('free-trial'));
        $response->assertSessionHas('success');

        $message = ContactMessage::where('email', 'alex@robotics-ai.io')->first();
        $this->assertNotNull($message);
        $this->assertEquals('Dr. Alex Vance', $message->name);
        $this->assertEquals('United States', $message->country);
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
}
