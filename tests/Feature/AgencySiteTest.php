<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use App\Models\PortfolioItem;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AgencySiteTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_home_page_loads_successfully_with_services_and_team(): void
    {
        $response = $this->get(route('home'));

        $response->assertSee('High-Quality', false);
        $response->assertSee('Data Annotation', false);
        $response->assertSee('Data Collection', false);
        $response->assertSee('Ebrahim Khalil', false);
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

    public function test_team_page_loads_with_members_and_department_filters(): void
    {
        $response = $this->get(route('team'));

        $response->assertSee('Meet The Minds Behind', false);
        $response->assertSee('Marveit AI', false);
        $response->assertSee('Abdullah Al Salman', false);
        $response->assertSee('Dr. Sarah Chen', false);

        // Test filtered department
        $filteredResponse = $this->get(route('team', ['dept' => 'cv']));
        $filteredResponse->assertStatus(200);
        $filteredResponse->assertSee('Linnea Zhang', false);
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
        $response->assertSee('Our AI Dataset', false);
        $response->assertSee('Autonomous Vehicle 3D LiDAR', false);
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

    public function test_admin_guest_is_redirected_to_login(): void
    {
        $response = $this->get(route('admin.dashboard'));

        $response->assertRedirect(route('login'));
    }

    public function test_admin_can_login_with_seeded_credentials(): void
    {
        $response = $this->post(route('admin.login.submit'), [
            'email' => 'admin@marveit.com',
            'password' => 'admin123',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticated();
    }

    public function test_authenticated_admin_can_view_dashboard_and_portfolio_list(): void
    {
        $admin = User::where('email', 'admin@marveit.com')->first();

        $response = $this->actingAs($admin)->get(route('admin.dashboard'));
        $response->assertStatus(200);
        $response->assertSee('Control Center Dashboard', false);

        $listResponse = $this->actingAs($admin)->get(route('admin.portfolio.index'));
        $listResponse->assertStatus(200);
        $listResponse->assertSee('Portfolio Projects', false);
    }

    public function test_admin_can_create_portfolio_project(): void
    {
        $admin = User::where('email', 'admin@marveit.com')->first();

        $payload = [
            'title' => 'Drone Geospatial Crop Health Mapping',
            'category' => 'Data Collection',
            'client_name' => 'AgriTech Global',
            'metrics' => '150K Aerial Hectares • 99.8% Precision',
            'short_description' => 'Multispectral drone imagery labeling for automated crop stress detection.',
            'description' => 'Full polygon mapping of agricultural plots and weed clusters across continuous growth cycles.',
            'tags' => 'Drone, Agriculture, Multispectral',
            'is_featured' => 1,
            'is_active' => 1,
        ];

        $response = $this->actingAs($admin)->post(route('admin.portfolio.store'), $payload);

        $response->assertRedirect(route('admin.portfolio.index'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('portfolio_items', [
            'title' => 'Drone Geospatial Crop Health Mapping',
            'client_name' => 'AgriTech Global',
        ]);
    }
}
